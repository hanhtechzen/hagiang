<?php
	include "ajax_config.php";
	$id = $_POST['id'];
	$row_detail = $d->rawQueryOne("select type, id, ten$lang, tenkhongdauvi, tenkhongdauen, huongphong,loaigiuong,dientich,soluongnguoi,photo,tienich from #_product where hienthi=1 and id = ? limit 0,1",array($id));
	$hinhanhsp = $d->rawQuery("select photo from #_gallery where hienthi=1 and id_photo = ? and com='product' and type = ? and kind='man' and val = ? order by stt,id desc",array($row_detail['id'],$row_detail['type'],$row_detail['type']));
	if($row_detail['tienich']) $tienich = $d->rawQuery("select id, ten$lang, tenkhongdauvi, tenkhongdauen from #_product_brand where id in (".$row_detail['tienich'].") and type='".$row_detail['type']."'");

	$result = array();
	$images = '<div class="slick in-page" id="images-phong" data-dots="1" data-infinite="1" data-arrows="0" data-autoplay="0" data-slidesDefault="1:1" data-lg-items="1:1" data-md-items="1:1" data-sm-items="1:1" data-xs-items="1:1" data-vertical="0">';
	foreach ($hinhanhsp as $k => $v) {
		$images .='<div class="col-image-phong">';
			$images .='<p>';
				$images .='<img src="'.THUMBS.'/590x395x1/'.UPLOAD_PRODUCT_L.$v['photo'].'" alt="'.$row_detail['ten'.$lang].'">';
			$images .='</p>';
		$images .='</div>';
	}
	$images .='</div>';	
	$result['photo'] = $images;

	$result['inffo']='<div class="header-phong">';
		$result['inffo'] .='<h6 class="text-[#1C1C1C] text-[32px] capitalize font-Viaoda pb-[25px] mb-[20px] border-b-[1px] border-[#000000]/[.12]">'.$row_detail['ten'.$lang].'</h6>';
		$result['inffo'] .='<ul class="-mx-[10px] flex flex-wrap">';
			$result['inffo'] .='<li class="w-full md:w-6/12 px-[10px] mb-[10px] md:mb-[24px]">';
				$result['inffo'] .='<p class="flex items-center">';
					$result['inffo'] .='<img src="assets/images/dientich.svg" alt="'.$row_detail['ten'.$lang].'">';
					$result['inffo'] .='<span class="ml-[12px] inline-block text-[#1C1C1C] text-[16px]">'.$row_detail['dientich'].'</span>';
				$result['inffo'] .='</p>';
			$result['inffo'] .='</li>';
			$result['inffo'] .='<li class="w-full md:w-6/12 px-[10px] mb-[10px] md:mb-[24px]">';
				$result['inffo'] .='<p class="flex items-center">';
					$result['inffo'] .='<img src="assets/images/loaigiuong.svg" alt="'.$row_detail['ten'.$lang].'">';
					$result['inffo'] .='<span class="ml-[12px] inline-block text-[#1C1C1C] text-[16px]">'.$row_detail['loaigiuong'].'</span>';
				$result['inffo'] .='</p>';
			$result['inffo'] .='</li>';
			$result['inffo'] .='<li class="w-full md:w-6/12 px-[10px] mb-[10px] md:mb-[24px]">';
				$result['inffo'] .='<p class="flex items-center">';
					$result['inffo'] .='<img src="assets/images/soluongnguoi.svg" alt="'.$row_detail['ten'.$lang].'">';
					$result['inffo'] .='<span class="ml-[12px] inline-block text-[#1C1C1C] text-[16px]">'.$row_detail['soluongnguoi'].'</span>';
				$result['inffo'] .='</p>';
			$result['inffo'] .='</li>';
			$result['inffo'] .='<li class="w-full md:w-6/12 px-[10px] mb-[10px] md:mb-[24px]">';
				$result['inffo'] .='<p class="flex items-center">';
					$result['inffo'] .='<img src="assets/images/huongphong.svg" alt="'.$row_detail['ten'.$lang].'">';
					$result['inffo'] .='<span class="ml-[12px] inline-block text-[#1C1C1C] text-[16px]">'.$row_detail['huongphong'].'</span>';
				$result['inffo'] .='</p>';
			$result['inffo'] .='</li>';
		$result['inffo'] .='</ul>';
		$result['inffo'] .='<div class="tienich-phong mt-[20px] pt-[20px] border-t-[1px] border-[#000000]/[.12]"><span class="block text-[#3A9923] font-bold text-[16px] mb-[10px]">Tiện ích của phòng</span>';
			$result['inffo'] .='<ul class="-mx-[10px] flex flex-wrap">';
				foreach ($tienich as $k => $v) {
				$result['inffo'] .='<li class="px-[10px] w-6/12 mb-[10px]">';
					$result['inffo'] .='<p class="flex items-center">';
						$result['inffo'] .='<img src="assets/images/bg-tienich.svg" alt="'.$v['ten'.$lang].'">';
						$result['inffo'] .='<span class="ml-[12px] inline-block text-[#1C1C1C] text-[16px]">'.$v['ten'.$lang].'</span>';
					$result['inffo'] .='</p>';
				$result['inffo'] .='</li>';
				}
			$result['inffo'] .='</ul>';
		$result['inffo'] .='</div>';
	$result['inffo'] .='</div>';

	echo json_encode($result);
?>