<?php if(!empty($banner_slide['id'])) { ?>
    <div class="show-banner-slide  w-full relative" >
        <div class="bg-video w-full absolute left-0 top-0 h-full">
            <video class="absolute w-full h-full top-0 left-0 object-cover" src="<?=UPLOAD_PHOTO_L.$banner_slide['video']?>" autoplay autoloop loop muted></video>
        </div>
        <div class="wrap-banner-slide w-full min-h-[calc(100vh_-_96px)]  flex items-center justify-center" >
            <!-- <div class="bg-img bg-cover bg-center bg-no-repeat" style="background-image: url(<?=UPLOAD_PHOTO_L.$banner_slide['photo']?>);"></div> -->
            <div class="info-desc-slide max-w-[588px]">
                <div class="title-slide">
                    <p class="text-[48px] !text-white"><?=$banner_slide['ten'.$lang]?></p>
                </div>
                <div class="desc-slide"><p class="text-[16px] !text-white"><?=$banner_slide['mota'.$lang]?></p></div>
            </div>
        </div>
    </div>
<?php } ?>