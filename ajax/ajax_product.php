<?php 
	include "ajax_config.php";

	/* Paginations */
	include LIBRARIES."class/class.PaginationsAjax.php";
	$pagingAjax = new PaginationsAjax();
	$pagingAjax->perpage = (htmlspecialchars($_GET['perpage']) && $_GET['perpage'] > 0) ? htmlspecialchars($_GET['perpage']) : 1;
	$eShow = htmlspecialchars($_GET['eShow']);
	$idList = (isset($_GET['idList']) && $_GET['idList'] > 0) ? htmlspecialchars($_GET['idList']) : 0;
	$p = (isset($_GET['p']) && $_GET['p'] > 0) ? htmlspecialchars($_GET['p']) : 1;
	$start = ($p-1) * $pagingAjax->perpage;
	$pageLink = "ajax/ajax_product.php?perpage=".$pagingAjax->perpage;
	$tempLink = "";
	$where = "";

	if($idList)
	{
		$tempLink .= "&idList=".$idList;
		$where .= " and id_list = ".$idList;
	}
	$tempLink .= "&p=";
	$pageLink .= $tempLink;

	$sql = "select ten$lang, tenkhongdauvi, tenkhongdauen, id, photo, gia, giamoi, giakm, type,lichtrinh from #_product where type='tour-du-lich' $where and noibat > 0 and hienthi > 0 order by stt,id desc";
	$sqlCache = $sql." limit $start, $pagingAjax->perpage";
    $items = $d->rawQuery($sqlCache);

	$countItems = count($d->rawQuery($sql));
	$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow, $p);
?>
<?php if($countItems) { ?>
	<div class="row !-mx-[12px]">
		<?php foreach ($items as $v) { ?>
		<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-product !mb-[24px] !px-[12px]">
			<div class="bock-tour bg-white p-[16px] md:p-[20px]">
				<div class="img-tour">
					<a href="<?=$v['tenkhongdau'.$lang]?>" class="overflow-hidden block group">
						<img src="<?=THUMBS?>/336x252x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" class="transition-all duration-500 w-full group-hover:scale-[1.1]" alt="<?=$v['ten'.$lang]?>">
					</a>
				</div>
				<div class="info-tour text-center mt-[10px]">
					<h3 class="leading-none px-[10px]">
						<a href="<?=$v['tenkhongdau'.$lang]?>" class="text-[#1C1C1C] leading-[26px] text-[20px] font-bold inline-block decoration-0"><?=$v['ten'.$lang]?></a>
					</h3>
					<p class="line-clamp-2 text-[16px]">Lịch trình: <?=$v['lichtrinh']?></p>
				</div>
			</div>
		</div>	
		<?php } ?>
	</div>
	<div class="pagination-ajax"><?=$pagingItems?></div>
<?php } ?>