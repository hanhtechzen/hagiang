<?php
	include "ajax_config.php";
	$id_brand = htmlspecialchars($_POST['idb']);
	$id_list = htmlspecialchars($_POST['idl']);

	$where = "";
	if($id_brand)
	{
		$where .= " and id_brand = ".$id_brand;
	}
	if($id_list)
	{
		$where .= " and id_list = ".$id_list;
	}
	$sql = "select ten$lang, tenkhongdauvi, tenkhongdauen, id, photo, gia, giamoi, giakm, type from #_product where type='nha-hang' $where and hienthi > 0 order by stt,id desc";
    $producr = $d->rawQuery($sql);

    $html=array();
    foreach ($producr as $k => $v) {
    	$str='';
    	$str .='<div class="col-tour-slick px-[12px]">';
			$str .='<div class="bock-tour">';
		        $str .='<div class="img-tour">';
		            $str .='<a href="javascript:void(0)" class="overflow-hidden block group">';
		                $str .='<img src="'.THUMBS.'/282x211x1/'.UPLOAD_PRODUCT_L.$v['photo'].'" class="transition-all duration-500 w-full group-hover:scale-[1.1]" alt="'.$v['ten'.$lang].'">';
		            $str .='</a>';
		        $str .='</div>';
		        $str .='<div class="info-tour text-center mt-[10px]">';
		            $str .='<h3 class="leading-none px-[10px]">';
		                $str .='<a href="javascript:void(0)" class="text-[#1C1C1C] line-clamp-2 leading-[26px] text-[17px] font-bold inline-block decoration-0">'.$v['ten'.$lang].'</a>';
		            $str .='</h3>';
		        $str .='</div>';
		    $str .='</div>';
		$str .='</div>';
		$html[] =$str;
	}
	echo json_encode($html);
?>
