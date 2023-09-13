<?php 
	$row_banner_breadcrumb = $d->rawQueryOne("select photo from #_photo where type=?",array($type.'-banner-breadcrumb'));
	$newsnb = $d->rawQuery("SELECT ten$lang, tenkhongdauvi, tenkhongdauen, mota$lang, ngaytao, id, photo FROM #_news WHERE hienthi=1 AND type = ? AND noibat>0 ORDER BY stt,id DESC limit 0,5",array($type));
?>
<?php include TEMPLATE.LAYOUT."banner_breadcrumb.php"; ?>
<div class="warp-chude-detail py-[50px]">
    <div class="container">
        <div class="row -mx-[10px]">
            <div class="col-12 col-lg-9 !px-[10px] border-r-[1px] border-solid border-[#ececec]">
                <div class="entry-header-text pb-[15px] mb-[25px] border-b-[1px] border-dashed border-[#ededed]">
                    <p class="text-[#3A9923] font-bold text-[25px]"><?=$row_detail['ten'.$lang]?></p>
                    <span class="text-[12px] text-[#0a0a0a]">Posted on <?=date('d-m-Y',$row_detail['ngaytao'])?> by admin</span>
                </div>
                <div class="meta-toc">
                    <div class="box-readmore">
                        <ul class="toc-list" data-toc="article" data-toc-headings="h1, h2, h3"></ul>
                    </div>
                </div>
                <div class="content-main info-news-detail mb-[30px]" id="toc-content"><?=htmlspecialchars_decode($row_detail['noidung'.$lang])?></div>  
                <div class="fb-comments" data-href="<?=$func->getCurrentPageURL()?>" data-numposts="3" data-colorscheme="light" data-width="100%"></div>
            </div>
            <div class="col-12 col-lg-3 mt-[30px] !px-[10px]">
                <?php if(!empty($newsnb)){?>
                <div class="block-sided last:!mb-0 mb-[40px]">
                    <h4>Bài viết nổi bật</h4>
                    <ul>
                        <?php foreach ($newsnb as $k => $v) {?>
                        <li class="py-[10px]">
                            <div class="news-block flex items-center">
                                <a href="<?=$v['tenkhongdau'.$lang]?>" class="w-[70px] mr-[10px]">
                                    <img src="<?=THUMBS?>/120x120x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>">
                                </a>
                                <h5 class="flex-1 !mb-0"><a class="decoration-0 text-[14px] font-bold text-[#000000]/[0.8]" href="<?=$v['tenkhongdau'.$lang]?>"><?=$v['ten'.$lang]?></a></h5>
                            </div>
                        </li>
                        <?php }?>
                    </ul>
                </div>
                <?php }?>
                <?php if(!empty($news)){?>
                <div class="block-sided last:!mb-0 mb-[40px]">
                    <h4>Bài viết liên quan</h4>
                    <ul>
                        <?php foreach ($newsnb as $k => $v) {?>
                        <li class="py-[10px]">
                            <div class="news-block flex items-center">
                                <a href="<?=$v['tenkhongdau'.$lang]?>" class="w-[70px] mr-[10px]">
                                    <img src="<?=THUMBS?>/120x120x1/<?=UPLOAD_NEWS_L.$v['photo']?>" alt="<?=$v['ten'.$lang]?>">
                                </a>
                                <h5 class="flex-1 !mb-0"><a class="decoration-0 text-[14px] font-bold text-[#000000]/[0.8]" href="<?=$v['tenkhongdau'.$lang]?>"><?=$v['ten'.$lang]?></a></h5>
                            </div>
                        </li>
                        <?php }?>
                    </ul>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>