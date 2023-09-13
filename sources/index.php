<?php  
	if(!defined('SOURCES')) die("Error");

	$banner_slide = $d->rawQueryOne("SELECT ten$lang, photo, link, hienthi,mota$lang,id,video from #_photo WHERE type = ? and act = ? LIMIT 0,1",array('slide-banner','photo_static'));
    $taisao = $d->rawQuery("SELECT ten$lang, photo ,type FROM #_photo WHERE type = ? ORDER BY stt,id DESC limit 0,3",array('tai-sao'));
    $tour_nb = $d->rawQuery("SELECT id,lichtrinh,photo,ten$lang,tenkhongdau$lang FROM #_product WHERE hienthi=1 AND type = ? AND noibat>0 ORDER BY stt,id DESC",array('tour-du-lich'));
    $newsnb = $d->rawQuery("SELECT ten$lang, tenkhongdauvi, tenkhongdauen, mota$lang, ngaytao, id, photo FROM #_news WHERE hienthi=1 AND type = ? AND noibat>0 ORDER BY stt,id DESC limit 0,5",array('tin-tuc'));
    $servicesnb = $d->rawQuery("SELECT ten$lang, tenkhongdauvi, tenkhongdauen, mota$lang, ngaytao, id, photo FROM #_news WHERE hienthi=1 AND type = ? AND noibat>0 ORDER BY stt,id DESC",array('to-chuc-su-kien'));
    $static_gioithieu = $d->rawQueryOne("select id, type, ten$lang as ten, mota$lang as mota, photo FROM #_static WHERE type = ? LIMIT 0,1",array('gioi-thieu'));

    $khachsan_nb = $d->rawQuery("SELECT id,photo,ten$lang,tenkhongdau$lang FROM #_product_list WHERE hienthi=1 AND type = ? AND noibat>0 ORDER BY stt,id DESC",array('khach-san'));
    $banner_khachsan = $d->rawQueryOne("SELECT photo,ten$lang,hienthi FROM #_photo WHERE type = ? AND act = ? limit 0,1",array('banner-gt-khach-san','photo_static'));
    $banner_nhahang = $d->rawQueryOne("SELECT photo,ten$lang,hienthi FROM #_photo WHERE type = ? AND act = ? limit 0,1",array('banner-gt-nha-hang','photo_static'));



    $videonb = $d->rawQuery("SELECT link_video, id, ten$lang,photo FROM #_photo WHERE hienthi=1 AND noibat>0 AND type = ?",array('video'));
    $partner = $d->rawQuery("SELECT ten$lang, link, photo FROM #_photo WHERE type = ? AND hienthi = 1 ORDER BY stt, id DESC",array('doitac'));
    
    /* SEO */
    $seopage = $d->rawQueryOne("SELECT * FROM #_seopage WHERE type = ? limit 0,1",array('trang-chu'));
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
?>