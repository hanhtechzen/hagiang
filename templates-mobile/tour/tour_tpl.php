<?php 
	$row_banner_breadcrumb = $d->rawQueryOne("select photo from #_photo where type=?",array($type.'-banner-breadcrumb'));
	$tourlistmenu = $d->rawQuery("SELECT ten$lang as ten, tenkhongdauvi, tenkhongdauen, id,icon FROM #_product_list WHERE hienthi=1 AND type = ? ORDER BY stt,id DESC",array($type));

	$giatricotloi = $d->rawQuery("SELECT ten$lang, tenkhongdauvi, tenkhongdauen, mota$lang, ngaytao, id, photo FROM #_news WHERE hienthi=1 AND type = ? ORDER BY stt,id DESC ",array('gia-tri-cot-loi'));
?>
<?php include TEMPLATE.LAYOUT."banner_breadcrumb.php"; ?>
<div class="wrap-list-danhuc shadow-[0px_1px_4px_rgba(0,0,0,0.25)] px-[49px] py-[18px] bg-white relative z-[10]">
	<div class="row-list-danhmuc slick-arrows -mx-[6px]">
		<div class="slick in-page" data-dots="0" data-responsive='1' data-infinite="1" data-arrows="1" data-autoplay='0' data-slidesDefault="4:1" data-lg-items='4:1' data-md-items='3:1' data-sm-items='2:1' data-xs-items="1:1" data-vertical="0">
			<?php foreach ($tourlistmenu as $key => $v) {?>
			<div class="col-list-danhmuc px-[6px] ">
				<div class="bloxk-icon-list p-[14px] <?=($pro_list['id'] == $v['id'])?'!bg-[#3A9923]':'bg-[#868686]'?> hover:bg-lime-600">
					<a href="<?=$v['tenkhongdau'.$lang]?>" class="flex items-center justify-between w-full text-white decoration-0">
						<?php if(!empty($v['icon'])){?>
						<span class="w-[32px]">
							<img src="<?=UPLOAD_PRODUCT_L.$v['icon']?>" alt="<?=$v['ten']?>">
						</span>
						<?php }?>
						<p class="title-list flex-1 ml-[12px] text-[16px] font-bold uppercase text-white"><?=$v['ten']?></p>
					</a>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</div>


<div class="wrap-show-mota-danhmuc py-[40px] pt-[20px] bg-[url(../images/bg-danhmuc-tour.svg)] bg-no-repeat">
	<div class="container">
		<div class="row flex justify-between">
			<div class="col-12 col-lg-12 col-mota-danhmuc pt-[20px]">
				<div class="title-danhmuc">
					<p class="!text-[28px]"><?=$pro_list['tieude'.$lang]?></p>
				</div>
				<div class="noidung-danhmuc"><?=htmlspecialchars_decode($pro_list['mota'.$lang])?></div>
			</div>
			<div class="col-12 col-lg-12 col-hinhanh-danhmuc mt-[20px]">
				<div class="wrap-hinhanh-tour">
					<div class="row -mx-[8px]">
						<?php foreach ($hinhanhsp as $k => $v) {?>
						<div class="px-[8px] w-6/12 last:!w-full mb-[16px] last:!mb-0">
							<p>
								<a href="javascript:void()">
									<img class="w-full" src="<?=THUMBS?>/340x255x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$pro_list['tieude'.$lang]?>">
								</a>
							</p>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="wrap-tour-danhmuc bg-[#F4F4F4] pt-[40px] pb-[30px]">
	<div class="container">
		<div class="title-chill-tour text-center bg-[url(../images/bg-title.svg)] bg-no-repeat bg-top-center pt-[40px] mb-[30px]">
			<p class="uppercase text-[40px] capitalize font-Viaoda">Tour du lịch</p>
		</div>
		<div class="paging-product" data-id="<?=$pro_list['id']?>"></div>
	</div>
</section>

<section class="wrap-khoanhkhac py-[40px] pb-[40px]">
	<div class="container">
		<div class="title-chill-tour text-center mb-[30px]">
			<p class="text-[28px] font-Viaoda">Những khoảnh khắc tại <?=$pro_list['ten'.$lang]?></p>
		</div>
		<div class="row !-mx-[8px]">
			<?php foreach ($khoanhkhac as $key => $v) {?>
			<div class="col-6 !px-[8px] mb-[16px]">
				<p>
					<a class="w-full block overflow-hidden group" href="<?=UPLOAD_PRODUCT_L.$v['photo']?>" data-fancybox>
						<img class="w-full transition-all duration-500 group-hover:scale-[1.1]" src="<?=THUMBS?>/588x441x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$pro_list['tieude'.$lang]?>">
					</a>
				</p>
			</div>
			<?php }?>
		</div>
	</div>
</section>

<?php if(!empty($giatricotloi)){?>
<section class="wrap-khoanhkhac py-[60px] bg-[#F4F4F4]">
	<div class="container">
		<div class="title-chill-tour text-center mb-[30px]">
			<p class="text-[28px] font-Viaoda">Giá Trị Cốt Lõi</p>
		</div>
		<div class="cus-slick">
			<div class="row-list-giatri -mx-[12px]">
				<div class="slick in-page" data-dots="0" data-infinite="1" data-arrows="0" data-autoplay='1' data-responsive='1' data-slidesDefault="4:1" data-lg-items='4:1' data-md-items='4:1' data-sm-items='2:1' data-xs-items="1:1" data-vertical="0">
					<?php foreach ($giatricotloi as $k => $v) {?>
					<div class="col-giatri px-[12px]">
						<div class="block-giatri">
							<a href="javascript:void(0)">
								<img src="<?=THUMBS?>/282x282x1/<?=UPLOAD_NEWS_L.$v['photo']?>" class="w-full grayscale transition-all hover:grayscale-0 duration-300" alt="<?=$v['ten'.$lang]?>">
							</a>
							<div class="info-giaitri mt-[10px]">
								<h4 class="leading-[inherit] font-normal"><a class="inline-block text-[#1C1C1C] font-bold text-[20px] decoration-0" href="javascript:void(0)"><?=$v['ten'.$lang]?></a></h4>
								<p class="line-clamp-3 text-[16px] text-[#1C1C1C]"><?=$v['mota'.$lang]?></p>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }?>