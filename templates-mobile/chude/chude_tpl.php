<?php 
	$row_banner_breadcrumb = $d->rawQueryOne("select photo from #_photo where type=?",array($type.'-banner-breadcrumb'));
	$chudemenu = $d->rawQuery("SELECT ten$lang as ten, tenkhongdauvi, tenkhongdauen, id,icon FROM #_news_list WHERE hienthi=1 AND type = ? ORDER BY stt,id DESC",array($type));
	$tourlistmenu = $d->rawQuery("SELECT ten$lang as ten, tenkhongdauvi, tenkhongdauen, id,icon FROM #_product_list WHERE hienthi=1 AND type = ? ORDER BY stt,id DESC",array('tour-du-lich'));

?>
<?php include TEMPLATE.LAYOUT."banner_breadcrumb.php"; ?>
<section class="detail-tour bg-[#F4F4F4]">
	<div class="wrap-list-danhuc shadow-[0px_1px_4px_rgba(0,0,0,0.25)] px-[49px] py-[18px] bg-white relative z-[10]">
		<div class="row-list-danhmuc slick-arrows -mx-[6px]">
			<div class="slick in-page" data-dots="0" data-responsive='1' data-infinite="1" data-arrows="1" data-autoplay='0' data-slidesDefault="4:1" data-lg-items='4:1' data-md-items='3:1' data-sm-items='2:1' data-xs-items="1:1" data-vertical="0">
				<?php foreach ($chudemenu as $key => $v) {?>
				<div class="col-list-danhmuc px-[6px] ">
					<div class="bloxk-icon-list p-[14px] <?=($news_list['id'] == $v['id'])?'!bg-[#3A9923]':'bg-[#868686]'?> hover:bg-lime-600">
						<a href="<?=$v['tenkhongdau'.$lang]?>" class="flex items-center justify-between w-full text-white decoration-0">
							<?php if(!empty($v['icon'])){?>
							<span class="w-[32px]">
								<img src="<?=UPLOAD_NEWS_L.$v['icon']?>" alt="<?=$v['ten']?>">
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

	<div class="wrap-show-news py-[50px] !pt-[40px]">
		<div class="container">
			<div class="title-form-dat-tour text-center mb-[30px]">
				<h2 class="font-Viaoda text-[#3A9923] text-[30px] border-[1px] border-[#3A9923] !border-r-0 leading-[44px] py-[15px] !mb-0 !border-l-0 inline-block capitalize"><?=(!empty($title_cat))?$title_cat:'Cùng Hà Giang Vision Tận Hưởng Những Giây Phút'?></h2>
			</div>
			<div class="row !-mx-[12px]">
				<?php foreach ($news as $v) { ?>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-product !mb-[24px] !px-[12px]">
					<div class="bock-tour bg-white p-[20px]">
						<div class="img-tour">
							<a href="<?=$v['tenkhongdau'.$lang]?>" class="overflow-hidden block group">
								<img src="<?=THUMBS?>/336x252x1/<?=UPLOAD_NEWS_L.$v['photo']?>" class="transition-all duration-500 w-full group-hover:scale-[1.1]" alt="<?=$v['ten'.$lang]?>">
							</a>
						</div>
						<div class="info-tour text-center mt-[10px]">
							<h3 class="leading-none px-[10px]">
								<a href="<?=$v['tenkhongdau'.$lang]?>" class="text-[#1C1C1C] leading-[26px] text-[19px] font-bold inline-block decoration-0"><?=$v['ten'.$lang]?></a>
							</h3>
							<p class="line-clamp-3 text-[16px]"><?=$v['mota'.$lang]?></p>
						</div>
					</div>
				</div>	
				<?php } ?>
			</div>
			<div class="pagination-home !m-auto"><?=$paging?></div>
		</div>
	</div>
	<div class="wrap-bg-datngay bg-[url(../images/bg-datngay.png)] bg-cover bg-no-repeat bg-center py-[48px]">
		<div class="container">
			<div class="row flex justify-end">
				<div class="col-12 col-lg-5">
					<div class="bloxk-w-datngay bg-[#FFFFFF]/[.92] py-[48px] px-[24px]">
						<div class="title-header-datngay text-center px-[24px] mb-[40px]">
							<h3 class="text-[#3A9923] text-[28px] uppercase font-bold">ĐẶT NGAY</h3>
							<p class="text-[14px] text-[#1C1C1C] uppercase">CHỈ GÓI VÀ ĐI! HÃY ĐỂ LẠI KẾ HOẠCH DU LỊCH CỦA BẠN ĐỂ TRẢI NGHIỆM DU LỊCH</p>
						</div>
						<form method="post" action="" enctype="multipart/form-data">
							<div class="row">
								<div class="col-12 col-input mb-[30px]">
									<input type="text" class="form-input !bg-transparent w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[ten]" placeholder="Họ và tên">
								</div>
								<div class="col-12 col-input mb-[30px]">
									<input type="text" class="form-input !bg-transparent w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[email]" placeholder="Email - SĐT">
								</div>
								<div class="col-12 col-input mb-[30px]">
									<select name="data[chude_tour]" id="" class="form-select !bg-transparent w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0">
										<option value="">Chọn chủ đề du lịch</option>
										<?php foreach ($tourlistmenu as $k => $v) {?>
										<option value="<?=$v['ten']?>"><?=$v['ten']?></option>
										<?php }?>
									</select>
								</div>
								<div class="col-12 col-input mb-[30px]">
									<textarea class="form-textarea w-full !bg-transparent placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[16px] resize-none h-[120px] !p-[10px] !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0 " name="data[noidung]" placeholder="Nội dung"></textarea>
								</div>
								<input type="hidden" name="data[type]" value="datngay">
								<input type="hidden" name="url" value="<?=$func->getCurrentPageURL()?>">
								<div class=" w-full flex items-center justify-center">
									<input type="hidden" name="recaptcha_response_datngay" id="recaptchaResponseDangky">
									<button type="submit" name="submit-datngay" class="bg-[#3A9923] rounded-[26px] inline-block text-[16px] font-bold py-[10px] px-[48px] leading-[24px] uppercase border-[1px] border-[#3A9923] !text-white hover:bg-white hover:!text-[#3A9923] transition-all duration-500" value="datngay">ĐĂNG KÝ</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>