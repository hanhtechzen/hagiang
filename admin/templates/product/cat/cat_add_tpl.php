<?php
	function get_main_list()
    {
        global $d, $type;

        $row = $d->rawQuery("select tenvi, id from #_product_list where type = ? order by stt,id desc",array($type));

        $str = '<select id="id_list" name="data[id_list]" class="select2-basic-single js-states form-control" id="select-list"><option value="0">Chọn danh mục cấp 1</option>';
        foreach($row as $v)
        {
            $id_list = isset($_REQUEST['id_list']) ? $_REQUEST['id_list']:'';
            if($v["id"] == (int)$id_list) $selected = "selected";
            else $selected = "";
            
            $str .= '<option value='.$v["id"].' '.$selected.'>'.$v["tenvi"].'</option>';
        }
        $str .= '</select>';

        return $str;
    }
?>
<?php
    $linkMan = "index.php?com=product&act=man_cat&type=".$type."&p=".$curPage;
    $linkSave = "index.php?com=product&act=save_cat&type=".$type."&p=".$curPage;

    /* Check cols */
    foreach($config['product'][$type]['gallery_cat'] as $key => $value)
    {
        if($key==$type)
        {
            $flagGallery=true;
            break;
        }
    }

    if((!empty($config['product'][$type]['images_cat']) && $config['product'][$type]['images_cat']==true) || $flagGallery || (!empty($config['product'][$type]['dropdown']) or $config['product'][$type]['dropdown']==true))
    {
        $colLeft = "col-xl-8 col-xxl-9";
        $colRight = "col-xl-4 col-xxl-3";
    }
    else
    {
        $colLeft = "col-12";
        $colRight = "d-none";
    }
?>
<div class="content-inner container-fluid pb-0" id="page_layout">
    <form class="validation-form" novalidate method="post" action="<?=$linkSave?>" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card mb-0">
                    <div class="card-header">
                        <div class="d-flex justify-start align-items-center flex-wrap gap-3">
                            <?php include TEMPLATE.LAYOUT."actionsave.php"; ?>
                        </div>
                    </div>
                    <div class="card-body pt-0"></div>
                </div>
            </div>
            <div class="<?=$colLeft?>">
                <?php if(!empty($config['product'][$type]['slug_cat']) && $config['product'][$type]['slug_cat']==true)
                {
                    $slugchange = ($act=='edit_cat') ? 1 : 0;
                    include TEMPLATE.LAYOUT."slug.php";
                }
                ?>
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Nội dung <?=$config['product'][$type]['title_main_cat']?></h5>
                    </div>
                    <div class="card-body">
                        <div class="row items-center">
                            <div class="form-group col-md-6">
                                <label for="hienthi" class="d-inline-block form-check-label align-middle mb-0 mr-2">Hiển thị:</label>
                                <div class="custom-control custom-checkbox d-inline-block align-middle form-switch">
                                    <input type="checkbox" class="custom-control-input form-check-input hienthi-checkbox" name="data[hienthi]" id="hienthi-checkbox" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked':''?>>
                                    <label for="hienthi-checkbox" class="custom-control-label"></label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="stt" class="d-inline-block form-check-label align-middle mb-0 mr-2">Số thứ tự:</label>
                                <input type="number" class="form-control form-control-mini d-inline-block align-middle" min="0" name="data[stt]" id="stt" placeholder="Số thứ tự" value="<?=isset($item['stt'])?$item['stt']:1?>">
                            </div>
                        </div>

                        <div class="bd-example">
                            <div class="card mb-0 card-article">
                                <div class="card-header p-0">
                                    <nav class="tab-bottom-bordered">
                                        <div class="mb-0 nav nav-tabs" id="nav-tab1" role="tablist">
                                            <?php foreach($config['website']['lang'] as $k => $v) { ?>
                                            <button class="nav-link <?=($k=='vi')?'active':''?>" id="tabs-lang" data-bs-toggle="tab" data-bs-target="#tabs-lang-<?=$k?>" type="button" role="tab" aria-controls="tabs-lang-<?=$k?>" aria-selected="true"><?=$v?></button>
                                            <?php }?>
                                        </div>
                                    </nav>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content iq-tab-fade-up" id="nav-tabContent">
                                        <?php foreach($config['website']['lang'] as $k => $v) { ?>
                                        <div class="tab-pane fade <?=($k=='vi')?'active show':''?>" id="tabs-lang-<?=$k?>" role="tabpanel" aria-labelledby="tabs-lang-<?=$k?>-tab">
                                                <div class="form-group last:mb-0">
                                                    <label class="form-label" for="ten<?=$k?>">Tiêu đề (<?=$k?>):</label>
                                                    <input type="text" class="form-control for-seo" name="data[ten<?=$k?>]" id="ten<?=$k?>" placeholder="Tiêu đề (<?=$k?>)" value="<?=(!empty($item['ten'.$k])) ? $item['ten'.$k]:''?>" <?=($k=='vi')?'required':''?>>
                                                </div>
                                            <?php if(isset($config['product'][$type]['mota_cat']) && $config['product'][$type]['mota_cat']==true) { ?>
                                                <div class="form-group last:mb-0">
                                                    <label class="form-label" for="mota<?=$k?>">Mô tả (<?=$k?>):</label>
                                                    <textarea class="form-control for-seo <?=($config['product'][$type]['mota_cke_cat'])?'form-control-ckeditor':''?>" name="data[mota<?=$k?>]" id="mota<?=$k?>" rows="5" placeholder="Mô tả (<?=$k?>)"><?=(!empty($item['mota'.$k])) ?htmlspecialchars_decode($item['mota'.$k]):''?></textarea>
                                                </div>
                                            <?php } ?>
                                            <?php if(isset($config['product'][$type]['noidung_cat']) && $config['product'][$type]['noidung_cat']==true) { ?>
                                                <div class="form-group last:mb-0">
                                                    <label class="form-label" for="noidung<?=$k?>">Nội dung (<?=$k?>):</label>
                                                    <textarea class="form-control for-seo <?=($config['product'][$type]['noidung_cat_cke'])?'form-control-ckeditor':''?>" name="data[noidung<?=$k?>]" id="noidung<?=$k?>" rows="5" placeholder="Nội dung (<?=$k?>)"><?=htmlspecialchars_decode(@$item['noidung'.$k])?></textarea>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="<?=$colRight?>">
                <div class="card">
                    <div class="card-header">
                         <h5 class="mb-0">Danh mục <?=$config['product'][$type]['title_main_item']?></h5>
                    </div>
                    <div class="card-body">
                        <div class="form-group form-group-category last:mb-0">
                            <?=get_main_list()?>
                        </div>
                    </div>
                </div>
                <?php if(isset($config['product'][$type]['images_cat']) && $config['product'][$type]['images_cat']==true) { ?>
                    <?php
                        $photoDetail = (!empty($item['photo'])) ? UPLOAD_PRODUCT.$item['photo']:'';
                        $dimension = "Width: ".$config['product'][$type]['width_cat']." px - Height: ".$config['product'][$type]['height_cat']." px (".$config['product'][$type]['img_type_cat'].")";
                    ?>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">Hình đại diện <?=$config['product'][$type]['title_main_cat']?></h5>
                        </div>
                        <div class="card-body">
                            <?php include TEMPLATE.LAYOUT."image.php"; ?>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
        <?php if(!empty($flagGallery)) { ?>
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Hình ảnh đính kèm <span class="text-danger mt-2 mb-2 text-sm">(<?=(!empty($config['product'][$type]['gallery_cat'][$key]['img_type_photo'])) ? $config['product'][$type]['gallery_cat'][$key]['img_type_photo']:''?>)</span></h5>
            </div>
            <div class="card-body">
                <div class="form-group last:mb-0">
                    <input type="file" name="files[]" id="filer-gallery" multiple="multiple">
                    <input type="hidden" class="col-filer" value="col-xl-6 col-sm-12 col-12">
                    <input type="hidden" class="act-filer" value="man_cat">
                </div>
            </div>
        </div>
        <?php }?>
        <?php if(isset($config['product'][$type]['seo_cat']) && $config['product'][$type]['seo_cat']==true) { ?>
            <?php $seoDB = $seo->getSeoDB($id,$com,'man_cat',$type); include TEMPLATE.LAYOUT."seo.php";?>
        <?php }?>
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-start align-items-center flex-wrap gap-3">
                    <?php include TEMPLATE.LAYOUT."actionsave.php"; ?>
                </div>
            </div>
            <div class="card-body pt-0"></div>
        </div>
    </form>
</div>