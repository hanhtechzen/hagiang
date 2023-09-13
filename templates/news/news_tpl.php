<?php 
    $row_banner_breadcrumb = $d->rawQueryOne("select photo from #_photo where type=?",array($type.'-banner-breadcrumb'));
?>
<?php include TEMPLATE.LAYOUT."banner_breadcrumb.php"; ?>
<section class="detail-tour bg-[#F4F4F4]">
    <div class="wrap-show-news py-[50px] !pt-[72px]">
        <div class="container">
            <div class="title-form-dat-tour text-center mb-[60px]">
                <h2 class="font-Viaoda text-[#3A9923] text-[30px] border-[1px] border-[#3A9923] !border-r-0 leading-[44px] py-[15px] !mb-0 !border-l-0 inline-block capitalize"><?=($title_cat!='')?$title_cat:$title_crumb?></h2>
            </div>
            <div class="row !-mx-[12px]">
                <?php foreach ($news as $v) { ?>
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-product !mb-[24px] !px-[12px]">
                    <div class="bock-tour bg-white p-[20px]">
                        <div class="img-tour">
                            <a href="<?=$v['tenkhongdau'.$lang]?>" class="overflow-hidden block group">
                                <img src="<?=THUMBS?>/336x252x1/<?=UPLOAD_NEWS_L.$v['photo']?>" class="transition-all duration-500 w-full group-hover:scale-[1.1]" alt="<?=$v['ten'.$lang]?>">
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
    </div>
</section>