<?php  
	if(!defined('SOURCES')) die("Error");

	@$id = htmlspecialchars($_GET['id']);
	@$idl = htmlspecialchars($_GET['idl']);
	@$idc = htmlspecialchars($_GET['idc']);
	@$idi = htmlspecialchars($_GET['idi']);
	@$ids = htmlspecialchars($_GET['ids']);
	@$idb = htmlspecialchars($_GET['idb']);

	if($id!='')
	{
		/* Lấy sản phẩm detail */
		$row_detail = $d->rawQueryOne("select type, id, ten$lang, tenkhongdauvi, tenkhongdauen, mota$lang, noidung$lang, masp, luotxem, id_brand, id_mau, id_size, id_list, id_cat, id_item, id_sub, id_tags, photo, options, giakm, giamoi, gia,lichtrinh,khoihanh from #_product where hienthi=1 and id = ? and type = ? limit 0,1",array($id,$type));

		/* Cập nhật lượt xem */
		$data_luotxem['luotxem'] = $row_detail['luotxem'] + 1;
		$d->where('id',$row_detail['id']);
		$d->update('product',$data_luotxem);

        /* Lấy tags */
		if($row_detail['id_tags']) $pro_tags = $d->rawQuery("select id, ten$lang, tenkhongdauvi, tenkhongdauen from #_tags where id in (".$row_detail['id_tags'].") and type='".$type."'");

		/* Lấy thương hiệu */
		$pro_brand = $d->rawQuery("select ten$lang, tenkhongdauvi, tenkhongdauen, id from #_product_brand where hienthi=1 and id = ? and type = ? limit 0,1",array($row_detail['id_brand'],$type));

		/* Lấy màu */
		if($row_detail['id_mau']) $mau = $d->rawQuery("select loaihienthi, photo, mau, id from #_product_mau where hienthi=1 and type='".$type."' and find_in_set(id,'".$row_detail['id_mau']."') order by stt,id desc");

		/* Lấy size */
		if($row_detail['id_size']) $size = $d->rawQuery("select id, ten$lang from #_product_size where hienthi=1 and type='".$type."' and find_in_set(id,'".$row_detail['id_size']."') order by stt,id desc");

		/* Lấy cấp 1 */
		$pro_list = $d->rawQueryOne("select id, ten$lang, tenkhongdauvi, tenkhongdauen from #_product_list where hienthi=1 and id = ? and type = ? limit 0,1",array($row_detail['id_list'],$type));

		/* Lấy cấp 2 */
		$pro_cat = $d->rawQueryOne("select id, ten$lang, tenkhongdauvi, tenkhongdauen from #_product_cat where hienthi=1 and id = ? and type = ? limit 0,1",array($row_detail['id_cat'],$type));

		/* Lấy cấp 3 */
		$pro_item = $d->rawQueryOne("select id, ten$lang, tenkhongdauvi, tenkhongdauen from #_product_item where hienthi=1 and id = ? and type = ? limit 0,1",array($row_detail['id_item'],$type));

		/* Lấy cấp 4 */
		$pro_sub = $d->rawQueryOne("select id, ten$lang, tenkhongdauvi, tenkhongdauen from #_product_sub where hienthi=1 and id = ? and type = ? limit 0,1",array($row_detail['id_sub'],$type));
		
		/* Lấy hình ảnh con */
		$hinhanhsp = $d->rawQuery("select photo from #_gallery where hienthi=1 and id_photo = ? and com='product' and type = ? and kind='man' and val = ? order by stt,id desc",array($row_detail['id'],$type,$type));
		$lichtrinh = $d->rawQuery("select ten$lang,mota$lang from #_gallery where hienthi=1 and id_photo = ? and com='product' and type = ? and kind='man' and val = ? order by stt,id desc",array($row_detail['id'],$type,'lichtrinh'));

		/* Lấy sản phẩm mới nhất */
		$product_new = $d->rawQuery("select photo, ten$lang, tenkhongdauvi, tenkhongdauen, giamoi, gia, giakm, id,masp from #_product where id!=? and hienthi!=0 order by id desc limit 0,10", array($row_detail['id']));
		
		/* Lấy sản phẩm cùng loại */
		$where = "";
		$where = "hienthi=1 and id <> ? and id_list = ? and type = ?";
		$params = array($id,$row_detail['id_list'],$type);

		$curPage = $get_page;
		$per_page = 12;
		$startpoint = ($curPage * $per_page) - $per_page;
		$limit = " limit ".$startpoint.",".$per_page;
		$sql = "select photo, ten$lang, tenkhongdauvi, tenkhongdauen, giamoi, gia, giakm, id,masp,lichtrinh from #_product where $where order by stt,id desc $limit";
		$product = $d->rawQuery($sql,$params);
		$sqlNum = "select count(*) as 'num' from #_product where $where order by stt,id desc";
		$count = $d->rawQueryOne($sqlNum,$params);
		$total = $count['num'];
		$url = $func->getCurrentPageURL();
		$paging = $func->pagination($total,$per_page,$curPage,$url);

		/* SEO */
		$seoDB = $seo->getSeoDB($row_detail['id'],'product','man',$row_detail['type']);
		$seo->setSeo('h1',$row_detail['ten'.$lang]);
		if($seoDB['title'.$seolang]!='') $seo->setSeo('title',$seoDB['title'.$seolang]);
		else $seo->setSeo('title',$row_detail['ten'.$lang]);
		$seo->setSeo('keywords',$seoDB['keywords'.$seolang]);
		$seo->setSeo('description',$seoDB['description'.$seolang]);
		$seo->setSeo('url',$func->getPageURL());
		
		$img_json_bar = json_decode($row_detail['options'],true);
		if($img_json_bar['p'] != $row_detail['photo'])
		{
			$img_json_bar = $func->getImgSize($row_detail['photo'],UPLOAD_PRODUCT_L.$row_detail['photo']);
			$seo->updateSeoDB(json_encode($img_json_bar),'product',$row_detail['id']);
		}
		$seo->setSeo('photo',$config_base.THUMBS.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'.UPLOAD_PRODUCT_L.$row_detail['photo']);
		$seo->setSeo('photo:width',$img_json_bar['w']);
		$seo->setSeo('photo:height',$img_json_bar['h']);
		$seo->setSeo('photo:type',$img_json_bar['m']);
		/* breadCrumbs */
		if($title_crumb) $breadcr->setBreadCrumbs($com,$title_crumb);
		$breadcr->setBreadCrumbs($pro_list[$sluglang],$pro_list['ten'.$lang]);
		$breadcr->setBreadCrumbs($pro_cat[$sluglang],$pro_cat['ten'.$lang]);
		$breadcr->setBreadCrumbs($pro_item[$sluglang],$pro_item['ten'.$lang]);
		$breadcr->setBreadCrumbs($pro_sub[$sluglang],$pro_sub['ten'.$lang]);
		$breadcr->setBreadCrumbs($row_detail[$sluglang],$row_detail['ten'.$lang]);
		$breadcrumbs = $breadcr->getBreadCrumbs();


	}
	else if($idl!='')
	{
		/* Lấy cấp 1 detail */
		$pro_list = $d->rawQueryOne("select id, ten$lang, tenkhongdauvi, tenkhongdauen, type, photo, options,mota$lang,tieude$lang,noidung$lang from #_product_list where id = ? and type = ? limit 0,1",array($idl,$type));
		$hinhanhsp = $d->rawQuery("select photo from #_gallery where hienthi=1 and id_photo = ? and com='product' and type = ? and kind='man_list' and val = ? order by stt,id desc",array($pro_list['id'],$type,$type));
		$khoanhkhac = $d->rawQuery("select photo from #_gallery where hienthi=1 and id_photo = ? and com='product' and type = ? and kind='man_list' and val = ? order by stt,id desc",array($pro_list['id'],$type,'khoanh-khac'));
		/* SEO */
		$title_cat = $pro_list['ten'.$lang];
		$seoDB = $seo->getSeoDB($pro_list['id'],'product','man_list',$pro_list['type']);
		$seo->setSeo('h1',$pro_list['ten'.$lang]);
		if($seoDB['title'.$seolang]!='') $seo->setSeo('title',$seoDB['title'.$seolang]);
		else $seo->setSeo('title',$pro_list['ten'.$lang]);
		$seo->setSeo('keywords',$seoDB['keywords'.$seolang]);
		$seo->setSeo('description',$seoDB['description'.$seolang]);
		$seo->setSeo('url',$func->getPageURL());

		$img_json_bar = json_decode($pro_list['options'],true);
		if($img_json_bar['p'] != $pro_list['photo'])
		{
			$img_json_bar = $func->getImgSize($pro_list['photo'],UPLOAD_PRODUCT_L.$pro_list['photo']);
			$seo->updateSeoDB(json_encode($img_json_bar),'product_list',$pro_list['id']);
		}
		$seo->setSeo('photo',$config_base.THUMBS.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'.UPLOAD_PRODUCT_L.$pro_list['photo']);
		$seo->setSeo('photo:width',$img_json_bar['w']);
		$seo->setSeo('photo:height',$img_json_bar['h']);
		$seo->setSeo('photo:type',$img_json_bar['m']);
		/* Lấy sản phẩm */
		$where = "";
		$where = "id_list = ? and type = ? and hienthi=1";
		$params = array($idl,$type);

		$curPage = $get_page;
		$per_page = 20;
		$startpoint = ($curPage * $per_page) - $per_page;
		$limit = " limit ".$startpoint.",".$per_page;
		$sql = "select photo, ten$lang, tenkhongdauvi, tenkhongdauen, giamoi, gia, giakm, id,masp from #_product where $where order by stt,id desc $limit";
		$product = $d->rawQuery($sql,$params);
		$sqlNum = "select count(*) as 'num' from #_product where $where order by stt,id desc";
		$count = $d->rawQueryOne($sqlNum,$params);
		$total = $count['num'];
		$url = $func->getCurrentPageURL();
		$paging = $func->pagination($total,$per_page,$curPage,$url);

		/* breadCrumbs */
		if($title_crumb) $breadcr->setBreadCrumbs($com,$title_crumb);
		$breadcr->setBreadCrumbs($pro_list[$sluglang],$pro_list['ten'.$lang]);
		$breadcrumbs = $breadcr->getBreadCrumbs();	

		if(empty($_SESSION['nhahang'])){
			$_SESSION['nhahang'][] = $pro_list['id'];
		}else{
			if(!in_array($pro_list['id'], $_SESSION['nhahang'])) $_SESSION['nhahang'][] = $pro_list['id'];
		}
	}
	else if($idc!='')
	{
		/* Lấy cấp 2 detail */
		$pro_cat = $d->rawQueryOne("select id, id_list, ten$lang, tenkhongdauvi, tenkhongdauen, type, photo, options from #_product_cat where id = ? and type = ? limit 0,1",array($idc,$type));

		/* Lấy cấp 1 */
		$pro_list = $d->rawQueryOne("select id, ten$lang, tenkhongdauvi, tenkhongdauen from #_product_list where id = ? and type = ? limit 0,1",array($pro_cat['id_list'],$type));

		/* Lấy sản phẩm */
		$where = "";
		$where = "id_cat = ? and type = ? and hienthi=1";
		$params = array($idc,$type);

		$curPage = $get_page;
		$per_page = 20;
		$startpoint = ($curPage * $per_page) - $per_page;
		$limit = " limit ".$startpoint.",".$per_page;
		$sql = "select photo, ten$lang, tenkhongdauvi, tenkhongdauen, giamoi, gia, giakm, id,masp from #_product where $where order by stt,id desc $limit";
		$product = $d->rawQuery($sql,$params);
		$sqlNum = "select count(*) as 'num' from #_product where $where order by stt,id desc";
		$count = $d->rawQueryOne($sqlNum,$params);
		$total = $count['num'];
		$url = $func->getCurrentPageURL();
		$paging = $func->pagination($total,$per_page,$curPage,$url);

		/* SEO */
		$title_cat = $pro_cat['ten'.$lang];
		$seoDB = $seo->getSeoDB($pro_cat['id'],'product','man_cat',$pro_cat['type']);
		$seo->setSeo('h1',$pro_cat['ten'.$lang]);
		if($seoDB['title'.$seolang]!='') $seo->setSeo('title',$seoDB['title'.$seolang]);
		else $seo->setSeo('title',$pro_cat['ten'.$lang]);
		$seo->setSeo('keywords',$seoDB['keywords'.$seolang]);
		$seo->setSeo('description',$seoDB['description'.$seolang]);
		$seo->setSeo('url',$func->getPageURL());
		$img_json_bar = json_decode($pro_cat['options'],true);
		if($img_json_bar['p'] != $pro_cat['photo'])
		{
			$img_json_bar = $func->getImgSize($pro_cat['photo'],UPLOAD_PRODUCT_L.$pro_cat['photo']);
			$seo->updateSeoDB(json_encode($img_json_bar),'product_cat',$pro_cat['id']);
		}
		$seo->setSeo('photo',$config_base.THUMBS.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'.UPLOAD_PRODUCT_L.$pro_cat['photo']);
		$seo->setSeo('photo:width',$img_json_bar['w']);
		$seo->setSeo('photo:height',$img_json_bar['h']);
		$seo->setSeo('photo:type',$img_json_bar['m']);
		/* breadCrumbs */
		if($title_crumb) $breadcr->setBreadCrumbs($com,$title_crumb);
		$breadcr->setBreadCrumbs($pro_list[$sluglang],$pro_list['ten'.$lang]);
		$breadcr->setBreadCrumbs($pro_cat[$sluglang],$pro_cat['ten'.$lang]);
		$breadcrumbs = $breadcr->getBreadCrumbs();
	}
	else
	{
		/* SEO */
		$seopage = $d->rawQueryOne("SELECT * FROM #_seopage WHERE type = ? limit 0,1",array($type));
		$seo->setSeo('h1',$title_crumb);
		if($seopage['title'.$seolang]!='') $seo->setSeo('title',$seopage['title'.$seolang]);
		else $seo->setSeo('title',$title_crumb);
		$seo->setSeo('keywords',$seopage['keywords'.$seolang]);
		$seo->setSeo('description',$seopage['description'.$seolang]);
		$seo->setSeo('url',$func->getPageURL());

		$img_json_bar = json_decode($seopage['options'],true);
		if($img_json_bar['p'] != $seopage['photo'])
		{
			$img_json_bar = $func->getImgSize($seopage['photo'],UPLOAD_SEOPAGE_L.$seopage['photo']);
			$seo->updateSeoDB(json_encode($img_json_bar),'seopage',$seopage['id']);
		}
		$seo->setSeo('photo',$config_base.THUMBS.'/'.$img_json_bar['w'].'x'.$img_json_bar['h'].'x2/'.UPLOAD_SEOPAGE_L.$seopage['photo']);
		$seo->setSeo('photo:width',$img_json_bar['w']);
		$seo->setSeo('photo:height',$img_json_bar['h']);
		$seo->setSeo('photo:type',$img_json_bar['m']);
		/* Lấy tất cả sản phẩm */
		$where = "";
		$where = "hienthi=1 and type = ?";
		$params = array($type);

		$curPage = $get_page;
		$per_page = 8;
		$startpoint = ($curPage * $per_page) - $per_page;
		$limit = " limit ".$startpoint.",".$per_page;
		$sql = "select photo, ten$lang, tenkhongdauvi, tenkhongdauen, mota$lang from #_product_list where $where order by stt,id desc $limit";
		$product = $d->rawQuery($sql,$params);
		$sqlNum = "select count(*) as 'num' from #_product_list where $where order by stt,id desc";
		$count = $d->rawQueryOne($sqlNum,$params);
		$total = $count['num'];
		$url = $func->getCurrentPageURL();
		$paging = $func->pagination($total,$per_page,$curPage,$url);
		
		/* breadCrumbs */
		if($title_crumb) $breadcr->setBreadCrumbs($com,$title_crumb);
		$breadcrumbs = $breadcr->getBreadCrumbs();

		if(!empty($_SESSION['nhahang'])){
			$sql = "select photo, ten$lang, tenkhongdauvi, tenkhongdauen, mota$lang from #_product_list where hienthi=1 and type = ? and id in(".implode(',',$_SESSION['nhahang']).") order by stt,id desc";
			$product_view = $d->rawQuery($sql,array($type));
		}
	}
?>