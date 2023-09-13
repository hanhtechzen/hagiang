<?php 
	$tourlistmenu = $d->rawQuery("SELECT ten$lang as ten, tenkhongdauvi, tenkhongdauen, id FROM #_product_list WHERE hienthi=1 AND type = ? ORDER BY stt,id DESC",array('tour-du-lich'));
	$khachsanmenu = $d->rawQuery("SELECT ten$lang as ten, tenkhongdauvi, tenkhongdauen, id FROM #_product_list WHERE hienthi=1 AND type = ? ORDER BY stt,id DESC",array('khach-san'));
?>
<section class="wrap-order-tour bg-[#2C2C2C]" x-data="OrderTour()">
	<div class="container flex items-center justify-between">
		<div class="bloxk-search w-[25%] relative">
			<p class="capitalize text-[#868686] text-[16px] mb-[6px]">Tour du lịch</p>
			<div class="show-ul-list" @click="show_tour = !show_tour" @click.outside="show_tour = false">
				<p x-text="title_tour_select"></p>
				<div class="bolck-show-list absolute top-full mt-[10px] shadow-md left-0 z-[888] w-full bg-white " x-show="show_tour">
					<ul class="data-scrollbar max-h-[400px]">
						<?php foreach ($tourlistmenu as $k => $v) {?>
						<li><a :class="(tour_select == <?=$v['id']?>)?'!bg-[#E2F7DD] text-[#3A9923]':''" @click="tour_select = <?=$v['id']?>,title_tour_select=`<?=$v['ten']?>`" class="block text-[#1A1111] text-[16px] px-[10px] py-[8px] transition-all duration-500 hover:bg-[#E2F7DD] hover:text-[#3A9923]" href="javascript:void(0)" data-test="<?=$v['ten']?>"><?=$v['ten']?></a></li>
						<?php }?>
					</ul>
				</div>
			</div>
		</div>
		<div class="bloxk-search w-[25%] relative">
			<p class="capitalize text-[#868686] text-[16px] mb-[6px]">Khách sạn</p>
			<div class="show-ul-list" @click="show_khachsan = !show_khachsan" @click.outside="show_khachsan = false">
				<p x-text="title_khachsan_select"></p>
				<div class="bolck-show-list absolute shadow-md top-full mt-[10px] left-0 z-[888] w-full bg-white " x-show="show_khachsan">
					<ul class="data-scrollbar max-h-[400px]">
						<?php foreach ($khachsanmenu as $k => $v) {?>
						<li><a :class="(khachsan_select == <?=$v['id']?>)?'!bg-[#E2F7DD] text-[#3A9923]':''" @click="khachsan_select = <?=$v['id']?>,title_khachsan_select=`<?=$v['ten']?>`" class="block text-[#1A1111] text-[16px] px-[10px] py-[8px] transition-all duration-500 hover:bg-[#E2F7DD] hover:text-[#3A9923]" href="javascript:void(0)" data-test="<?=$v['ten']?>"><?=$v['ten']?></a></li>
						<?php }?>
					</ul>
				</div>
			</div>
		</div>
		<div class="bloxk-search w-[25%]">
			<p class="capitalize text-[#868686] text-[16px] mb-[6px]">Ngày</p>
			<div class="show-ul-list">
				<input type="text" id="ngaykhoihanh1" class="ngaykhoihanh1" placeholder="Chọn ngày khởi hành" value="<?=date('d/m/Y',time())?>">
			</div>
		</div>
		<div class="bloxk-search w-[180px]">
			<a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal" class="bg-[#3A9923] uppercase font-bold text-white text-[16px] py-[44px] px-[40px] !text-center block">Đặt Ngay</a>
		</div>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog !max-w-[800px] modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body relative">
					<button type="button" class="close absolute top-[15px] right-[15px] opacity-100 !outline-0" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true" class="text-[37px]">&times;</span>
	        		</button>
					<div class="title-form-dat-tour text-center mb-[60px]">
						<h6 class="font-Viaoda text-[#1C1C1C] text-[32px] leading-[44px] py-[10px] px-[70px] !mb-0 !border-l-0 inline-block">Bạn đã lựa chọn ở lại vào thời gian <span x-text="time_popup" class="text-[#3A9923]"></span></h6>
					</div>
					<div class="wrap-show-form">
						<form method="post" id="form-recaptchaResponseDatTourIndex" action="" enctype="multipart/form-data">
							<div class="row -mx-[20px] mb-[40px]">
								<div class="col-4 col-input !px-[20px]">
									<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[ten]" placeholder="Họ và tên">
								</div>
								<div class="col-4 col-input !px-[20px]">
									<input type="email" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[email]" placeholder="Email">
								</div>
								<div class="col-4 col-input !px-[20px]">
									<input type="number" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[dienthoai]" placeholder="Số điện thoại">
								</div>
							</div>
							<div class="row -mx-[20px] mb-[40px]">
								<div class="col-12 col-input !px-[20px]">
									<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[diachi]" placeholder="Địa chỉ">
								</div>
							</div>
							<div class="row -mx-[20px] mb-[40px]">
								<div class="col-4 col-input !px-[20px]">
									<input type="number" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[nguoilon]" placeholder="Số người lớn > 12 tuổi">
								</div>
								<div class="col-4 col-input !px-[20px]">
									<input type="number" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" name="data[treem]" placeholder="Số trẻ em (từ 5 - 11 tuổi)">
								</div>
								<div class="col-4 col-input !px-[20px]">
									<input type="number" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" name="data[treem2]" placeholder="Số trẻ em miễn vé < 5 tuổi">
								</div>
							</div>
							<div class="row -mx-[20px] mb-[20px]">
								<div class="col-12 col-input !px-[20px]">
									<textarea class="form-textarea w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[16px] resize-none h-[120px] !p-[10px] !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" name="data[noidung]" placeholder="Nhu cầu đặc biệt"></textarea>
								</div>
							</div>
							<input type="hidden" name="data[type]" value="dattourindex">
							<input type="hidden" name="url" value="<?=$func->getCurrentPageURL()?>">
							<input type="hidden" name="data[id_khachsan]" x-model="khachsan_select">
							<input type="hidden" name="data[name_khachsan]" x-model="title_khachsan_select">
							<input type="hidden" name="data[id_tour]" x-model="tour_select">
							<input type="hidden" name="data[name_tour]" x-model="title_tour_select">
							<input type="hidden" name="data[ngaysudung]" x-model="time_popup">

							<div class="row -mx-[0] flex items-center justify-center mb-[10px]">
								<input type="hidden" name="dattourindex" value="dattourindex">
								<input type="hidden" name="recaptcha_response_dattourindex" id="recaptchaResponseDatTourIndex">
								<button type="submit" name="submit-dattourindex" class="bg-[#3A9923] rounded-[26px] inline-block text-[16px] font-bold py-[10px] px-[48px] leading-[24px] uppercase border-[1px] border-[#3A9923] !text-white hover:bg-white hover:!text-[#3A9923] transition-all duration-500" value="dattourindex">Đặt tour Ngay</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="wrap-gioithieu py-[60px]">
	<div class="container">
		<div class="row flex items-center justify-between">
			<div class="col-6 col-lg-6">
				<div class="wrap-mota-about">
					<h6 class="uppercase text-[32px] leading-[44px] font-Viaoda mb-[15px]">Giới thiệu chung</h6>
					<div class="mota-gioithieuchung leading-[25px] mb-[43px] text-[16px]"><?=$static_gioithieu['mota']?></div>
					<div class="tool-mota-gioithieu flex items-center justify-start">
						<a href="<?=$tourlistmenu[0]['tenkhongdau'.$lang]?>" class="rounded-[26px] mr-[23px] border-[1px] border-[#3A9923] font-bold bg-white text-[16px] text-[#3A9923] px-[40px] py-[10px] uppercase transition-all hover:!bg-[#3A9923] hover:!text-white">Xem thêm</a>
						<a href="javascript:void(0)" data-toggle="modal" data-target="#DatVeexampleModal" class="rounded-[26px] border-[1px] border-[#3A9923] bg-[#3A9923] font-bold text-[16px] text-white px-[40px] py-[10px] uppercase transition-all hover:!bg-white hover:!text-[#3A9923]">Đặt tour</a>
					</div>
				</div>
			</div>
			<div class="col-6 col-lg-6">
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
			<p class="uppercase text-[40px] capitalize font-Viaoda">Chill Cùng Hà Giang Tour Loop</p>
		</div>
		<div class="row-tour-slick slick-arrows -mx-[12px]">
			<div class="slick in-page" data-dots="0" data-infinite="1" data-arrows="1" data-autoplay='0' data-slidesDefault="3:1" data-lg-items='3:1' data-md-items='3:1' data-sm-items='3:1' data-xs-items="3:1" data-vertical="0">
				<?php foreach ($tour_nb as $k => $v) {?>
				<div class="col-tour-slick px-[12px]">
					<div class="bock-tour bg-white p-[20px]">
						<div class="img-tour">
							<a href="<?=$v['tenkhongdau'.$lang]?>" class="overflow-hidden block group">
								<img src="<?=THUMBS?>/336x252x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" class="transition-all duration-500 w-full group-hover:scale-[1.1]" alt="<?=$v['ten'.$lang]?>">
							</a>
						</div>
						<div class="info-tour info-tour-fix text-center mt-[10px]">
							<h3 class="leading-none px-[10px]">
								<a href="<?=$v['tenkhongdau'.$lang]?>" class="text-[#1C1C1C] leading-[26px] line-clamp-2 text-[20px] font-bold inline-block decoration-0"><?=$v['ten'.$lang]?></a>
							</h3>
							<p class="line-clamp-2 text-[16px]">Lịch trình: <?=$v['lichtrinh']?></p>
						</div>
					</div>
				</div>
				<?php }?>
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
			<div class="col-6 col-lg-6 px-[12px]">
				<div class="bloxk-news">
					<div class="img-news">
						<a class="block w-full overflow-hidden group" href="<?=$newsnb[0]['tenkhongdau'.$lang]?>">
							<img class="w-full transition-all duration-500 group-hover:scale-[1.1]" src="<?=THUMBS?>/588x441x1/<?=UPLOAD_NEWS_L.$newsnb[0]['photo']?>" alt="<?=$newsnb[0]['ten'.$lang]?>">
						</a>
					</div>
					<div class="info-news mt-[15px]">
						<h3 class="leading-[inherit] font-normal">
							<a class="line-clamp-2 text-[32px] font-bold text-black leading-[37px]" href="<?=$newsnb[0]['tenkhongdau'.$lang]?>"><?=$newsnb[0]['ten'.$lang]?></a>
						</h3>
						<p class="line-clamp-2 text-[16px]"><?=$newsnb[0]['mota'.$lang]?></p>
					</div>
				</div>
			</div>
			<div class="col-6 col-lg-6 px-[12px]">
				<div class="row -mx-[12px]">
					<?php foreach ($newsnb as $key => $v) {if($key == 0) continue; ?>
					<div class="col-6 col-lg-6 px-[12px] mb-[24px]">
						<div class="bloxk-news">
							<div class="img-news">
								<a class="block w-full overflow-hidden group" href="<?=$v['tenkhongdau'.$lang]?>">
									<img class="w-full transition-all duration-500 group-hover:scale-[1.1]" src="<?=THUMBS?>/282x212x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>">
								</a>
							</div>
							<div class="info-news mt-[15px]">
								<h3 class="leading-[inherit] font-normal">
									<a class="line-clamp-2 text-[18px] font-bold text-black leading-[25px]" href="<?=$v['tenkhongdau'.$lang]?>"><?=$v['ten'.$lang]?></a>
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
<div class="wrap-banner-khachsan relative">
	<img src="<?=UPLOAD_PHOTO_L.$banner_khachsan['photo']?>" class="w-full" alt="<?=$setting['ten'.$lang]?>">
	<div class="wrap-banner-info absolute w-100 h-100 left-0 top-0 flex items-center justify-start">
		<div class="container">
			<div class="row">
				<div class="col-5 col-lg-5">
					<h6 class="font-Viaoda uppercase text-[32px] text-white leading-[44px] text-animate"><?=$banner_khachsan['ten'.$lang]?></h6>
					<p class="mt-8">
						<a href="khach-san" class="rounded-[26px] border-[1px] border-[#3A9923] bg-[#3A9923] font-bold text-[16px] text-white px-[40px] py-[13px] uppercase transition-all hover:!bg-white hover:!text-[#3A9923]">KHÁM PHÁ PHÒNG KHÁCH SẠN</a>
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
		<div class="row-tour-slick slick-arrows -mx-[12px]">
			<div class="slick in-page" data-dots="0" data-infinite="1" data-arrows="1" data-autoplay='0' data-slidesDefault="4:1" data-lg-items='4:1' data-md-items='4:1' data-sm-items='4:1' data-xs-items="4:1" data-vertical="0">
				<?php foreach ($khachsan_nb as $k => $v) {?>
				<div class="col-product-list px-[12px]">
					<div class="box-product-list">
						<a href="<?=$v['tenkhongdauvi']?>" class="block decoration-0 !text-white relative w-full overflow-hidden group after:content-[''] after:absolute after:w-full after:left-0 after:bottom-0 after:h-[84px] after:bg-gradient-to-b after:from-[#49311B]/[0] after:to-[#49311B]">
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
</section>

<?php if($banner_nhahang['hienthi']==1){?>
<div class="wrap-banner-khachsan relative">
	<img src="<?=UPLOAD_PHOTO_L.$banner_nhahang['photo']?>" class="w-full" alt="<?=$setting['ten'.$lang]?>">
	<div class="wrap-banner-info absolute w-100 h-100 left-0 top-0 flex items-center justify-end">
		<div class="container">
			<div class="row flex justify-end">
				<div class="col-5 col-lg-5">
					<h6 class="font-Viaoda uppercase text-[32px] text-white leading-[44px] text-animate"><?=$banner_nhahang['ten'.$lang]?></h6>
					<p class="mt-8">
						<a href="nha-hang" class="rounded-[26px] border-[1px] border-[#3A9923] bg-[#3A9923] font-bold text-[16px] text-white px-[40px] py-[13px] uppercase transition-all hover:!bg-white hover:!text-[#3A9923]">KHÁM PHÁ NHÀ HÀNG</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }?>

<section class="wrap-taisao py-[50px] bg-white pb-[35px] bg-[url(../images/bg_taisao.svg)] bg-no-repeat">
	<div class="container">
		<div class="title-chill-tour text-center mb-[37px]">
			<p class="uppercase text-[40px] capitalize font-Viaoda">Tại Sao Nên Chọn Hà Giang Loop</p>
		</div>
		<div class="row">
			<?php foreach ($taisao as $k => $v) {?>
			<div class="col-4 col-lg-4 text-center flex justify-center even:pt-[96px]">
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

<section class="wrap-taisao py-[50px] bg-white pb-[35px] bg-no-repeat">
	<div class="container">
		<div class="title-chill-tour mb-[37px]">
			<p class="uppercase text-[40px] capitalize font-Viaoda">Video</p>
		</div>
		<div class="row -mx-[12px]">
			<div class="col-6 col-lg-8">
				<div class="simple_video_top_left" link-video="https://www.youtube.com/embed/ZqTQ2nfEtAc">
					<iframe src="https://www.youtube.com/embed/ZqTQ2nfEtAc?rel=0&amp;autoplay=1" allow="autoplay" width="100%" height="400px" frameborder="0" allowfullscreen="false">

					</iframe>
				</div>
			</div>
			<div class="col-6 col-lg-4">
				<p class="mt-[15px] text-[20px] font-bold text-black">One of the best locations to travel to in Vietnam - The Ha Giang Loop</p>
				<p>With a total distance of 500 kilometers, the Ha Giang Loop is no short task. However, the stunning views and exhilarating journey will be the highlight of your Vietnam trip, and perhaps the best few days of your life!</p>
			</div>
		</div>
		<div class="row -mx-[12px] mt-[20px]">
			<div class="col-12 col-lg-4">
				<div class="simple_video_top_left" link-video="https://www.youtube.com/embed/rDRGc1LRJYc">
					<iframe src="https://www.youtube.com/embed/rDRGc1LRJYc?rel=0&amp;autoplay=1" allow="autoplay" width="100%" height="250px" frameborder="0" allowfullscreen="false">

					</iframe>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="simple_video_top_left" link-video="https://www.youtube.com/embed/JJP7rQr-nEw">
					<iframe src="https://www.youtube.com/embed/JJP7rQr-nEw?rel=0&amp;autoplay=1" allow="autoplay" width="100%" height="250px" frameborder="0" allowfullscreen="false">

					</iframe>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="simple_video_top_left" link-video="https://www.youtube.com/embed/766q416pkP4">
					<iframe src="https://www.youtube.com/embed/766q416pkP4?rel=0&amp;autoplay=1" allow="autoplay" width="100%" height="250px" frameborder="0" allowfullscreen="false">

					</iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="wrap-taisao py-[50px] bg-white pb-[35px] bg-no-repeat">
	<div class="container h-[250px]">
		<div class="title-chill-tour mb-[37px]">
			<p class="uppercase text-[40px] capitalize font-Viaoda">Photo</p>
		</div>
		<div class="slider relative">
			<div class="card bg-gray-100 hover:bg-pink-600 hover:text-white transition hover:-translate-y-1 transform rounded-md mx-2 h-[300px]">
			    <img src="https://jasminehagiang.com/images/albums/compress/layer-151_1678682754.png" alt="cover">
			</div>
			<div class="card bg-gray-100 hover:bg-pink-600 hover:text-white transition hover:-translate-y-1 transform rounded-md mx-2">
				<img src="https://jasminehagiang.com/images/albums/compress/doc-tham-ma-2_1678682709.png.webp" alt="cover">
			</div>
			<div class="card bg-gray-100 hover:bg-pink-600 hover:text-white transition hover:-translate-y-1 transform rounded-md mx-2">
				<img src="https://jasminehagiang.com/images/albums/compress/layer-7631_1678682722.jpg.webp" alt="cover">
			</div>
			<div class="card bg-gray-100 hover:bg-pink-600 hover:text-white transition hover:-translate-y-1 transform rounded-md mx-2">
				<img src="https://jasminehagiang.com/images/albums/compress/layer-20_1678645520.png.webp" alt="cover">
			</div>
		</div>
	</div>
</session>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
	$(document).ready(function(){
		$('.slider').slick({
			'slidesToShow': 3,
			arrows: true,
			prevArrow: '<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><title>left-arrow</title><g stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="none" stroke="#565656"><polyline points="23,30 9,16 23,2 " transform="translate(0, 0)"></polyline></g></svg></button>',
			nextArrow: '<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><title>right-arrow</title><g stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="none" stroke="#565656"><polyline points="9,2 23,16 9,30 " transform="translate(0, 0)"></polyline></g></svg></button>',
			dots: true,
			responsive: [
				{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true
				}
			}] 
		});
	});
</script>
<!-- <script type="text/javascript" src="./js/script.js"></script> -->
<script type="text/javascript">
	function OrderTour() {
		return {
			time_popup:'<?=date('d/m/Y',time())?>',
			title_khachsan_select:'<?=(!empty($khachsanmenu[0]['ten']))?$khachsanmenu[0]['ten']:'Chọn khách sạn'?>',
			title_tour_select:'<?=(!empty($tourlistmenu[0]['ten']))?$tourlistmenu[0]['ten']:'Chọn tour du lịch'?>',
			show_khachsan:false,
			show_tour:false,
			khachsan_select:<?=(!empty($khachsanmenu[0]['id']))?$khachsanmenu[0]['id']:'false'?>,
			tour_select:<?=(!empty($tourlistmenu[0]['id']))?$tourlistmenu[0]['id']:'false'?>,
			init(){
				let _root=this;
				$('.ngaykhoihanh1').flatpickr({
			    	mode: "range",
			    	minDate: "today",
			    	showMonths:2,
			    	dateFormat: "d/m/Y",
			    	rangeSeparator: ' - ',
			    	onChange: function(selectedDates, dateStr, instance) {
			        	_root.time_popup = dateStr;
			    	}
			    });
			}
		}
	}
</script>