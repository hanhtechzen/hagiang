<?php
	function get_main_list()
    {
        global $d, $type;

        $row = $d->rawQuery("select tenvi, id from #_product_list where type = ? order by stt,id desc",array($type));

        $str = '<select id="id_list" name="id_list" onchange="onchangeList()" class="select2-basic-single js-states form-control" id="select-list"><option value="0">Chọn danh mục 1</option>';
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

    function get_main_cat()
    {
        global $d, $type;

        $id_list = isset($_REQUEST['id_list']) ? $_REQUEST['id_list']:'';
        $row = $d->rawQuery("select tenvi, id from #_product_cat where id_list = ? and type = ? order by stt,id desc",array($id_list,$type));

        $str = '<select id="id_cat" name="id_cat" onchange="onchangeCat()" class="select2-basic-single js-states form-control" id="select-cat"><option value="0">Chọn danh mục 2</option>';
        foreach($row as $v)
        {
            $id_cat = isset($_REQUEST['id_cat']) ? $_REQUEST['id_cat']:'';
            if($v["id"] == (int)$id_cat) $selected = "selected";
            else $selected = "";

            $str .= '<option value='.$v["id"].' '.$selected.'>'.$v["tenvi"].'</option>';
        }
        $str .= '</select>';

        return $str;
    }

	$linkMan = $linkFilter = "index.php?com=product&act=man_item&type=".$type."&p=".$curPage;
	$linkAdd = "index.php?com=product&act=add_item&type=".$type."&p=".$curPage;
    $linkEdit = "index.php?com=product&act=edit_item&type=".$type."&p=".$curPage;
    $linkDelete = "index.php?com=product&act=delete_item&type=".$type."&p=".$curPage;
?>


<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                        <h5 class="mb-0 text-capitalize"><?=$config['product'][$type]['title_main_item']?></h5>
                        <div class="d-flex header-top-page justify-content-end align-items-center rounded flex-wrap gap-3">
                            <div class="form-group mb-0 header-top-page-search w-auto">
                                <div class="input-group form-group-category"><?=get_main_list()?></div>
                            </div>
                             <div class="form-group mb-0 header-top-page-search w-auto">
                                <div class="input-group form-group-category"><?=get_main_cat()?></div>
                            </div>
                            <?php include TEMPLATE.LAYOUT."topaction.php"; ?>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 ">
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
                                    <?php if(!empty($config['product'][$type]['show_images_item']) && $config['product'][$type]['show_images_item']==true) { ?>
                                        <th class="align-middle">Hình</th>
                                    <?php } ?>
                                    <th scope="col" style="width:70%;min-width: 200px">Tiêu đề</th>
                                    <?php if(!empty($config['product'][$type]['check_item'])){ foreach($config['product'][$type]['check_item'] as $key => $value) { ?>
                                        <th scope="col" class="align-middle text-center"><?=$value?></th>
                                    <?php } } ?>
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
                                            <input type="number" class="form-control form-control-mini m-auto update-stt" min="0" value="<?=$items[$i]['stt']?>" data-id="<?=$items[$i]['id']?>" data-table="product_item">
                                        </td>
                                        <?php if(!empty($config['product'][$type]['show_images_item']) && $config['product'][$type]['show_images_item']==true) { ?>
                                            <td class="align-middle">
                                                <a href="<?=$linkEdit?>&id=<?=$items[$i]['id']?>" title="<?=$items[$i]['tenvi']?>"><img class="rounded img-preview" onerror="src='<?=THUMBS?>/64x64x1/assets/images/noimage.png'" src="<?=THUMBS?>/64x64x1/<?=UPLOAD_PRODUCT_L.$items[$i]['photo']?>" alt="<?=$items[$i]['tenvi']?>"></a>
                                            </td>
                                        <?php } ?>
                                        <td class="align-middle" >
                                            <h5 class="mb-0 text-default font-weight-normal"><a class="text-dark" href="<?=$linkEdit?>&id=<?=$items[$i]['id']?>" title="<?=$items[$i]['tenvi']?>"><?=$items[$i]['tenvi']?></a></h5>
                                            <?php if(!empty($items[$i]['motavi'])){?> <p class="text-split-2 mt-2 d-none d-sm-inline-block"><?=$items[$i]['motavi']?></p><?php }?>
                                        </td>
                                        <?php if(!empty($config['product'][$type]['check_item'])){ foreach($config['product'][$type]['check_item'] as $key => $value) { ?>
                                            <td class="align-middle text-center">
                                                <div class="custom-control custom-checkbox my-checkbox form-switch">
                                                    <input type="checkbox" class="form-check-input show-checkbox" id="show-checkbox-<?=$key?>-<?=$items[$i]['id']?>" data-table="product_item" data-id="<?=$items[$i]['id']?>" data-loai="<?=$key?>" <?=($items[$i][$key]==true)?'checked':''?>>
                                                    <label for="show-checkbox-<?=$key?>-<?=$items[$i]['id']?>" class="custom-control-label"></label>
                                                </div>
                                            </td>
                                        <?php } } ?>
                                        <td class="align-middle text-center">
                                            <div class="custom-control custom-checkbox my-checkbox form-switch">
                                                <input type="checkbox" class="form-check-input show-checkbox" id="show-checkbox-<?=$items[$i]['id']?>" data-table="product_item" data-id="<?=$items[$i]['id']?>" data-loai="hienthi" <?=($items[$i]['hienthi'])?'checked':''?>>
                                                <label for="show-checkbox-<?=$items[$i]['id']?>" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-md text-nowrap">
                                            <?php include TEMPLATE.LAYOUT."action.php"; ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <?php } ?>
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
<script type="text/javascript">
    var linkFilter='<?=$linkFilter?>';
</script>