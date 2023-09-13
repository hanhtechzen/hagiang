<?php if(!empty($banner_slide['id'])) { ?>
    <div class="show-banner-slide  w-full relative" >
        <div class="bg-video w-full absolute left-0 top-0 h-[100dvh]">
            <video class="absolute w-full h-[100dvh] top-0 left-0 object-cover" src="<?=UPLOAD_PHOTO_L.$banner_slide['video']?>" autoplay autoloop loop muted></video>
        </div>
        <div class="wrap-banner-slide w-full min-h-[100dvh]  flex items-center justify-center" >
            <div class="info-desc-slide max-w-[588px]">
                <div class="title-slide">
                    <p class="text-[2rem] !text-white"><?=$banner_slide['ten'.$lang]?></p>
                </div>
                <div class="desc-slide"><p class="text-[14px] !text-white"><?=$banner_slide['mota'.$lang]?></p></div>
            </div>
        </div>
        <div class="button-slide flex justify-center absolute bottom-[25px] w-full">
            <p class="action-datlich">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#DatVeexampleModal" class="bg-[#3A9923] rounded-[26px] text-[16px] font-bold py-[10px] px-[25px] block text-center leading-[24px] uppercase !text-white">ĐẶT NGAY</a>
            </p>
        </div>
    </div>
<?php } ?>