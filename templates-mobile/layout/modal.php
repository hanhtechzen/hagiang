<?php if (isset($popup['hienthi'])) { ?>
	<!-- Modal popup -->
	<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title" id="popupModalLabel"><?= $popup['ten' . $lang] ?></h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<a href="<?= $popup['link'] ?>"><img src="<?= THUMBS ?>/800x530x1/<?= UPLOAD_PHOTO_L . $popup['photo'] ?>" alt="Popup"></a>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<!-- Modal notify -->
<div class="modal modal-custom fade" id="popup-notify" tabindex="-1" role="dialog" aria-labelledby="popup-notify-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-top modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="popup-notify-label"><?= thongbao ?></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body"></div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-danger" data-dismiss="modal"><?= thoat ?></button>
			</div>
		</div>
	</div>
</div>
<?php if ($config['order']['check'] == true) { ?>
	<!-- Modal cart -->
	<div class="modal fade" id="popup-cart" tabindex="-1" role="dialog" aria-labelledby="popup-cart-label" aria-hidden="true">
		<div class="modal-dialog modal-dialog-top modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="modal-title" id="popup-cart-label"><?= giohangcuaban ?></h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body"></div>
			</div>
		</div>
	</div>
<?php } ?>
<?php
$tourlistmenu = $d->rawQuery("SELECT ten$lang as ten, tenkhongdauvi, tenkhongdauen, id FROM #_product_list WHERE hienthi=1 AND type = ? ORDER BY stt,id DESC", array('tour-du-lich'));
$tourlistmenu1 = $d->rawQuery("SELECT ten$lang as ten, tenkhongdauvi, tenkhongdauen, id FROM #_product_list WHERE hienthi=1 AND type = ? ORDER BY stt,id DESC", array('khach-san'));
$tourlistmenu2 = $d->rawQuery("SELECT ten$lang as ten, tenkhongdauvi, tenkhongdauen, id FROM #_product_list WHERE hienthi=1 AND type = ? ORDER BY stt,id DESC", array('nha-hang'));
?>

<div class="modal fade max-h-[100dvh] !min-h-[100dvh] !pl-[0]" id="DatVeexampleModal" tabindex="-1" role="dialog" aria-labelledby="DatVeexampleLabel" aria-hidden="true">
	<div class="modal-dialog !w-[100vw] !max-w-[100vw] !mx-auto !mt-0 !mb-0 modal-dialog-centered" role="document">
		<div class="modal-content !rounded-none">
			<div class="modal-body relative">
				<button type="button" class="close absolute !opacity-100 !text-shadow-none !text-white top-[15px] z-[30] right-[15px] opacity-100 !outline-0" data-dismiss="modal" aria-label="Close">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M19 5L5 19" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square" />
						<path d="M19 19L5 5" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square" />
					</svg>
				</button>
				<div class="title-form-dat-tour text-center mb-[20px]">
					<h6 class="font-Viaoda text-[#1C1C1C] text-[30px] capitalize leading-[44px] py-[10px] px-[70px] !mb-0 !border-l-0 inline-block">Thông tin đặt vé</h6>
				</div>
				<div class="wrap-show-form">
					<form id="form-recaptchaResponseDatVeNgay" method="post" action="" enctype="multipart/form-data">
						<div class="row -mx-[10px]">
							<div class="col-12 col-input mb-[20px] !px-[10px]">
								<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[ten]" placeholder="Họ và tên">
							</div>
							<div class="col-12 col-input mb-[20px] !px-[10px]">
								<input type="email" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[email]" placeholder="Email">
							</div>
							<div class="col-12 col-input mb-[20px] !px-[10px]">
								<input type="number" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[dienthoai]" placeholder="Số điện thoại">
							</div>
						</div>
						<div class="row -mx-[10px]">
							<div class="col-12 col-input mb-[20px] !px-[10px]">
								<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[diachi]" placeholder="Địa chỉ">
							</div>
						</div>
						<div class="row -mx-[10px]">
							<div class="col-12 col-input mb-[20px] !px-[10px]">
								<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0 ngaysudung" required="" name="data[time_dukien]" placeholder="Thời gian dự kiến đi">
							</div>
							<div class="col-12 col-input mb-[20px] !px-[10px]">
								<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0 ngaysudung" required="" name="data[time_uoctinh]" placeholder="Thời gian dự kiến về">
								<?php /*
								<input type="text" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" list="list-uoctinh" required="" name="data[time_uoctinh]" placeholder="Thời gian ước tính ở lại">
								<datalist id="list-uoctinh">
									<option value="2-3 ngày">2-3 ngày</option>
									<option value="3-5 ngày">3-5 ngày</option>
									<option value="1 tuần">1 tuần</option>
									<option value="nhiều hơn 1 tuần">nhiều hơn 1 tuần</option>
								</datalist> */ ?>
							</div>
						</div>
						<div class="row -mx-[10px]">
							<div class="col-12 col-input mb-[20px] !px-[10px]">
								<select name="data[name_tour]" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" id="">
									<option value="">Chọn tour du lịch</option>
									<?php foreach ($tourlistmenu as $k => $v) { ?>
										<option value="<?= $v['ten'] ?>"><?= $v['ten'] ?></option>}
									<?php } ?>
								</select>
							</div>
							<div class="col-12 col-input mb-[20px] !px-[10px]">
								<select name="data[name_khachsan]" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" id="">
									<option value="">Chọn khách sạn</option>
									<?php foreach ($tourlistmenu1 as $k => $v) { ?>
										<option value="<?= $v['ten'] ?>"><?= $v['ten'] ?></option>}
									<?php } ?>
								</select>
							</div>
							<div class="col-12 col-input mb-[20px] !px-[10px]">
								<select name="data[name_nhahang]" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" id="">
									<option value="">Chọn nhà hàng</option>
									<?php foreach ($tourlistmenu2 as $k => $v) { ?>
										<option value="<?= $v['ten'] ?>"><?= $v['ten'] ?></option>}
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="row -mx-[10px]">
							<div class="col-12 col-input mb-[20px] !px-[10px]">
								<input type="number" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" required="" name="data[nguoilon]" placeholder="Số người lớn > 12 tuổi">
							</div>
							<div class="col-12 col-input mb-[20px] !px-[10px]">
								<input type="number" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" name="data[treem]" placeholder="Số trẻ em (từ 5 - 11 tuổi)">
							</div>
							<div class="col-12 col-input mb-[20px] !px-[10px]">
								<input type="number" class="form-input w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[15px] !border-0 !px-0 !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" name="data[treem2]" placeholder="Số trẻ em miễn vé < 5 tuổi">
							</div>
						</div>
						<div class="row -mx-[10px] mb-[10px]">
							<div class="col-12 col-input mb-[20px] !px-[10px]">
								<textarea class="form-textarea w-full placeholder:text-[#868686] focus:ring-[#3A9923] focus:border-[#3A9923] text-[#868686] text-[16px] resize-none h-[120px] !p-[10px] !border-b-[1px] border-[#000]/[.12] !ring-0 !shadow-none !outline-0" name="data[noidung]" placeholder="Nhu cầu đặc biệt"></textarea>
							</div>
						</div>
						<input type="hidden" name="data[type]" value="datvengay">
						<input type="hidden" name="url" value="<?= $func->getCurrentPageURL() ?>">

						<div class="row -mx-[0] flex items-center justify-center mb-[10px]">
							<input type="hidden" name="datvengay" value="datvengay">
							<input type="hidden" name="recaptcha_response_datvengay" id="recaptchaResponseDatVeNgay">
							<button type="submit" name="submit-datvengay" class="bg-[#3A9923] rounded-[26px] inline-block text-[16px] font-bold py-[10px] px-[48px] leading-[24px] uppercase border-[1px] border-[#3A9923] !text-white hover:bg-white hover:!text-[#3A9923] transition-all duration-500" value="datvengay">Đặt Vé Ngay</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>