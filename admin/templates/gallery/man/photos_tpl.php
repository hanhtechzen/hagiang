<?php
    $gallery_config = $config[$com][$type][$dfgallery][$val];
    $linkParent = "index.php?com=".$com."&act=".$kind."&type=".$type."&p=".$curPage;
    $linkMan = "index.php?com=".$com."&act=man_photo&idc=".$idc."&type=".$type."&kind=".$kind."&val=".$val."&p=".$curPage;
    $linkAdd = "index.php?com=".$com."&act=add_photo&idc=".$idc."&type=".$type."&kind=".$kind."&val=".$val."&p=".$curPage;
    $linkEdit = "index.php?com=".$com."&act=edit_photo&idc=".$idc."&type=".$type."&kind=".$kind."&val=".$val."&p=".$curPage;
    $linkDelete = "index.php?com=".$com."&act=delete_photo&idc=".$idc."&type=".$type."&kind=".$kind."&val=".$val."&p=".$curPage;
?>
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                        <h5 class="mb-0 text-capitalize">Danh sách <?=$gallery_config['title_main_photo']?></h5>
                        <div class="d-flex header-top-page justify-content-end align-items-center rounded flex-wrap gap-3">
                            <?php include TEMPLATE.LAYOUT."topaction.php"; ?>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="fancy-table table-left-bordered table-responsive rounded mt-3">
                        <table class="table mb-0 w-100" id="datatable">
                            <thead>
                                <tr class="bg-white">
                                    <th scope="col" class="align-middle text-center" width="50px">
                                        <div class="custom-control custom-checkbox my-checkbox">
                                            <input type="checkbox" class="form-check-input" id="selectall-checkbox">
                                        </div>
                                    </th>
                                    <th scope="col" class="align-middle text-center" width="100px">STT</th>
                                    <?php if(!empty($gallery_config['avatar_photo']) && $gallery_config['avatar_photo']==true) { ?>
                                        <th scope="col" class="align-middle text-center" width="8%">Hình</th>
                                    <?php } ?>
                                    <?php if(!empty($gallery_config['tieude_photo']) && $gallery_config['tieude_photo']==true) { ?>
                                        <th scope="col" class="align-middle" style="width:30%">Tiêu đề</th>
                                    <?php } ?>
                                    <?php if(!empty($gallery_config['mausac_photo']) && $gallery_config['mausac_photo']==true) { ?>
                                        <th scope="col" class="align-middle">Màu sắc</th>
                                    <?php } ?>
                                    <?php if(!empty($gallery_config['cart_photo']) && $gallery_config['cart_photo']==true) { ?>
                                        <th scope="col" class="align-middle">Màu sắc (Giỏ hàng)</th>
                                    <?php } ?>
                                    <?php if(!empty($gallery_config['file_photo']) && $gallery_config['file_photo']==true) { ?>
                                        <th scope="col" class="align-middle">Tập tin</th>
                                    <?php } ?>
                                    <?php if(!empty($gallery_config['link_photo']) && $gallery_config['link_photo']==true) { ?>
                                        <th scope="col" class="align-middle">Link</th>
                                    <?php } ?>
                                    <?php if(!empty($gallery_config['video_photo']) && $gallery_config['video_photo']==true) { ?>
                                        <th scope="col" class="align-middle">Link video</th>
                                    <?php } ?>
                                    <th scope="col" class="align-middle text-center">Hiển thị</th>
                                    <th scope="col" class="align-middle text-center">Thao tác</th>
                                </tr>
                            </thead>
                            <?php if(empty($items)) { ?>
                            <tbody><tr><td colspan="100" class="text-center">Không có dữ liệu</td></tr></tbody>
                            <?php } else { ?>
                            <tbody>
                                <?php for($i=0;$i<count($items);$i++) { ?>
                                <tr>
                                    <td class="align-middle text-center">
                                        <div class="custom-control custom-checkbox my-checkbox">
                                            <input type="checkbox" class="form-check-input select-checkbox" id="select-checkbox-<?=$items[$i]['id']?>" value="<?=$items[$i]['id']?>">
                                        </div>
                                    </td>
                                    
                                    <td class="align-middle">
                                        <input type="number" class="form-control form-control-mini m-auto update-stt" min="0" value="<?=$items[$i]['stt']?>" data-id="<?=$items[$i]['id']?>" data-table="gallery">
                                    </td>
                                    <?php if(!empty($gallery_config['avatar_photo']) && $gallery_config['avatar_photo']==true) { ?>
                                        <td class="">
                                            <a href="<?=$linkEdit?>&id=<?=$items[$i]['id']?>" title="<?=$items[$i]['tenvi']?>"><img class="rounded img-preview" onerror="src='assets/images/noimage.png'" src="<?=THUMBS?>/<?=$gallery_config['thumb_photo']?>/<?="upload/".$com."/".$items[$i]['photo']?>" alt="<?=$items[$i]['tenvi']?>"></a>
                                        </td>
                                    <?php } ?>
                                    <?php if(!empty($gallery_config['tieude_photo']) && $gallery_config['tieude_photo']==true) { ?>
                                        <td class="align-middle">
                                            <h5 class="mb-0 text-default font-weight-normal"><a class="text-dark" href="<?=$linkEdit?>&id=<?=$items[$i]['id']?>" title="<?=$items[$i]['tenvi']?>"><?=$items[$i]['tenvi']?></a></h5>
                                        </td>
                                    <?php } ?>
                                    <?php if(!empty($gallery_config['link_photo']) && $gallery_config['link_photo']==true) { ?>
                                        <td class="align-middle"><?=$items[$i]['link']?></td>
                                    <?php } ?>
                                    <?php if(!empty($gallery_config['video_photo']) && $gallery_config['video_photo']==true) { ?>
                                        <td class="align-middle"><?=$items[$i]['link_video']?></td>
                                    <?php } ?>
                                    <td class="align-middle text-center">
                                        <div class="custom-control custom-checkbox my-checkbox form-switch">
                                            <input type="checkbox" class="form-check-input show-checkbox" id="show-checkbox-<?=$items[$i]['id']?>" data-table="gallery" data-id="<?=$items[$i]['id']?>" data-loai="hienthi" <?=($items[$i]['hienthi'])?'checked':''?>>
                                            <label for="show-checkbox-<?=$items[$i]['id']?>" class="custom-control-label"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-md text-nowrap">
                                        <?php include TEMPLATE.LAYOUT."action.php"; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                            <?php }?>
                        </table>
                    </div>
                    <div class="row pe-4 ps-4 pt-4 d-flex align-items-center justify-content-center justify-content-md-between">
                        <?php include TEMPLATE.LAYOUT."tempbottom.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
