<?php 
    $row_banner_breadcrumb = $d->rawQueryOne("select photo from #_photo where type=?",array($type.'-banner-breadcrumb'));
?>
<?php include TEMPLATE.LAYOUT."banner_breadcrumb.php"; ?>
<section class="detail-tour bg-[#F4F4F4] py-[50px]" x-data="ScrollClick()">
	<div class="wrap-detail-top-tour">
		<div class="container">
			<div class="row">
				<div class="col-6 col-lg-6">
					<a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: click; expandCaption: false; history: false;" href="<?=UPLOAD_NEWS_L.$static['photo']?>" title="<?=$static['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/612x460x1/assets/images/noimage.png';" src="<?=THUMBS?>/612x460x1/<?=UPLOAD_NEWS_L.$static['photo']?>" alt="<?=$static['ten'.$lang]?>"></a>
	            	<?php if(count($hinhanhsp)>0) { ?>
		            <div class="gallery-thumb-pro px-[81px] mt-[15px]">
		                <div class="owl-carousel owl-theme owl-carousel-loop in-page in-arrow-detail" data-dot="0" data-nav='1' data-loop='0' data-play='0' data-lg-items='3' data-md-items='3' data-sm-items='3' data-xs-items="3" data-margin='5'>
		                    <div><a class="thumb-pro-detail" data-zoom-id="Zoom-1" data-image="<?=THUMBS?>/612x460x1/<?=UPLOAD_NEWS_L.$static['photo']?>" href="<?=UPLOAD_NEWS_L.$static['photo']?>" title="<?=$static['ten'.$lang]?>"><img class="img-block" onerror="this.src='<?=THUMBS?>/142x106x1/assets/images/noimage.png';" src="<?=THUMBS?>/142x106x1/<?=UPLOAD_NEWS_L.$static['photo']?>" alt="<?=$static['ten'.$lang]?>"></a></div>
		                    <?php for($i=0;$i<count($hinhanhsp);$i++) { ?>
		                        <div><a class="thumb-pro-detail" data-zoom-id="Zoom-1" data-image="<?=THUMBS?>/612x460x1/<?=UPLOAD_NEWS_L.$hinhanhsp[$i]['photo']?>" href="<?=UPLOAD_NEWS_L.$hinhanhsp[$i]['photo']?>" title="<?=$static['ten'.$lang]?>"><img class="img-block" onerror="this.src='<?=THUMBS?>/142x106x1/assets/images/noimage.png';" src="<?=THUMBS?>/142x106x1/<?=UPLOAD_NEWS_L.$hinhanhsp[$i]['photo']?>" alt="<?=$static['ten'.$lang]?>"></a></div>
		                    <?php } ?>
		                </div>
		            </div>
	            	<?php } ?>
				</div>
				<div class="col-6 col-lg-6 !pl-[50px]">
					<div class="top-detail-tour">
						<p class="title-tour-detail capitalize text-[32px] font-Viaoda mb-[20px]"><?=$static['ten'.$lang]?></p>
						<ul class="text-[16px]">
							<li class="mb-[12px]"><b>Khởi hành:</b> <?=$static['khoihanh']?></li>
							<li class="mb-[12px]"><b>Giá:</b> <span class="inline-block text-[#EF6365] font-bold text-[20px]"><?=($static['gia'])?$static['gia']:lienhe?></span></li>
						</ul>
					</div>
					<div class="mota-detail-tour mt-[24px]">
						<span class="block text-[#3A9923] font-bold text-[16px] mb-[10px]">Mô tả</span>
						<p class="leading-[25px] text-[16px]"><?=nl2br($static['mota'.$lang])?></p>
					</div>
					<div class="book-tour-detail mt-[24px]">
						<a href="javascript:void(0)" @click="clickscroll('#dat-tour')" class="bg-[#3A9923] rounded-[26px] inline-block text-[16px] font-bold py-[10px] px-[48px] leading-[24px] uppercase border-[1px] border-[#3A9923] !text-white hover:bg-white hover:!text-[#3A9923] transition-all duration-500">ĐẶT NGAY</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrap-info-detail-tour mt-[50px]">
		<div class="tap-info">
			<div class="container">
				<ul>
					<li><a href="javascript:void(0)" @click="clickscroll('#lich-trinh')" class="active">Lịch trình</a></li>
					<li><a href="javascript:void(0)" @click="clickscroll('#thong-tin')">Thông tin</a></li>
					<li><a href="javascript:void(0)" @click="clickscroll('#dat-tour')">Đặt vé xe</a></li>
				</ul>
			</div>
		</div>
		<div class="content-detail-tour">
			<div id="lich-trinh" class="noidung-tour py-[40px] border-b-[1px] border-b-[#000]/[.12]">
				<div class="container">
					<p class="title-content-detail-tour block text-[#3A9923] font-bold text-[20px] mb-[32px]">Lịch trình</p>
					<div class="noidung-lichtrinh noidung-tour-cke"><?=htmlspecialchars_decode($static['lichtrinh'.$lang])?></div>
				</div>
			</div>
			<div id="thong-tin" class="noidung-tour py-[40px] border-b-[1px] border-b-[#000]/[.12]">
				<div class="container">
					<p class="title-content-detail-tour block text-[#3A9923] font-bold text-[20px] mb-[32px]">Thông tin</p>
					<div class="noidung-lichtrinh noidung-tour-cke"><?=htmlspecialchars_decode($static['noidung'.$lang])?></div>
				</div>
			</div>
			<div id="dat-tour" class="noidung-tour pb-0 py-[40px]">
				<div class="container">
					<p class="title-content-detail-tour block text-[#3A9923] font-bold text-[20px] mb-[32px]">Đặt vé xe</p>
					<div class="wrap-detail-dat-tour bg-white p-[60px]">
						<div class="title-form-dat-tour text-center mb-[60px]">
							<h6 class="font-Viaoda text-[#3A9923] text-[32px] border-[1px] border-[#3A9923] !border-r-0 leading-[44px] py-[15px] !mb-0 !border-l-0 inline-block capitalize">Đăng Ký Đặt vé xe</h6>
						</div>
						<div class="wrap-show-form">
							<form id="form-recaptchaResponseDatvexe" method="post" action="" enctype="multipart/form-data">
								<div class="row -mx-[37.5px] mb-[40px]">
									<div class="col-4 col-input !px-[37.5px]">
										<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[ten]" placeholder="Họ và tên">
									</div>
									<div class="col-4 col-input !px-[37.5px]">
										<input type="email" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[email]" placeholder="Email">
									</div>
									<div class="col-4 col-input !px-[37.5px]">
										<input type="number" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[dienthoai]" placeholder="Số điện thoại">
									</div>
								</div>
								<div class="row -mx-[37.5px] mb-[40px]">
									<div class="col-6 col-input !px-[37.5px]">
										<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[diemdi]" placeholder="Điểm đi">
									</div>
									<div class="col-6 col-input !px-[37.5px]">
										<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[diemden]" placeholder="Điểm đến">
									</div>
								</div>
								<div class="row -mx-[37.5px] mb-[40px]">
									<div class="col-4 col-input !px-[37.5px]">
										<input type="number" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[nguoilon]" placeholder="Số người lớn > 12 tuổi">
									</div>
									<div class="col-4 col-input !px-[37.5px]">
										<input type="number" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" name="data[treem]" placeholder="Số trẻ em (từ 5 - 11 tuổi)">
									</div>
									<div class="col-4 col-input !px-[37.5px]">
										<input type="number" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" name="data[treem2]" placeholder="Số trẻ em miễn vé < 5 tuổi">
									</div>
								</div>
								<div class="row -mx-[37.5px] mb-[40px]">
									<div class="col-12 col-input !px-[37.5px]">
										<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0 ngaysudung bg-[url(../images/icon_select_date.svg)]  bg-no-repeat bg-right-center" value="<?=date('d/m/Y',time())?>" required="" name="data[ngaysudung]" placeholder="Ngày khởi hành">
									</div>
								</div>
								<div class="row -mx-[37.5px] mb-[40px]">
									<div class="col-12 col-input !px-[37.5px] ">
										<textarea class="form-textarea w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[16px] resize-none h-[120px] !p-[10px] !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0 " name="data[noidung]" placeholder="Nội dung"></textarea>
									</div>
								</div>
								<input type="hidden" name="data[type]" value="datvexe">
								<input type="hidden" name="url" value="<?=$func->getCurrentPageURL()?>">
								<div class="row -mx-[0] flex items-center justify-center">
									<input type="hidden" name="recaptcha_response_datvexe" id="recaptchaResponseDatvexe">
									<input type="hidden" name="datvexe" value="datvexe">
									<button type="submit" name="submit-datvexe" class="bg-[#3A9923] rounded-[26px] inline-block text-[16px] font-bold py-[10px] px-[48px] leading-[24px] uppercase border-[1px] border-[#3A9923] !text-white hover:bg-white hover:!text-[#3A9923] transition-all duration-500" value="datvexe">GỬI THÔNG TIN</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script type="text/javascript">
	function ScrollClick() {
		return {
			clickscroll(_root){
				let scrol = $(_root).offset().top;
				$('html, body').animate({scrollTop : scrol},800);
			}
		}
	}
</script>