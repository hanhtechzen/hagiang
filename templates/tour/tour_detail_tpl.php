<section class="detail-tour bg-[#F4F4F4] py-[50px]" x-data="ScrollClick()">
	<div class="wrap-detail-top-tour">
		<div class="container">
			<div class="row">
				<div class="col-6 col-lg-6">
					<a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" title="<?=$row_detail['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/612x460x1/assets/images/noimage.png';" src="<?=THUMBS?>/612x460x1/<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" alt="<?=$row_detail['ten'.$lang]?>"></a>
	            	<?php if(count($hinhanhsp)>0) { ?>
		            <div class="gallery-thumb-pro">
		                <div class="owl-carousel owl-theme owl-carousel-loop in-page in-arrow-detail" data-dot="0" data-nav='1' data-loop='0' data-play='0' data-lg-items='5' data-md-items='4' data-sm-items='3' data-xs-items="2" data-margin='5'>
		                    <div><a class="thumb-pro-detail" data-zoom-id="Zoom-1" data-image="<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" href="<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" title="<?=$row_detail['ten'.$lang]?>"><img class="img-block" onerror="this.src='<?=THUMBS?>/612x460x1/assets/images/noimage.png';" src="<?=THUMBS?>/612x460x1/<?=UPLOAD_PRODUCT_L.$row_detail['photo']?>" alt="<?=$row_detail['ten'.$lang]?>"></a></div>
		                    <?php for($i=0;$i<count($hinhanhsp);$i++) { ?>
		                        <div><a class="thumb-pro-detail" data-zoom-id="Zoom-1" data-image="<?=UPLOAD_PRODUCT_L.$hinhanhsp[$i]['photo']?>" href="<?=UPLOAD_PRODUCT_L.$hinhanhsp[$i]['photo']?>" title="<?=$row_detail['ten'.$lang]?>"><img class="img-block" onerror="this.src='<?=THUMBS?>/612x460x1/assets/images/noimage.png';" src="<?=THUMBS?>/612x460x1/<?=UPLOAD_PRODUCT_L.$hinhanhsp[$i]['photo']?>" alt="<?=$row_detail['ten'.$lang]?>"></a></div>
		                    <?php } ?>
		                </div>
		            </div>
	            	<?php } ?>
				</div>
				<div class="col-6 col-lg-6 !pl-[50px]">
					<div class="top-detail-tour">
						<p class="title-tour-detail capitalize text-[32px] font-Viaoda mb-[20px]"><?=$row_detail['ten'.$lang]?></p>
						<ul class="text-[16px]">
							<li class="mb-[12px]"><b>Lịch trình:</b> <?=$row_detail['lichtrinh']?></li>
							<li class="mb-[12px]"><b>Khởi hành:</b> <?=$row_detail['khoihanh']?></li>
							<li class="mb-[12px]"><b>Giá:</b> <span class="inline-block text-[#EF6365] font-bold text-[20px]"><?=($row_detail['gia'])?number_format($row_detail['gia'],0, ',', '.').'đ':lienhe?></span></li>
							<li class="mb-[12px]"><b>Mã:</b> <?=$row_detail['masp']?></li>
						</ul>
					</div>
					<div class="mota-detail-tour mt-[24px]">
						<span class="block text-[#3A9923] font-bold text-[16px] mb-[10px]">Mô tả</span>
						<p class="leading-[25px] text-[16px]"><?=nl2br($row_detail['mota'.$lang])?></p>
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
					<li><a href="javascript:void(0)" @click="clickscroll('#dat-tour')">Đặt tour</a></li>
				</ul>
			</div>
		</div>
		<div class="content-detail-tour">
			<div id="lich-trinh" class="noidung-tour py-[40px] border-b-[1px] border-b-[#000]/[.12]">
				<div class="container">
					<p class="title-content-detail-tour block text-[#3A9923] font-bold text-[20px] mb-[32px]">Lịch trình</p>
					<ul>
						<?php foreach ($lichtrinh as $k => $v) {?>
						<li class="mb-[32px] last:mb-0">
							<p class="title-detail-lichtrinh mb-[24px] text-[#1C1C1C] text-[20px] font-bold"><?=$v['ten'.$lang]?></p>
							<div class="noidung-lichtrinh noidung-tour-cke"><?=htmlspecialchars_decode($v['mota'.$lang])?></div>
						</li>	
						<?php }?>
					</ul>
				</div>
			</div>
			<div id="thong-tin" class="noidung-tour py-[40px] border-b-[1px] border-b-[#000]/[.12]">
				<div class="container">
					<p class="title-content-detail-tour block text-[#3A9923] font-bold text-[20px] mb-[32px]">Thông tin</p>
					<div class="noidung-lichtrinh noidung-tour-cke"><?=htmlspecialchars_decode($row_detail['noidung'.$lang])?></div>
				</div>
			</div>
			<div id="dat-tour" class="noidung-tour py-[40px]">
				<div class="container">
					<p class="title-content-detail-tour block text-[#3A9923] font-bold text-[20px] mb-[32px]">Đặt tour</p>
					<div class="wrap-detail-dat-tour bg-white p-[60px]">
						<div class="title-form-dat-tour text-center mb-[60px]">
							<h6 class="font-Viaoda text-[#3A9923] text-[32px] border-[1px] border-[#3A9923] !border-r-0 leading-[44px] py-[15px] !mb-0 !border-l-0 inline-block">Đăng Ký Đặt Tour</h6>
						</div>
						<div class="wrap-show-form">
							<form method="post" action="" enctype="multipart/form-data">
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
									<div class="col-12 col-input !px-[37.5px]">
										<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[diachi]" placeholder="Địa chỉ">
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
										<textarea class="form-textarea w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[16px] resize-none h-[120px] !p-[10px] !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" name="data[noidung]" placeholder="Nhu cầu đặc biệt"></textarea>
									</div>
								</div>
								<input type="hidden" name="data[type]" value="dangkytour">
								<input type="hidden" name="data[id_tour]" value="<?=$row_detail['id']?>">
								<input type="hidden" name="url" value="<?=$func->getCurrentPageURL()?>">
								<input type="hidden" name="data[name_tour]" value="<?=$row_detail['ten'.$lang]?>">
								<div class="row -mx-[0] flex items-center justify-center">
									<input type="hidden" name="recaptcha_response_dangkytour" id="recaptchaResponseDangkytour">
									<button type="submit" name="submit-dangkytour" class="bg-[#3A9923] rounded-[26px] inline-block text-[16px] font-bold py-[10px] px-[48px] leading-[24px] uppercase border-[1px] border-[#3A9923] !text-white hover:bg-white hover:!text-[#3A9923] transition-all duration-500" value="dangkytour">GỬI THÔNG TIN</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php if(!empty($product)){?>
	<div class="tour-lienquan pt-[40px]">
		<div class="container">
			<div class="title-chill-tour text-center mb-[30px]">
				<p class="uppercase text-[40px] capitalize font-Viaoda">Tour Liên Quan</p>
			</div>
			<div class="row-tour-slick slick-arrows -mx-[12px]">
				<div class="slick in-page" data-dots="0" data-infinite="1" data-arrows="1" data-autoplay='0' data-slidesDefault="3:1" data-lg-items='3:1' data-md-items='3:1' data-sm-items='3:1' data-xs-items="3:1" data-vertical="0">
					<?php foreach ($product as $k => $v) {?>
					<div class="col-tour-slick px-[12px]">
						<div class="bock-tour bg-white p-[20px]">
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
					<?php }?>
				</div>
			</div>
		</div>
	</div>
	<?php }?>
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