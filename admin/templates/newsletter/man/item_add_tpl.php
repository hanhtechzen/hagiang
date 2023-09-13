<?php
    $linkMan = "index.php?com=newsletter&act=man&type=".$type."&p=".$curPage;
    $linkSave = "index.php?com=newsletter&act=save&type=".$type."&p=".$curPage;
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Chi tiết <?=$config['newsletter'][$type]['title_main']?></h5>
                    </div>
                        <div class="card-body">
                            <?php if(isset($config['newsletter'][$type]['file']) && $config['newsletter'][$type]['file']==true) { ?>
                                <div class="form-group">
                                    <label class="change-file form-label mb-1 mr-2" for="file-taptin">
                                        <p> <b class="text-gray-800">Chọn tập tin:</b> <span class="text-danger mt-2 mb-2 text-sm"><?php echo $config['newsletter'][$type]['file_type']; ?></span></p>
                                        <div class="custom-file my-custom-file ">
                                            <input type="file" class="form-control" name="file-taptin" id="file-taptin">
                                        </div>
                                     </label>
                                    <?php if(!empty($item['taptin']) && $item['taptin']==true) { ?>
                                        <a class="btn btn-sm bg-primary text-white d-inline-block align-middle p-2 rounded mb-1" href="<?=UPLOAD_FILE.$item['taptin']?>" title="Download tập tin hiện tại"><i class="fas fa-download mr-2"></i>Download tập tin hiện tại</a>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <div class="form-group-category row">
                                <?php if(isset($config['newsletter'][$type]['ten']) && $config['newsletter'][$type]['ten']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="ten" class="form-label">Họ tên:</label>
                                        <input type="text" class="form-control" name="data[ten]" id="ten" placeholder="Họ tên" value="<?=@$item['ten']?>">
                                    </div>
                                <?php } ?>
                                <?php if(isset($config['newsletter'][$type]['dienthoai']) && $config['newsletter'][$type]['dienthoai']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="dienthoai" class="form-label">Điện thoại:</label>
                                        <input type="text" class="form-control" name="data[dienthoai]" id="dienthoai" placeholder="Điện thoại" value="<?=@$item['dienthoai']?>">
                                    </div>
                                <?php } ?>
                                <?php if(isset($config['newsletter'][$type]['email']) && $config['newsletter'][$type]['email']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="email" class="form-label">Email:</label>
                                        <input type="email" class="form-control" name="data[email]" id="email" placeholder="Email" value="<?=@$item['email']?>">
                                    </div>
                                <?php } ?>
                                <?php if(isset($config['newsletter'][$type]['diachi']) && $config['newsletter'][$type]['diachi']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="diachi" class="form-label">Địa chỉ:</label>
                                        <input type="text" class="form-control" name="data[diachi]" id="diachi" placeholder="Địa chỉ" value="<?=@$item['diachi']?>">
                                    </div>
                                <?php } ?>
                                 <?php if(isset($config['newsletter'][$type]['diemdi']) && $config['newsletter'][$type]['diemdi']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="diemdi" class="form-label">Điểm đi:</label>
                                        <input type="text" class="form-control" name="data[diemdi]" id="diemdi" placeholder="Điểm đi" value="<?=@$item['diemdi']?>">
                                    </div>
                                <?php } ?>
                                <?php if(isset($config['newsletter'][$type]['diemden']) && $config['newsletter'][$type]['diemden']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="diemden" class="form-label">Điểm đến:</label>
                                        <input type="text" class="form-control" name="data[diemden]" id="diemden" placeholder="Điểm đến" value="<?=@$item['diemden']?>">
                                    </div>
                                <?php } ?>
                                <?php if(isset($config['newsletter'][$type]['ngaysudung']) && $config['newsletter'][$type]['ngaysudung']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="ngaysudung" class="form-label">Ngày đặt:</label>
                                        <input type="text" class="form-control" name="data[ngaysudung]" id="ngaysudung" placeholder="Ngày đặt" value="<?=@$item['ngaysudung']?>">
                                    </div>
                                <?php } ?>
                                <?php if(isset($config['newsletter'][$type]['name_tour']) && $config['newsletter'][$type]['name_tour']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="name_tour" class="form-label">Tên tour:</label>
                                        <input type="text" class="form-control" name="data[name_tour]" id="name_tour" placeholder="Tên tour" value="<?=@$item['name_tour']?>">
                                    </div>
                                <?php } ?>
                                <?php if(isset($config['newsletter'][$type]['chude_tour']) && $config['newsletter'][$type]['chude_tour']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="chude_tour" class="form-label">Chủ đề tour:</label>
                                        <input type="text" class="form-control" name="data[chude_tour]" id="chude_tour" placeholder="Chủ đề tour" value="<?=@$item['chude_tour']?>">
                                    </div>
                                <?php } ?>
                                <?php if(isset($config['newsletter'][$type]['name_khachsan']) && $config['newsletter'][$type]['name_khachsan']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="name_khachsan" class="form-label">Khách sạn:</label>
                                        <input type="text" class="form-control" name="data[name_khachsan]" id="name_khachsan" placeholder="Khách sạn" value="<?=@$item['name_khachsan']?>">
                                    </div>
                                <?php } ?>
                                <?php if(isset($config['newsletter'][$type]['hangphong']) && $config['newsletter'][$type]['hangphong']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="hangphong" class="form-label">Hạng phòng:</label>
                                        <input type="text" class="form-control" name="data[hangphong]" id="hangphong" placeholder="Hạng phòng" value="<?=@$item['hangphong']?>">
                                    </div>
                                <?php } ?>
                                <?php if(isset($config['newsletter'][$type]['name_nhahang']) && $config['newsletter'][$type]['name_nhahang']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="name_nhahang" class="form-label">Nhà hàng:</label>
                                        <input type="text" class="form-control" name="data[name_nhahang]" id="name_nhahang" placeholder="Nhà hàng" value="<?=@$item['name_nhahang']?>">
                                    </div>
                                <?php } ?>
                                <?php if(isset($config['newsletter'][$type]['songuoi']) && $config['newsletter'][$type]['songuoi']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="songuoi" class="form-label">Số người:</label>
                                        <input type="text" class="form-control" name="data[songuoi]" id="songuoi" placeholder="Số người" value="<?=@$item['songuoi']?>">
                                    </div>
                                <?php } ?>
                                <?php if(isset($config['newsletter'][$type]['nguoilon']) && $config['newsletter'][$type]['nguoilon']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="nguoilon" class="form-label">Số người lớn > 12 tuổi:</label>
                                        <input type="text" class="form-control" name="data[nguoilon]" id="nguoilon" placeholder="Số người lớn > 12 tuổi" value="<?=@$item['nguoilon']?>">
                                    </div>
                                <?php } ?>
                                <?php if(isset($config['newsletter'][$type]['treem']) && $config['newsletter'][$type]['treem']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="treem" class="form-label">Số trẻ em (từ 5 - 11 tuổi):</label>
                                        <input type="text" class="form-control" name="data[treem]" id="treem" placeholder="Số trẻ em (từ 5 - 11 tuổi)" value="<?=@$item['treem']?>">
                                    </div>
                                <?php } ?>
                                <?php if(isset($config['newsletter'][$type]['treem2']) && $config['newsletter'][$type]['treem2']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="treem2" class="form-label">Số trẻ em miễn vé < 5 tuổi:</label>
                                        <input type="text" class="form-control" name="data[treem2]" id="treem2" placeholder="Số trẻ em miễn vé < 5 tuổi" value="<?=@$item['treem2']?>">
                                    </div>
                                <?php } ?>

                                <?php if(isset($config['newsletter'][$type]['time_dukien']) && $config['newsletter'][$type]['time_dukien']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="time_dukien" class="form-label">Thời gian dự kiến đi:</label>
                                        <input type="text" class="form-control" name="data[time_dukien]" id="time_dukien" placeholder="Thời gian dự kiến đi" value="<?=@$item['time_dukien']?>">
                                    </div>
                                <?php } ?>

                                <?php if(isset($config['newsletter'][$type]['time_uoctinh']) && $config['newsletter'][$type]['time_uoctinh']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="time_uoctinh" class="form-label">Thời gian dự kiến về:</label>
                                        <input type="text" class="form-control" name="data[time_uoctinh]" id="time_uoctinh" placeholder="Thời gian dự kiến về" value="<?=@$item['time_uoctinh']?>">
                                    </div>
                                <?php } ?>

                                <?php if(isset($config['newsletter'][$type]['chude']) && $config['newsletter'][$type]['chude']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="chude" class="form-label">Chủ đề:</label>
                                        <input type="text" class="form-control" name="data[chude]" id="chude" placeholder="Chủ đề" value="<?=@$item['chude']?>">
                                    </div>
                                <?php } ?>
                                <?php if(isset($config['newsletter'][$type]['tinhtrang']) && $config['newsletter'][$type]['tinhtrang']==true) { ?>
                                    <div class="form-group col-md-4">
                                        <label for="tinhtrang" class="form-label">Tình trạng:</label>
                                        <select id="tinhtrang" name="data[tinhtrang]" class="select2-basic-single js-states form-control" id="select-tinhtrang">
                                            <option value="0">Cập nhật tình trạng</option>
                                            <?php foreach ($config['newsletter'][$type]['tinhtrang'] as $key => $value) { ?>
                                                <option <?=(@$item['tinhtrang']==$key)?"selected":""?> value="<?=$key?>"><?=$value?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                <?php } ?>
                            </div>
                            <?php if(isset($config['newsletter'][$type]['noidung']) && $config['newsletter'][$type]['noidung']==true) { ?>
                                <div class="form-group">
                                    <label for="noidung" class="form-label">Nội dung:</label>
                                    <textarea class="form-control" name="data[noidung]" id="noidung" rows="5" placeholder="Nội dung"><?=@$item['noidung']?></textarea>
                                </div>
                            <?php } ?>
                            <?php if(isset($config['newsletter'][$type]['ghichu']) && $config['newsletter'][$type]['ghichu']==true) { ?>
                                <div class="form-group">
                                    <label for="ghichu" class="form-label">Ghi chú:</label>
                                    <textarea class="form-control" name="data[ghichu]" id="ghichu" rows="5" placeholder="Ghi chú"><?=@$item['ghichu']?></textarea>
                                </div>
                            <?php } ?>
                            <div class="form-group">
                                <label for="stt" class="d-inline-block align-middle form-label mb-0 mr-2">Số thứ tự:</label>
                                <input type="number" class="form-control form-control-mini d-inline-block align-middle" min="0" name="data[stt]" id="stt" placeholder="Số thứ tự" value="<?=isset($item['stt'])?$item['stt']:1?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
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
