<section class="header <?=($source != 'index')?'no-index':''?> !z-50">
	<div class="container flex items-center justify-between">
		<div class="logo pl-[10px]">
			<a href=""><img src="<?=UPLOAD_PHOTO_L.$logo['photo']?>" alt="<?=$setting['ten'.$lang]?>"></a>
		</div>
		<div class="d-flex justify-content-end align-items-center flex-1" x-data="{showGG:false}">
			<div class="lang-google mr-2 relative " @click.outside="showGG = false" @click="showGG = !showGG">
				<p class="show-lang-gg bg-[url(../images/bg-down-ggdich.svg)] bg-no-repeat bg-right-center text-[#1C1C1C] font-bold text-[16px] pr-[25px] cursor-pointer lang_txt">VN</p>
				<div class="list-translate absolute bg-white shadow-md top-full mt-[10px] left-0" x-show="showGG">
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
			<div class="button-open-menu">
				<span>
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M1 12H23"  stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"/>
						<path d="M1 5H23"  stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"/>
						<path d="M1 19H23"  stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"/>
					</svg>
				</span>
			</div>
		</div>
	</div>
</section>
