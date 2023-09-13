<?php
	$thucdon = $d->rawQuery("select id,ten$lang from #_product_brand where hienthi=1 and id in (select id_brand from #_product where hienthi=1 and id_list=".$pro_list['id']." group by id_brand) order by stt asc");
	$product_banchay = $d->rawQuery("select photo, ten$lang, tenkhongdauvi, tenkhongdauen, gia from #_product where hienthi=1 and type = ? and id_list = ? and banchay = 1 order by stt,id desc",array($type,$pro_list['id']));
?>
<section class="detail-tour bg-[#F4F4F4] py-[50px] pb-0 !pt-0">
	<div class="wrap-detail-top-tour">
		<div class="container">
			<div class="row">
				<div class="col-12 !max-w-[inherit] !-mx-[5px] !flex-[0_0_calc(100%_+_10px)] col-lg-6 !px-0">
					<a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: click; expandCaption: false; history: false;" href="<?=UPLOAD_PRODUCT_L.$pro_list['photo']?>" title="<?=$pro_list['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/612x460x1/assets/images/noimage.png';" src="<?=THUMBS?>/612x460x1/<?=UPLOAD_PRODUCT_L.$pro_list['photo']?>" alt="<?=$pro_list['ten'.$lang]?>"></a>
	            	<?php if(count($hinhanhsp)>0) { ?>
		            <div class="gallery-thumb-pro px-[30px] mt-[15px]">
		                <div class="owl-carousel owl-theme owl-carousel-loop in-page in-arrow-detail" data-dot="0" data-nav='1' data-loop='0' data-play='0' data-lg-items='3' data-md-items='3' data-sm-items='3' data-xs-items="3" data-margin='5'>
		                    <div><a class="thumb-pro-detail" data-zoom-id="Zoom-1" data-image="<?=THUMBS?>/612x460x1/<?=UPLOAD_PRODUCT_L.$pro_list['photo']?>" href="<?=UPLOAD_PRODUCT_L.$pro_list['photo']?>" title="<?=$pro_list['ten'.$lang]?>"><img class="img-block" onerror="this.src='<?=THUMBS?>/142x106x1/assets/images/noimage.png';" src="<?=THUMBS?>/142x106x1/<?=UPLOAD_PRODUCT_L.$pro_list['photo']?>" alt="<?=$pro_list['ten'.$lang]?>"></a></div>
		                    <?php for($i=0;$i<count($hinhanhsp);$i++) { ?>
		                        <div><a class="thumb-pro-detail" data-zoom-id="Zoom-1" data-image="<?=THUMBS?>/612x460x1/<?=UPLOAD_PRODUCT_L.$hinhanhsp[$i]['photo']?>" href="<?=UPLOAD_PRODUCT_L.$hinhanhsp[$i]['photo']?>" title="<?=$pro_list['ten'.$lang]?>"><img class="img-block" onerror="this.src='<?=THUMBS?>/142x106x1/assets/images/noimage.png';" src="<?=THUMBS?>/142x106x1/<?=UPLOAD_PRODUCT_L.$hinhanhsp[$i]['photo']?>" alt="<?=$pro_list['ten'.$lang]?>"></a></div>
		                    <?php } ?>
		                </div>
		            </div>
	            	<?php } ?>
				</div>
				<div class="col-12 mt-[20px] col-lg-12">
					<div class="top-detail-tour">
						<p class="title-tour-detail capitalize text-[32px] font-Viaoda mb-[20px]"><?=$pro_list['ten'.$lang]?></p>
					</div>
					<div class="mota-detail-tour mt-[24px]">
						<p class="leading-[25px] text-[16px]"><?=htmlspecialchars_decode($pro_list['noidung'.$lang])?></p>
					</div>
					<div class="book-tour-detail mt-[24px]">
						<a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal" class="bg-[#3A9923] block text-center rounded-[26px] text-[16px] font-bold py-[10px] px-[48px] leading-[24px] uppercase border-[1px] border-[#3A9923] !text-white hover:bg-white hover:!text-[#3A9923] transition-all duration-500">ĐẶT NGAY</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php if(!empty($thucdon)){?>
	<div class="wrap-list-thucdon py-[40px] pt-[70px]">
		<div class="container">
			<div class="title-chill-tour text-center mb-[20px]">
				<p class="uppercase text-[32px] capitalize font-Viaoda">Thực đơn tại nhà hàng</p>
			</div>
			<div class="tab-thucdon mb-[40px]">
				<?php foreach ($thucdon as $k => $v) {?>
				<a href="javascript:void(0)" data-idb="<?=$v['id']?>" data-idl="<?=$pro_list['id']?>" class="py-[7px] px-[30px] bg-[#868686] rounded-[18px] text-[16px] text-white hover:bg-[#3A9923] hover:!text-[#ffffff] transition-all duration-500 mx-[8px] mb-[8px] font-bold"><?=$v['ten'.$lang]?></a>
				<?php }?>
			</div>
			<div class="main-custom-slide mx-auto max-w-[75%]">
				<div class="row-tour-slick slick-arrows -mx-[12px]">
					<div class="slick in-page" id="loadthucdon" data-dots="0" data-infinite="1" data-arrows="1" data-autoplay='0' data-slidesDefault="1:1" data-lg-items='1:1' data-md-items='1:1' data-sm-items='1:1' data-xs-items="1:1" data-vertical="0">
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php }?>
	<?php if(!empty($product_banchay)){?>
	<div class="warp-banchay pt-[10px]">
		<div class="container">
			<div class="title-chill-tour text-center mb-[35px]">
				<p class="uppercase text-[32px] capitalize font-Viaoda">Món Ăn Bán Chạy</p>
			</div>
		</div>
		<div class="show-mon-banchay bg-[#1C1C1C] py-[48px] pb-[24px]">
			<div class="container">
				<div class="show-banchay-menu">
					<div class="row -mx-[12px]">
						<?php foreach ($product_banchay as $k => $v) {?>
						<div class="col-12 col-lg-12 !px-[12px] mb-[24px]">
							<div class="bloxk-monan flex items-center flex-wrap justify-between">
								<span class="w-full">
									<img class="w-full" src="<?=THUMBS?>/340x255x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>">
								</span>
								<div class="info-monan flex-1 w-full mt-[24px]">
									<h3 class="mb-0 text-[20px] text-white font-bold leading-[22px]"><?=$v['ten'.$lang]?></h3>
									<p class="text-[#EF6365] text-[20px] font-bold border-t-[1px] border-[#ffffff]/[.12] mt-[11px] pt-[11px]"><?=($v['gia'])?number_format($v['gia'],0, ',', '.').'đ':lienhe?></p>
								</div>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php }?>
</section>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog !min-h-[100vw] !m-auto !max-w-[800px] modal-dialog-centered" role="document">
		<div class="modal-content min-h-[100dvh] !border-0 !rounded-none !p-[15px]">
			<div class="modal-body  !static !p-0">
				<button type="button" class="close absolute !opacity-100 !text-shadow-none !text-white top-[15px] z-[30] right-[15px] opacity-100 !outline-0" data-dismiss="modal" aria-label="Close">
          			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M19 5L5 19" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"/>
						<path d="M19 19L5 5" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"/>
					</svg>
        		</button>
				<div class="title-form-dat-tour text-center mb-[30px]">
					<h6 class="font-Viaoda text-[#3A9923] text-[32px] leading-[44px] py-[15px] !mb-0 !border-l-0 inline-block capitalize">Liên hệ đặt bàn</h6>
				</div>
				<div class="wrap-show-form">
					<form id="form-recaptchaResponseDatban" method="post" action="" enctype="multipart/form-data">
						<div class="row -mx-[20px] mb-[20px]">
							<div class="col-12 col-input mb-[20px] !px-[20px]">
								<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[ten]" placeholder="Họ và tên">
							</div>
							<div class="col-12 col-input mb-[20px] !px-[20px]">
								<input type="email" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[email]" placeholder="Email">
							</div>
							<div class="col-12 col-input !px-[20px]">
								<input type="number" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[dienthoai]" placeholder="Số điện thoại">
							</div>
						</div>
						<div class="row -mx-[20px] mb-[20px]">
							<div class="col-12 col-input mb-[20px] !px-[20px]">
								<input type="number" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[dienthoai]" placeholder="Số điện thoại">
							</div>
							<div class="col-12 col-input !px-[20px]">
								<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" value="1" name="data[songuoi]" placeholder="Số lượng người">
							</div>
						</div>
						<div class="row -mx-[20px] mb-[20px]">
							<div class="col-12 col-input !px-[20px]">
								<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0 ngaykhoihanh bg-[url(../images/icon_select_date.svg)]  bg-no-repeat bg-right-center" value="<?=date('d/m/Y',time())?>" required="" name="data[ngaysudung]" placeholder="Ngày khởi hành">
							</div>
						</div>
						<div class="row -mx-[20px] mb-[20px]">
							<div class="col-12 col-input !px-[20px]">
								<textarea class="form-textarea w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[16px] resize-none h-[120px] !p-[10px] !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" name="data[noidung]" placeholder="Nhu cầu đặc biệt"></textarea>
							</div>
						</div>
						<input type="hidden" name="data[type]" value="datban">
						<input type="hidden" name="data[id_nhahang]" value="<?=$pro_list['id']?>">
						<input type="hidden" name="url" value="<?=$func->getCurrentPageURL()?>">
						<input type="hidden" name="data[name_nhahang]" value="<?=$pro_list['ten'.$lang]?>">
						<div class="row -mx-[0] flex items-center justify-center mb-[10px]">
							<input type="hidden" name="submitdatban" value="submitdatban">
							<input type="hidden" name="recaptcha_response_datban" id="recaptchaResponseDatban">
							<button type="submit" name="submit-datban" class="bg-[#3A9923] rounded-[26px] inline-block text-[16px] font-bold py-[10px] px-[48px] leading-[24px] uppercase border-[1px] border-[#3A9923] !text-white hover:bg-white hover:!text-[#3A9923] transition-all duration-500" value="datban">Đặt Ngay</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
