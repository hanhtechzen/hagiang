<?php 
    $row_banner_breadcrumb = $d->rawQueryOne("select photo from #_photo where type=?",array($type.'-banner-breadcrumb'));
    $khachsanmenu = $d->rawQuery("SELECT ten$lang as ten, tenkhongdauvi, tenkhongdauen, id FROM #_product_list WHERE hienthi=1 AND type = ? ORDER BY stt,id DESC",array($type));

?>
<?php include TEMPLATE.LAYOUT."banner_breadcrumb.php"; ?>
<div x-data="ShowKhacSan()">
	<section class="wrap-order-tour bg-[#2C2C2C]" >
		<div class="container flex items-center justify-between">
			<div class="bloxk-search w-[25%] relative">
				<p class="capitalize text-[#868686] text-[16px] mb-[6px]">Chọn khách sạn</p>
				<div class="show-ul-list" @click="show_list = !show_list" @click.outside="show_list = false">
					<p x-text="title_select"></p>
					<div class="bolck-show-list absolute top-full mt-[10px] left-0 z-[888] w-full bg-white " x-show="show_list">
						<ul class="data-scrollbar max-h-[400px]">
							<?php foreach ($khachsanmenu as $k => $v) {?>
							<li><a :class="(khachsan_select == <?=$v['id']?>)?'!bg-[#E2F7DD] text-[#3A9923]':''" @click="khachsan_select = <?=$v['id']?>,title_select=`<?=$v['ten']?>`" class="block text-[#1A1111] text-[16px] px-[10px] py-[8px] transition-all duration-500 hover:bg-[#E2F7DD] hover:text-[#3A9923]" href="javascript:void(0)" data-test="<?=$v['ten']?>"><?=$v['ten']?></a></li>
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
			<div class="bloxk-search w-[25%]">
				<p class="capitalize text-[#868686] text-[16px] mb-[6px]">Số người</p>
				<div class="show-ul-list">
					<input type="number" @keyup.debounce.300ms="songuoi_popup = $('#songuoi').val();" id="songuoi" class="songuoi !bg-none" placeholder="Số người" value="1">
				</div>
			</div>
			<div class="bloxk-search w-[180px]">
				<a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal" class="bg-[#3A9923] uppercase font-bold text-white text-[16px] py-[44px] !text-center block">ĐẶT Phòng NGAY</a>
			</div>
		</div>

		<section class="detail-tour bg-[#F4F4F4] py-[50px]">
			<div class="container">
				<div class="title-chill-tour text-center mb-[30px]">
					<p class="uppercase text-[40px] capitalize font-Viaoda">Khách sạn nổi bật</p>
				</div>
				<div class="row !-mx-[12px]">
			        <?php foreach ($product as $v) { ?>
			        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-product !mb-[24px] !px-[12px]">
			            <div class="bock-tour bg-white p-[20px]">
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
			                    <div class="mt-[15px] tool-mota-gioithieu flex items-center justify-center">
									<a href="javascript:void(0)" @click="BookPhong('<?=$v['id']?>',`<?=$v['ten'.$lang]?>`)" class="rounded-[26px] border-[1px] border-[#3A9923] bg-[#3A9923] font-bold text-[16px] text-white px-[40px] py-[10px] uppercase transition-all hover:!bg-white hover:!text-[#3A9923]">Đặt Ngay</a>
								</div>
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
						<p class="uppercase text-[40px] capitalize font-Viaoda">Khách sạn đã xem</p>
					</div>
					<div class="row-tour-slick slick-arrows -mx-[12px]">
						<div class="slick in-page" data-dots="0" data-infinite="1" data-arrows="1" data-autoplay='0' data-slidesDefault="3:1" data-lg-items='3:1' data-md-items='3:1' data-sm-items='3:1' data-xs-items="3:1" data-vertical="0">
							<?php foreach ($product_view as $k => $v) {?>
							<div class="col-tour-slick px-[12px]">
								<div class="bock-tour bg-white p-[20px]">
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
					                    <div class="mt-[15px] tool-mota-gioithieu flex items-center justify-center">
											<a href="javascript:void(0)" @click="BookPhong('<?=$v['id']?>','<?=$v['ten'.$lang]?>')" class="rounded-[26px] border-[1px] border-[#3A9923] bg-[#3A9923] font-bold text-[16px] text-white px-[40px] py-[10px] uppercase transition-all hover:!bg-white hover:!text-[#3A9923]">Đặt Ngay</a>
										</div>
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


	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog !max-w-[800px] modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body relative">
					<button type="button" class="close absolute top-[15px] right-[15px] opacity-100 !outline-0" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true" class="text-[37px]">&times;</span>
	        		</button>
					<div class="title-form-dat-tour text-center mb-[60px]">
						<h6 class="font-Viaoda text-[#1C1C1C] text-[32px] leading-[44px] py-[10px] px-[70px] !mb-0 !border-l-0 inline-block">Bạn đã lựa chọn ở lại vào thời gian <span x-text="time_popup" class="text-[#3A9923]"></span> cho <span x-text="songuoi_popup" class="text-[#3A9923]"></span> người</h6>
					</div>
					<div class="wrap-show-form">
						<form method="post" action="" id="form-recaptchaResponseDatphong1" enctype="multipart/form-data">
							<div class="row -mx-[37.5px] mb-[40px]">
								<div class="col-6 col-input !px-[37.5px]">
									<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[ten]" placeholder="Họ và tên">
								</div>
								<div class="col-6 col-input !px-[37.5px]">
									<input type="email" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[email]" placeholder="Email">
								</div>
								
							</div>
							<div class="row -mx-[37.5px] mb-[40px]">
								<div class="col-6 col-input !px-[37.5px]">
									<input type="number" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[dienthoai]" placeholder="Số điện thoại">
								</div>
								<div class="col-6 col-input !px-[37.5px]">
									<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[diachi]" placeholder="Địa chỉ">
								</div>
							</div>
							<div class="row -mx-[37.5px] mb-[40px]">
								<div class="col-12 col-input !px-[37.5px]">
									<textarea class="form-textarea w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[16px] resize-none h-[120px] !p-[10px] !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" name="data[noidung]" placeholder="Nhu cầu đặc biệt"></textarea>
								</div>
							</div>
							<input type="hidden" name="data[type]" value="datphong">
							<input type="hidden" name="data[songuoi]" x-model="songuoi_popup">
							<input type="hidden" name="data[id_khachsan]" x-model="khachsan_select">
							<input type="hidden" name="url" value="<?=$func->getCurrentPageURL()?>">
							<input type="hidden" name="data[name_khachsan]" x-model="title_select">
							<input type="hidden" name="data[ngaysudung]" x-model="time_popup">

							<div class="row -mx-[0] flex items-center justify-center">
								<input type="hidden" name="submitdatphong" value="submitdatphong">
								<input type="hidden" name="recaptcha_response_datphong" id="recaptchaResponseDatphong">
								<button type="submit" name="submit-datphong" class="bg-[#3A9923] rounded-[26px] inline-block text-[16px] font-bold py-[10px] px-[48px] leading-[24px] uppercase border-[1px] border-[#3A9923] !text-white hover:bg-white hover:!text-[#3A9923] transition-all duration-500" value="datphong">Đặt Phòng Ngay</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
		<div class="modal-dialog !max-w-[800px] modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body relative">
					<button type="button" class="close absolute top-[15px] right-[15px] opacity-100 !outline-0" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true" class="text-[37px]">&times;</span>
	        		</button>
					<div class="title-form-dat-tour text-center mb-[60px]">
						<h6 class="font-Viaoda text-[#1C1C1C] text-[32px] leading-[44px] py-[10px] px-[70px] !mb-0 !border-l-0 inline-block">Thông tin đặt Khách Sạn <span x-text="title_select" class="text-[#3A9923]"></span></h6>
					</div>
					<div class="wrap-show-form">
						<form id="form-recaptchaResponseDatphong" method="post" action="" enctype="multipart/form-data">
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
								<div class="col-6 col-input !px-[20px]">
									<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0 ngaykhoihanh1" required="" name="data[ngaysudung]" placeholder="Thời gian">
								</div>
								<div class="col-6 col-input !px-[20px]">
									<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" value="1" name="data[songuoi]" placeholder="Số người">
								</div>
							</div>
							<div class="row -mx-[20px] mb-[40px]">
								<div class="col-12 col-input !px-[20px]">
									<textarea class="form-textarea w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[16px] resize-none h-[120px] !p-[10px] !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" name="data[noidung]" placeholder="Nhu cầu đặc biệt"></textarea>
								</div>
							</div>
							<input type="hidden" name="data[type]" value="datphong">
							<input type="hidden" name="data[id_khachsan]" x-model="khachsan_select">
							<input type="hidden" name="url" value="<?=$func->getCurrentPageURL()?>">
							<input type="hidden" name="data[name_khachsan]" x-model="title_select">

							<div class="row -mx-[0] flex items-center justify-center">
								<input type="hidden" name="recaptcha_response_datphong" id="recaptchaResponseDatphong1">
								<input type="hidden" name="submitdatphong" value="submitdatphong">
								<button type="submit" name="submit-datphong" class="bg-[#3A9923] rounded-[26px] inline-block text-[16px] font-bold py-[10px] px-[48px] leading-[24px] uppercase border-[1px] border-[#3A9923] !text-white hover:bg-white hover:!text-[#3A9923] transition-all duration-500" value="datphong">Đặt Phòng Ngay</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script type="text/javascript">
	function ShowKhacSan() {
		return {
			songuoi_popup:1,
			time_popup:'<?=date('d/m/Y',time())?>',
			title_select:`<?=(!empty($khachsanmenu[0]['ten']))?$khachsanmenu[0]['ten']:'Chọn Khách Sạn'?>`,
			show_list:false,
			khachsan_select:<?=(!empty($khachsanmenu[0]['id']))?$khachsanmenu[0]['id']:'false'?>,
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
			},
			BookPhong(id,name){
				this.title_select = name;
				this.khachsan_select = id;
				$('#exampleModal2').modal('show');
			}
		}
	}
</script>