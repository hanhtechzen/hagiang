<section class="header bg-white !sticky !top-0 !z-50">
	<div class="container flex items-center justify-between">
		<div class="logo">
			<a href="">
				<img src="<?=UPLOAD_PHOTO_L.$logo['photo']?>" alt="<?=$setting['ten'.$lang]?>">
			</a>
		</div>
		<div class="wrap-header-menu w-7/12">
			<?php include TEMPLATE.LAYOUT."menu.php"; ?>
		</div>
		<div class="wrap-header-right flex items-center justify-end" x-data="{showGG1:false}">
			<p class="action-datlich">
				<a href="javascript:void(0)" data-toggle="modal" data-target="#DatVeexampleModal" class="bg-[#3A9923] rounded-[26px] text-[16px] font-bold py-[14px] min-w-[203px] block text-center leading-[24px] uppercase !text-white">
					ĐẶT VÉ NGAY
				</a>
			</p>
			<div class="lang-google ml-[23.5px] relative bg-white w-[50px]" @click.outside="showGG1 = false" @click="showGG1 = !showGG1">
				<p class="show-lang-gg bg-[url(../images/bg-down-ggdich.svg)] bg-no-repeat bg-right-center text-[#1C1C1C] font-bold text-[16px] pr-[25px] cursor-pointer lang_txt">VN</p>
				<div class="list-translate absolute bg-white shadow-md top-full mt-[10px] left-0" x-show="showGG1">
					<ul>
						<li><a data-value="vi|vi" data-text="VN" class="changeLanguage font-bold capitalize block text-[14px] text-[#1C1C1C] px-[12px] py-[6px] transition-all duration-500 hover:bg-[#E2F7DD] hover:text-[#3A9923]" href="javascript:void(0)">VN</a></li>
						<li><a data-value="vi|en" data-text="Anh" class="changeLanguage font-bold capitalize block text-[14px] text-[#1C1C1C] px-[12px] py-[6px] transition-all duration-500 hover:bg-[#E2F7DD] hover:text-[#3A9923]" href="javascript:void(0)">ENG</a></li>
						<li><a data-value="vi|es" data-text="TBN" class="changeLanguage font-bold capitalize block text-[14px] text-[#1C1C1C] px-[12px] py-[6px] transition-all duration-500 hover:bg-[#E2F7DD] hover:text-[#3A9923]" href="javascript:void(0)">TBN</a></li>
						<li><a data-value="vi|de" data-text="Đức" class="changeLanguage font-bold capitalize block text-[14px] text-[#1C1C1C] px-[12px] py-[6px] transition-all duration-500 hover:bg-[#E2F7DD] hover:text-[#3A9923]" href="javascript:void(0)">Đức</a></li>
						<li><a data-value="vi|ja" data-text="Nhật" class="changeLanguage font-bold capitalize block text-[14px] text-[#1C1C1C] px-[12px] py-[6px] transition-all duration-500 hover:bg-[#E2F7DD] hover:text-[#3A9923]" href="javascript:void(0)">Nhật</a></li>
					</ul>
				</div>
				<div id="google_language_translator" class="hidden"></div>
			</div>
		</div>
	</div>
</section>
