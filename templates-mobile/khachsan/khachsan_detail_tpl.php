<?php 
	$hangphong = $d->rawQuery("select ten$lang,huongphong,loaigiuong,dientich,soluongnguoi,photo,id from #_product where id_list=? and type=? and hienthi=1 order by stt asc",array($pro_list['id'],$type))
?>
<section class="detail-tour bg-[#F4F4F4] py-[50px] !pt-0 pb-0" x-data="LoadHtml()">
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
				<div class="col-12 col-lg-6 mt-[20px]">
					<div class="top-detail-tour">
						<p class="title-tour-detail capitalize text-[32px] font-Viaoda mb-[20px]"><?=$pro_list['ten'.$lang]?></p>
					</div>
					<div class="mota-detail-tour mt-[24px]">
						<p class="leading-[25px] text-[16px]"><?=htmlspecialchars_decode($pro_list['mota'.$lang])?></p>
					</div>
					<ul class="text-[16px] mt-[24px]">
						<li class="mb-[12px]"><b>Mã:</b> <?=$pro_list['masp']?></li>
						<li class="mb-[12px]"><b>Thời gian:</b> <?=$pro_list['thoigian']?></li>
						<li class="mb-[12px]"><b>Giá:</b> <span class="inline-block text-[#EF6365] font-bold text-[20px]"><?=($pro_list['gia'])?$pro_list['gia']:lienhe?></span></li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="wrap-info-detail-tour mt-[50px]">
		<div class="tap-info">
			<div class="container">
				<ul>
					<li><a href="javascript:void(0)" @click="clickscroll('#diem-noi-bat')" class="active">Điểm nổi bật</a></li>
					<li><a href="javascript:void(0)" @click="clickscroll('#hang-phong')">Hạng phòng</a></li>
					<li><a href="javascript:void(0)" @click="clickscroll('#binh-luan')">Bình luận</a></li>
				</ul>
			</div>
		</div>
		<div class="content-detail-tour">
			<div id="diem-noi-bat" class="noidung-tour py-[40px] border-b-[1px] border-b-[#000]/[.12]">
				<div class="container">
					<div class="noidung-lichtrinh noidung-tour-cke"><?=htmlspecialchars_decode($pro_list['noidung'.$lang])?></div>
				</div>
			</div>
			<div id="hang-phong" class="noidung-tour py-[40px] border-b-[1px] border-b-[#000]/[.12]">
				<div class="container">
					<p class="title-content-detail-tour block text-[#3A9923] font-bold text-[20px] mb-[32px]">Hạng Phòng</p>
					<div class="list-hangphong">
						<?php foreach ($hangphong as $k => $v) {?>
						<div class="bloxk-hangphong flex flex-wrap items-center bg-white p-[16px] mb-[16px] last:!mb-0">
							<div class="img-phong w-full md:w-[346px]">
								<img class="w-full" src="<?=THUMBS?>/346x252x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>">
							</div>
							<div class="info-phong w-full flex-1 pt-[16px] md:pt-0 md:pl-[37px]">
								<h3 class="text-[20px] font-bold text-[#1C1C1C] mb-[20px]"><?=$v['ten'.$lang]?></h3>
								<ul class="-mx-[10px] flex flex-wrap">
									<li class="w-full md:w-6/12 px-[10px] mb-[10px] md:mb-[24px]">
										<p class="flex items-center">
											<img src="assets/images/dientich.svg" alt="<?=$v['ten'.$lang]?>">
											<span class="ml-[12px] inline-block text-[#1C1C1C] text-[16px]"><?=$v['dientich']?></span>
										</p>
									</li>
									<li class="w-full md:w-6/12 px-[10px] mb-[10px] md:mb-[24px]">
										<p class="flex items-center">
											<img src="assets/images/loaigiuong.svg" alt="<?=$v['ten'.$lang]?>">
											<span class="ml-[12px] inline-block text-[#1C1C1C] text-[16px]"><?=$v['loaigiuong']?></span>
										</p>
									</li>
									<li class="w-full md:w-6/12 px-[10px] mb-[10px] md:mb-[24px]">
										<p class="flex items-center">
											<img src="assets/images/soluongnguoi.svg" alt="<?=$v['ten'.$lang]?>">
											<span class="ml-[12px] inline-block text-[#1C1C1C] text-[16px]"><?=$v['soluongnguoi']?></span>
										</p>
									</li>
									<li class="w-full md:w-6/12 px-[10px] mb-[10px] md:mb-[24px]">
										<p class="flex items-center">
											<img src="assets/images/huongphong.svg" alt="<?=$v['ten'.$lang]?>">
											<span class="ml-[12px] inline-block text-[#1C1C1C] text-[16px]"><?=$v['huongphong']?></span>
										</p>
									</li>
								</ul>
								<div class="tool-mota-gioithieu flex items-center justify-start flex-wrap mt-[24px]">
									<a href="javascript:void(0)" @click="LoadInfoPhong(<?=$v['id']?>)" class="w-full text-center mb-[20px] mx-auto md:w-auto rounded-[26px] md:mb-0 md:mr-[23px] border-[1px] border-[#3A9923] font-bold bg-white text-[16px] text-[#3A9923] px-[40px] py-[10px] uppercase transition-all hover:!bg-[#3A9923] hover:!text-white">XEM CHI TIẾT PHÒNG</a>
									<a href="javascript:void(0)" @click="BookPhong('<?=$v['ten'.$lang]?>')" class="w-full text-center mx-auto md:w-auto rounded-[26px] border-[1px] border-[#3A9923] bg-[#3A9923] font-bold text-[16px] text-white px-[40px] py-[10px] uppercase transition-all hover:!bg-white hover:!text-[#3A9923]">ĐẶT NGAY</a>
								</div>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
			<div id="binh-luan" class="noidung-tour py-[40px] border-b-[1px] border-b-[#000]/[.12]">
				<div class="container">
					<p class="title-content-detail-tour block text-[#3A9923] font-bold text-[20px] mb-[32px]">Bình luận</p>
					<div class="fb-comments" data-href="<?=$func->getCurrentPageURL()?>" data-numposts="3" data-colorscheme="light" data-width="100%"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog !min-h-[100dvh] !m-auto !max-w-[800px] modal-dialog-centered" role="document">
			<div class="modal-content !border-0 !rounded-none !static">
				<button type="button" class="close absolute !opacity-100 !text-shadow-none !text-white top-[15px] z-[30] right-[15px] opacity-100 !outline-0" data-dismiss="modal" aria-label="Close">
          			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M19 5L5 19" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"/>
						<path d="M19 19L5 5" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"/>
					</svg>
        		</button>
				<div class="modal-body !p-0">
					<div class="row -mx-[20px]">
						<div class="col-12 col-lg-6 px-[20px]" id="showlist">
							
						</div>
						<div class="col-12 col-lg-6 px-[20px]">
							<div class="show-info-phong p-[20px]"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
		<div class="modal-dialog !min-h-[100vw] !m-auto !max-w-[800px] " role="document">
			<div class="modal-content !border-0 !min-h-[100dvh] !rounded-none !static">
				<div class="modal-body !p-0">
					<button type="button" class="close absolute !opacity-100 !text-shadow-none !text-white top-[15px] z-[30] right-[10px] opacity-100 !outline-0" data-dismiss="modal" aria-label="Close">
	          			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M19 5L5 19" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"/>
							<path d="M19 19L5 5" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"/>
						</svg>
	        		</button>
					<div class="title-form-dat-tour text-center mb-[60px]">
						<h6 class="font-Viaoda text-[#1C1C1C] text-[28px] leading-[44px] py-[10px] px-[30px] !mb-0 !border-l-0 inline-block">Thông tin đặt Khách Sạn <span class="text-[#3A9923]"><?=$pro_list['ten'.$lang]?></span></h6>
					</div>
					<div class="wrap-show-form p-[20px] pt-0">
						<form id="form-recaptchaResponseDatphong" method="post" action="" enctype="multipart/form-data">
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
								<div class="col-12 col-input !px-[20px]">
									<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[diachi]" placeholder="Địa chỉ">
								</div>
							</div>
							<div class="row -mx-[20px] mb-[20px]">
								<div class="col-12 col-input mb-[20px] !px-[20px]">
									<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0 ngaykhoihanh1" required="" name="data[ngaysudung]" placeholder="Thời gian">
								</div>
								<div class="col-12 col-input !px-[20px]">
									<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" value="1" name="data[songuoi]" placeholder="Số người">
								</div>
							</div>
							<div class="row -mx-[20px] mb-[20px]">
								<div class="col-12 col-input !px-[20px]">
									<textarea class="form-textarea w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[16px] resize-none h-[120px] !p-[10px] !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" name="data[noidung]" placeholder="Nhu cầu đặc biệt"></textarea>
								</div>
							</div>
							<input type="hidden" name="data[type]" value="datphong">
							<input type="hidden" name="data[hangphong]" x-model="hangphong">
							<input type="hidden" name="data[id_khachsan]" value="<?=$pro_list['id']?>">
							<input type="hidden" name="url" value="<?=$func->getCurrentPageURL()?>">
							<input type="hidden" name="data[name_khachsan]" value="<?=$pro_list['ten'.$lang]?>">

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


</section>
<script type="text/javascript">
	const options = {
	     theme:"sk-cube-grid",
	     backgroundColor:"#000000",
	};
	function LoadHtml() {
		return {
			hangphong:'',
			init(){
				let _root=this;
				$('.ngaykhoihanh1').flatpickr({
			    	mode: "range",
			    	minDate: "today",
			    	showMonths:1,
			    	dateFormat: "d/m/Y",
			    	rangeSeparator: ' - ',
			    });
			},
			BookPhong(name){
				this.hangphong = name;
				$('#exampleModal2').modal('show');
			},
			clickscroll(_root){
				let scrol = $(_root).offset().top;
				$('html, body').animate({scrollTop : scrol},800);
			},
			LoadInfoPhong(id){
				HoldOn.open(options);
				$.ajax({
					url: 'ajax/loadphong.php',
					type: 'POST',
					dataType: 'json',
					data: {id: id},
					beforeSend:function(){
						$('#images-phong').slick('removeSlide', null, null, true);
					},
					success:function(data){
						$('.show-info-phong').html(data.inffo);
						$('#showlist').html(data.photo);
						$('#exampleModalCenter').modal('show');
						setTimeout(function(){
							FRAMEWORK.slickPage();
						},500)
						HoldOn.close();
					}
				})
				
			}
		}
	}
</script>