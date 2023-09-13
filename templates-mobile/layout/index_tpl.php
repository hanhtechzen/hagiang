<?php 
	$tourlistmenu = $d->rawQuery("SELECT ten$lang as ten, tenkhongdauvi, tenkhongdauen, id FROM #_product_list WHERE hienthi=1 AND type = ? ORDER BY stt,id DESC",array('tour-du-lich'));
	$khachsanmenu = $d->rawQuery("SELECT ten$lang as ten, tenkhongdauvi, tenkhongdauen, id FROM #_product_list WHERE hienthi=1 AND type = ? ORDER BY stt,id DESC",array('khach-san'));
?>

<section class="wrap-gioithieu py-[60px]">
	<div class="container">
		<div class="row flex items-center justify-between">
			<div class="col-12 col-lg-12">
				<div class="wrap-mota-about">
					<h6 class="uppercase text-[32px] leading-[44px] font-Viaoda mb-[15px]">Giới thiệu chung</h6>
					<div class="mota-gioithieuchung leading-[25px] mb-[43px] text-[16px]"><?=$static_gioithieu['mota']?></div>
					<div class="tool-mota-gioithieu flex items-center justify-start">
						<a href="<?=$tourlistmenu[0]['tenkhongdau'.$lang]?>" class="rounded-[26px] mr-[23px] border-[1px] border-[#3A9923] font-bold bg-white text-[16px] text-[#3A9923] px-[40px] py-[10px] uppercase transition-all hover:!bg-[#3A9923] hover:!text-white">Xem thêm</a>
						<a href="javascript:void(0)" data-toggle="modal" data-target="#DatVeexampleModal" class="rounded-[26px] border-[1px] border-[#3A9923] bg-[#3A9923] font-bold text-[16px] text-white px-[40px] py-[10px] uppercase transition-all hover:!bg-white hover:!text-[#3A9923]">Đặt tour</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-12 text-center mt-[24px]">
				<p>
					<img src="<?=UPLOAD_NEWS_L.$static_gioithieu['photo']?>" alt="<?=$setting['ten'.$lang]?>">
				</p>
			</div>
		</div>
	</div>
</section>

<section class="bg-child bg-[url(../images/bg-danhmuc.png)] bg-cover bg-no-repeat bg-center py-[60px]">
	<div class="container">
		<div class="title-chill-tour text-center bg-[url(../images/bg-title.svg)] bg-no-repeat bg-top-center pt-[40px] mb-[30px]">
			<p class="uppercase text-[28px] capitalize font-Viaoda">Chill Cùng Hà Giang Tour Loop</p>
		</div>
		<div class="main-custom-slide mx-auto max-w-[70%]">
			<div class="row-tour-slick slick-arrows -mx-[8px]">
				<div class="slick in-page" data-dots="0" data-infinite="1" data-arrows="0" data-autoplay='0' data-slidesDefault="1:1" data-lg-items='1:1' data-md-items='1:1' data-sm-items='1:1' data-xs-items="1:1" data-vertical="0">
					<?php foreach ($tour_nb as $k => $v) {?>
					<div class="col-tour-slick px-[6px]">
						<div class="bock-tour bg-white p-[16px]">
							<div class="img-tour">
								<a href="<?=$v['tenkhongdau'.$lang]?>" class="overflow-hidden block group">
									<img src="<?=THUMBS?>/336x252x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" class="transition-all duration-500 w-full group-hover:scale-[1.1]" alt="<?=$v['ten'.$lang]?>">
								</a>
							</div>
							<div class="info-tour text-center mt-[10px]">
								<h3 class="leading-none px-[10px]">
									<a href="<?=$v['tenkhongdau'.$lang]?>" class="text-[#1C1C1C] leading-[22px] text-[16px] font-bold inline-block decoration-0"><?=$v['ten'.$lang]?></a>
								</h3>
								<p class="line-clamp-2 text-[14px]">Lịch trình: <?=$v['lichtrinh']?></p>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php if(!empty($newsnb)){?>
<section class="wrap-tintuc py-[50px] bg-white pb-[35px]">
	<div class="container">
		<div class="title-chill-tour text-center mb-[30px]">
			<p class="uppercase text-[40px] capitalize font-Viaoda">Tin tức sự kiện</p>
		</div>
		<div class="row -mx-[12px]">
			<div class="col-12 col-md-6 px-[12px]">
				<div class="bloxk-news">
					<div class="img-news">
						<a class="block w-full overflow-hidden group" href="<?=$newsnb[0]['tenkhongdau'.$lang]?>">
							<img class="w-full transition-all duration-500 group-hover:scale-[1.1]" src="<?=THUMBS?>/588x441x1/<?=UPLOAD_NEWS_L.$newsnb[0]['photo']?>" alt="<?=$newsnb[0]['ten'.$lang]?>">
						</a>
					</div>
					<div class="info-news mt-[15px]">
						<h3 class="leading-[inherit] font-normal">
							<a class="line-clamp-2 text-[24px] font-bold text-black leading-[37px]" href="<?=$newsnb[0]['tenkhongdau'.$lang]?>"><?=$newsnb[0]['ten'.$lang]?></a>
						</h3>
					</div>
				</div>
			</div>
			<div class="col-12 mt-[16px] !md:mt-0 col-md-6 px-[12px]">
				<div class="row -mx-[12px]">
					<?php foreach ($newsnb as $key => $v) {if($key == 0) continue; ?>
					<div class="col-12 col-lg-12 px-[12px] border-t-[1px] border-[#000]/[.12] !pt-[16px] mb-[16px]">
						<div class="bloxk-news flex items-center">
							<div class="img-news w-[132px]">
								<a class="block w-full overflow-hidden group" href="<?=$v['tenkhongdau'.$lang]?>">
									<img class="w-full transition-all duration-500 group-hover:scale-[1.1]" src="<?=THUMBS?>/282x212x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>">
								</a>
							</div>
							<div class="info-news ml-[15px] flex-1">
								<h3 class="leading-[inherit] font-normal">
									<a class="line-clamp-2 text-[16px] font-bold text-black leading-[25px]" href="<?=$v['tenkhongdau'.$lang]?>"><?=$v['ten'.$lang]?></a>
								</h3>
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
<?php if($banner_khachsan['hienthi']==1){?>
<div class="wrap-banner-khachsan relative bg-center bg-cover min-h-[400px] flex items-center justify-start py-[70px]" style="background-image: url(<?=UPLOAD_PHOTO_L.$banner_khachsan['photo']?>)">
	<div class="wrap-banner-info flex items-center justify-start">
		<div class="container !px-[26px]">
			<div class="row">
				<div class="col-12 col-lg-5">
					<h6 class="font-Viaoda uppercase text-[28px] text-white leading-[44px] text-animate"><?=$banner_khachsan['ten'.$lang]?></h6>
					<p class="mt-[25px]">
						<a href="khach-san" class="rounded-[26px] inline-block border-[1px] border-[#3A9923] bg-[#3A9923] font-bold text-[16px] text-white px-[40px] py-[13px] uppercase transition-all hover:!bg-white hover:!text-[#3A9923]">KHÁM PHÁ PHÒNG KHÁCH SẠN</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }?>

<section class="wrap-tintuc py-[50px] bg-white pb-[60px]">
	<div class="container">
		<div class="title-chill-tour text-center mb-[30px]">
			<p class="uppercase text-[40px] capitalize font-Viaoda">Khách sạn Hiện Có</p>
		</div>
		<div class="main-custom-slide mx-auto max-w-[70%]">
			<div class="row-tour-slick slick-arrows -mx-[12px]">
				<div class="slick in-page" data-dots="0" data-infinite="1" data-arrows="0" data-autoplay='0' data-slidesDefault="1:1" data-lg-items='1:1' data-md-items='1:1' data-sm-items='1:1' data-xs-items="1:1" data-vertical="0">
					<?php foreach ($khachsan_nb as $k => $v) {?>
					<div class="col-product-list px-[12px]">
						<div class="box-product-list">
							<a href="<?=$v['tenkhongdau'.$lang]?>" class="block decoration-0 !text-white relative w-full overflow-hidden group after:content-[''] after:absolute after:w-full after:left-0 after:bottom-0 after:h-[84px] after:bg-gradient-to-b after:from-[#49311B]/[0] after:to-[#49311B]">
								<img src="<?=THUMBS?>/282x360x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" class="w-full transition-all duration-300 group-hover:scale-[1.1]" alt="<?=$v['ten'.$lang]?>">
								<div class="info-product-list absolute w-full z-50 bottom-0 left-0 p-[15px]">
									<p class="text-[17px] capitalize font-bold text-center"><?=$v['ten'.$lang]?></p>
								</div>
							</a>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php if($banner_nhahang['hienthi']==1){?>
<div class="wrap-banner-khachsan relative bg-center bg-cover min-h-[400px] flex items-center justify-start py-[70px]" style="background-image: url(<?=UPLOAD_PHOTO_L.$banner_nhahang['photo']?>)">
	<div class="wrap-banner-info flex items-center justify-start">
		<div class="container !px-[26px]">
			<div class="row">
				<div class="col-12 col-lg-5">
					<h6 class="font-Viaoda uppercase text-[28px] text-white leading-[44px] text-animate"><?=$banner_nhahang['ten'.$lang]?></h6>
					<p class="mt-[25px]">
						<a href="nha-hang" class="rounded-[26px] inline-block border-[1px] border-[#3A9923] bg-[#3A9923] font-bold text-[16px] text-white px-[40px] py-[13px] uppercase transition-all hover:!bg-white hover:!text-[#3A9923]">KHÁM PHÁ NHÀ HÀNG</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }?>

<section class="wrap-taisao py-[50px] bg-white pb-[35px]">
	<div class="container">
		<div class="title-chill-tour text-center mb-[37px]">
			<p class="uppercase text-[28px] capitalize font-Viaoda">Tại Sao Nên Chọn Hà Giang Loop</p>
		</div>
		<div class="row">
			<?php foreach ($taisao as $k => $v) {?>
			<div class="col-12 col-lg-4 text-center flex justify-center mb-[30px] last:!mb-0 md:even:pt-[96px]">
				<div class="bloxk-taisao max-w-[230px] ">
					<span class="inline-block group">
						<img class="transition-all duration-500 group-hover:rotate-[360deg]" src="<?=UPLOAD_PHOTO_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>">
					</span>
					<p class="mt-[15px] text-[20px] font-bold text-black"><?=$v['ten'.$lang]?></p>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</section>

