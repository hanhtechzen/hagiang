<?php 
    $row_banner_breadcrumb = $d->rawQueryOne("select photo from #_photo where type=?",array($type.'-banner-breadcrumb'));
    $nhahangmenu = $d->rawQuery("SELECT ten$lang as ten, tenkhongdauvi, tenkhongdauen, id FROM #_product_list WHERE hienthi=1 AND type = ? ORDER BY stt,id DESC",array($type));

?>
<?php include TEMPLATE.LAYOUT."banner_breadcrumb.php"; ?>
<div x-data="ShowNhaHang()" class="relative">
	<section class="wrap-order-tour z-[9] absolute w-full top-[-11px] -mt-[44px]" >
		<div class="button-slide flex justify-center w-full">
            <p class="action-datlich">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal" class="bg-[#3A9923] rounded-[26px] text-[16px] font-bold py-[10px] px-[25px] block text-center leading-[24px] uppercase !text-white">ĐẶT BÀN NGAY</a>
            </p>
        </div>
	</section>
	<section class="detail-tour bg-[#F4F4F4] py-[50px]">
		<div class="container">
			<div class="title-chill-tour text-center mb-[30px]">
				<p class="uppercase text-[32px] capitalize font-Viaoda">Nhà hàng nổi bật</p>
			</div>
			<div class="row !-mx-[12px]">
		        <?php foreach ($product as $v) { ?>
		        <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-product !mb-[24px] !px-[12px]">
		            <div class="bock-tour bg-white p-[16px]">
		                <div class="img-tour">
		                    <a href="<?=$v['tenkhongdau'.$lang]?>" class="overflow-hidden block group">
		                        <img src="<?=THUMBS?>/336x252x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" class="transition-all duration-500 w-full group-hover:scale-[1.1]" alt="<?=$v['ten'.$lang]?>">
		                    </a>
		                </div>
		                <div class="info-tour text-center mt-[10px]">
		                    <h3 class="leading-none px-[10px]">
		                        <a href="<?=$v['tenkhongdau'.$lang]?>" class="text-[#1C1C1C] line-clamp-2 leading-[26px] text-[17px] font-bold inline-block decoration-0"><?=$v['ten'.$lang]?></a>
		                    </h3>
		                    <p class="line-clamp-3 text-[16px]"><?=$v['mota'.$lang]?></p>
		                </div>
		            </div>
		        </div>  
		        <?php } ?>
		    </div>
		    <div class="pagination-home !m-auto"><?=$paging?></div>
		</div>
		<?php if(!empty($product_view)){?>
		<div class="wrap-daxem mt-[50px]">
			<div class="container">
				<div class="title-chill-tour text-center mb-[30px]">
					<p class="uppercase text-[32px] capitalize font-Viaoda">Nhà hàng đã xem</p>
				</div>
				<div class="main-custom-slide mx-auto max-w-[75%]">
					<div class="row-tour-slick slick-arrows -mx-[12px]">
						<div class="slick in-page" data-dots="0" data-infinite="1" data-arrows="0" data-autoplay='1' data-slidesDefault="1:1" data-lg-items='1:1' data-md-items='1:1' data-sm-items='1:1' data-xs-items="1:1" data-vertical="0">
							<?php foreach ($product_view as $k => $v) {?>
							<div class="col-tour-slick px-[12px]">
								<div class="bock-tour">
					                <div class="img-tour">
					                    <a href="<?=$v['tenkhongdau'.$lang]?>" class="overflow-hidden block group">
					                        <img src="<?=THUMBS?>/282x211x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" class="transition-all duration-500 w-full group-hover:scale-[1.1]" alt="<?=$v['ten'.$lang]?>">
					                    </a>
					                </div>
					                <div class="info-tour text-center mt-[10px]">
					                    <h3 class="leading-none px-[10px]">
					                        <a href="<?=$v['tenkhongdau'.$lang]?>" class="text-[#1C1C1C] line-clamp-2 leading-[26px] text-[17px] font-bold inline-block decoration-0"><?=$v['ten'.$lang]?></a>
					                    </h3>
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
	<div class="modal-dialog !min-h-[100vh] !m-auto bg-white !max-w-[800px] modal-dialog-centered" role="document">
		<div class="modal-content min-h-[100dvh] !border-0 !rounded-none !p-[15px]">
			<div class="modal-body !p-0">
				<button type="button" class="close absolute !opacity-100 !text-shadow-none !text-white top-[15px] z-[30] right-[10px] opacity-100 !outline-0" data-dismiss="modal" aria-label="Close">
          			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M19 5L5 19" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"/>
						<path d="M19 19L5 5" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"/>
					</svg>
        		</button>
				<div class="title-form-dat-tour text-center mb-[30px]">
					<h6 class="font-Viaoda text-[#1C1C1C] text-[28px] leading-[44px] py-[10px] px-[30px] !mb-0 !border-l-0 inline-block capitalize">Đăng ký đặt bàn</h6>
				</div>
				<div class="wrap-show-form">
					<form id="form-recaptchaResponseDatban" method="post" action="" enctype="multipart/form-data">
						<div class="row -mx-[20px] mb-[20px]">
							<div class="col-12 col-input mb-[20px] !px-[20px]">
								<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[ten]" placeholder="Họ và tên">
							</div>
							<div class="col-12 col-input !px-[20px]">
								<input type="email" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[email]" placeholder="Email">
							</div>
							
						</div>
						<div class="row -mx-[20px] mb-[20px]">
							<div class="col-12 col-input mb-[20px] !px-[20px]">
								<input type="number" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[dienthoai]" placeholder="Số điện thoại">
							</div>
							<div class="col-12 col-input mb-[20px] !px-[20px]">
								<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[diachi]" placeholder="Địa chỉ">
							</div>
							<div class="col-12 col-input mb-[20px] !px-[20px]">
								<select name="data[name_nhahang]" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" id="">
									<option value="">Chọn nhà hàng</option>
									<?php foreach ($nhahangmenu as $k => $v) {?>
									<option value="<?=$v['ten']?>"><?=$v['ten']?></option>}
									<?php }?>
								</select>
							</div>
							<div class="col-12 col-input mb-[20px] !px-[20px] ">
								<input type="number"  class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[songuoi]" placeholder="Số lượng khách">
							</div>
							<div class="col-12 col-input !px-[20px] ">
								<input type="text"  class="form-input w-full ngaykhoihanh placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[ngaysudung]" placeholder="Thời gian">
							</div>
						</div>
						<div class="row -mx-[20px] mb-[20px]">
							<div class="col-12 col-input !px-[20px]">
								<textarea class="form-textarea w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[16px] resize-none h-[120px] !p-[10px] !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" name="data[noidung]" placeholder="Nhu cầu đặt biệt"></textarea>
							</div>
						</div>
						<input type="hidden" name="data[type]" value="datban">
						<input type="hidden" name="url" value="<?=$func->getCurrentPageURL()?>">

						<div class="row -mx-[0] flex items-center justify-center">
							<input type="hidden" name="submitdatban" value="submitdatban">
							<input type="hidden" name="recaptcha_response_datban" id="recaptchaResponseDatban">
							<button type="submit" name="submit-datban" class="bg-[#3A9923] rounded-[26px] inline-block text-[16px] font-bold py-[10px] px-[48px] leading-[24px] uppercase border-[1px] border-[#3A9923] !text-white hover:bg-white hover:!text-[#3A9923] transition-all duration-500" value="datban">Đặt Bàn Ngay</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<script type="text/javascript">
	function ShowNhaHang() {
		return {
			songuoi_popup:1,
			time_popup:'<?=date('d/m/Y',time())?>',
			title_select:'<?=(!empty($nhahangmenu[0]['ten']))?$nhahangmenu[0]['ten']:'Chọn nhà hàng'?>',
			show_list:false,
			nhahang_select:<?=(!empty($nhahangmenu[0]['id']))?$nhahangmenu[0]['id']:'false'?>,
			init(){
				let _root=this;
				$('.ngaykhoihanh1').flatpickr({
			    	mode: "range",
			    	minDate: "today",
			    	showMonths:1,
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