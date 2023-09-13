<?php
    
    $nametype = "tour-du-lich";
    $config['product'][$nametype]['title_main'] = "Tour du lịch";
    $config['product'][$nametype]['dropdown'] = true;
    $config['product'][$nametype]['list'] = true;
    $config['product'][$nametype]['cat'] = false;
    $config['product'][$nametype]['item'] = false;
    $config['product'][$nametype]['sub'] = false;
    $config['product'][$nametype]['brand'] = false;
    $config['product'][$nametype]['mau'] = false;
    $config['product'][$nametype]['size'] = false;
    $config['product'][$nametype]['tags'] = false;
    $config['product'][$nametype]['import'] = false;
    $config['product'][$nametype]['export'] = false;
    $config['product'][$nametype]['view'] = true;
    $config['product'][$nametype]['copy'] = true;
    $config['product'][$nametype]['copy_image'] = false;
    $config['product'][$nametype]['slug'] = true;
    $config['product'][$nametype]['check'] = array("noibat" => "Nổi bật");
    $config['product'][$nametype]['images'] = true;
    $config['product'][$nametype]['show_images'] = true;
    $config['product'][$nametype]['show_gallery'] = true;
    $config['product'][$nametype]['gallery'] = array(
        // $nametype => array
        // (
        //     "title_main_photo" => "Hình ảnh sản phẩm",
        //     "title_sub_photo" => "Hình ảnh",
        //     "number_photo" => 3,
        //     "images_photo" => true,
        //     "cart_photo" => false,
        //     "avatar_photo" => true,
        //     "tieude_photo" => true,
        //     "width_photo" => 612,
        //     "height_photo" => 460,
        //     "thumb_photo" => '612x460x1',
        //     "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF'
        // )
        'lichtrinh' => array(
            "title_main_photo" => "Lịch trình tour",
            "title_sub_photo" => "Lịch trình",
            "number_photo" => 3,
            "images_photo" => false,
            "cart_photo" => false,
            "avatar_photo" => false,
            "tieude_photo" => true,
            "mota_photo" => true,
            "mota_cke_photo" => true,
            "width_photo" => 612,
            "height_photo" => 460,
            "thumb_photo" => '612x460x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF'
        )
    );
    $config['product'][$nametype]['link'] = false;
    $config['product'][$nametype]['file'] = false;
    $config['product'][$nametype]['ma'] = true;
    $config['product'][$nametype]['tinhtrang'] = false;
    $config['product'][$nametype]['video'] = false;
    $config['product'][$nametype]['lichtrinh'] = true;
    $config['product'][$nametype]['khoihanh'] = true;
    $config['product'][$nametype]['gia'] = true;
    $config['product'][$nametype]['giamoi'] = false;
    $config['product'][$nametype]['giakm'] = false;
    $config['product'][$nametype]['mota'] = true;
    $config['product'][$nametype]['mota_cke'] = false;
    $config['product'][$nametype]['noidung'] = true;
    $config['product'][$nametype]['noidung_cke'] = true;
    $config['product'][$nametype]['seo'] = true;
    $config['product'][$nametype]['width'] = 612;
    $config['product'][$nametype]['height'] = 460;
    $config['product'][$nametype]['thumb'] = '612x460x1';
    $config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
    $config['product'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



    $config['product'][$nametype]['title_main_list'] = "Danh mục tour";
    $config['product'][$nametype]['images_list'] = true;
    $config['product'][$nametype]['icon_list'] = true;
    $config['product'][$nametype]['tieude_list'] = true;
    $config['product'][$nametype]['show_images_list'] = true;
    $config['product'][$nametype]['slug_list'] = true;
    $config['product'][$nametype]['check_list'] = array();
    $config['product'][$nametype]['gallery_list'] = array(
        $nametype => array
        (
            "title_main_photo" => "Hình ảnh mô tả",
            "title_sub_photo" => "Hình ảnh",
            "number_photo" => 5,
            "images_photo" => true,
            "file_photo" => false,
            "avatar_photo" => true,
            "mausac_photo" => false,
            "video_photo" => false,
            "link_photo" => false,
            "mota_photo" => false,
            "mota_cke_photo" => false,
            "tieude_photo" => false,
            "noidung_photo" => false,
            "noidung_cke_photo" => false,
            "width_photo" => 340,
            "height_photo" => 225,
            "thumb_photo" => '340x225x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF',
            "file_type_photo" => 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS'
        ),
        'khoanh-khac' =>array(
            "title_main_photo" => "Khoảnh khác",
            "title_sub_photo" => "Hình ảnh khoảnh khắc",
            "number_photo" => 5,
            "images_photo" => true,
            "file_photo" => false,
            "avatar_photo" => true,
            "mausac_photo" => false,
            "video_photo" => false,
            "link_photo" => false,
            "mota_photo" => false,
            "mota_cke_photo" => false,
            "tieude_photo" => false,
            "noidung_photo" => false,
            "noidung_cke_photo" => false,
            "width_photo" => 588,
            "height_photo" => 440,
            "thumb_photo" => '588x440x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF',
            "file_type_photo" => 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS'
        )
    );
    $config['product'][$nametype]['mota_list'] = true;
    $config['product'][$nametype]['seo_list'] = true;
    $config['product'][$nametype]['width_icon_list'] = 32;
    $config['product'][$nametype]['height_icon_list'] = 32;
    $config['product'][$nametype]['width_list'] = 75*4;
    $config['product'][$nametype]['height_list'] = 50*4;
    $config['product'][$nametype]['thumb_list'] = '100x100x1';
    $config['product'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.svg|.SVG';




    $nametype = "nha-hang";
    $config['product'][$nametype]['title_main'] = "Danh sách món ăn";
    $config['product'][$nametype]['dropdown'] = true;
    $config['product'][$nametype]['list'] = true;
    $config['product'][$nametype]['cat'] = false;
    $config['product'][$nametype]['item'] = false;
    $config['product'][$nametype]['sub'] = false;
    $config['product'][$nametype]['brand'] = true;
    $config['product'][$nametype]['mau'] = false;
    $config['product'][$nametype]['size'] = false;
    $config['product'][$nametype]['tags'] = false;
    $config['product'][$nametype]['import'] = false;
    $config['product'][$nametype]['export'] = false;
    $config['product'][$nametype]['view'] = false;
    $config['product'][$nametype]['copy'] = false;
    $config['product'][$nametype]['copy_image'] = false;
    $config['product'][$nametype]['slug'] = false;
    $config['product'][$nametype]['check'] = array('banchay'=>'Món bán chạy');
    $config['product'][$nametype]['images'] = true;
    $config['product'][$nametype]['show_images'] = true;
    $config['product'][$nametype]['show_gallery'] = true;
    $config['product'][$nametype]['gallery'] = array();
    $config['product'][$nametype]['link'] = false;
    $config['product'][$nametype]['file'] = false;
    $config['product'][$nametype]['ma'] = false;
    $config['product'][$nametype]['tinhtrang'] = false;
    $config['product'][$nametype]['video'] = false;
    $config['product'][$nametype]['lichtrinh'] = false;
    $config['product'][$nametype]['khoihanh'] = false;
    $config['product'][$nametype]['gia'] = true;
    $config['product'][$nametype]['giamoi'] = false;
    $config['product'][$nametype]['giakm'] = false;
    $config['product'][$nametype]['mota'] = false;
    $config['product'][$nametype]['mota_cke'] = false;
    $config['product'][$nametype]['noidung'] = false;
    $config['product'][$nametype]['noidung_cke'] = false;
    $config['product'][$nametype]['seo'] = false;
    $config['product'][$nametype]['width'] = 340;
    $config['product'][$nametype]['height'] = 255;
    $config['product'][$nametype]['thumb'] = '340x255x1';
    $config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
    $config['product'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



    $config['product'][$nametype]['title_main_list'] = "Danh mục nhà hàng";
    $config['product'][$nametype]['images_list'] = true;
    $config['product'][$nametype]['icon_list'] = false;
    $config['product'][$nametype]['tieude_list'] = false;
    $config['product'][$nametype]['show_images_list'] = true;
    $config['product'][$nametype]['slug_list'] = true;
    $config['product'][$nametype]['check_list'] = array();
    $config['product'][$nametype]['gallery_list'] = array(
        $nametype => array
        (
            "title_main_photo" => "Hình ảnh nhà hàng",
            "title_sub_photo" => "Hình ảnh",
            "number_photo" => 5,
            "images_photo" => true,
            "file_photo" => false,
            "avatar_photo" => true,
            "mausac_photo" => false,
            "video_photo" => false,
            "link_photo" => false,
            "mota_photo" => false,
            "mota_cke_photo" => false,
            "tieude_photo" => false,
            "noidung_photo" => false,
            "noidung_cke_photo" => false,
            "width_photo" => 612,
            "height_photo" => 460,
            "thumb_photo" => '612x460x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF',
            "file_type_photo" => 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS'
        )
    );
    $config['product'][$nametype]['mota_list'] = true;
    $config['product'][$nametype]['noidung_list'] = true;
    $config['product'][$nametype]['noidung_list_cke'] = true;
    $config['product'][$nametype]['seo_list'] = true;
    $config['product'][$nametype]['width_icon_list'] = 32;
    $config['product'][$nametype]['height_icon_list'] = 32;
    $config['product'][$nametype]['width_list'] = 612;
    $config['product'][$nametype]['height_list'] = 460;
    $config['product'][$nametype]['thumb_list'] = '612x460x1';
    $config['product'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.svg|.SVG';
    
    $config['product'][$nametype]['title_main_brand'] = "Danh sách thực đơn";
    $config['product'][$nametype]['images_brand'] = false;
    $config['product'][$nametype]['show_images_brand'] = false;
    $config['product'][$nametype]['slug_brand'] = false;
    $config['product'][$nametype]['check_brand'] = array();
    $config['product'][$nametype]['seo_brand'] = false;
    $config['product'][$nametype]['width_brand'] = 67*2;
    $config['product'][$nametype]['height_brand'] = 24*2;
    $config['product'][$nametype]['thumb_brand'] = '134x48x1';
    $config['product'][$nametype]['img_type_brand'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';




    $nametype = "khach-san";
    $config['product'][$nametype]['title_main'] = "Danh sách phòng";
    $config['product'][$nametype]['dropdown'] = true;
    $config['product'][$nametype]['list'] = true;
    $config['product'][$nametype]['cat'] = false;
    $config['product'][$nametype]['item'] = false;
    $config['product'][$nametype]['sub'] = false;
    $config['product'][$nametype]['brand'] = true;
    $config['product'][$nametype]['tienich'] = true;
    $config['product'][$nametype]['mau'] = false;
    $config['product'][$nametype]['size'] = false;
    $config['product'][$nametype]['tags'] = false;
    $config['product'][$nametype]['import'] = false;
    $config['product'][$nametype]['export'] = false;
    $config['product'][$nametype]['view'] = false;
    $config['product'][$nametype]['copy'] = false;
    $config['product'][$nametype]['copy_image'] = false;
    $config['product'][$nametype]['slug'] = false;
    $config['product'][$nametype]['check'] = array();
    $config['product'][$nametype]['images'] = true;
    $config['product'][$nametype]['show_images'] = true;
    $config['product'][$nametype]['show_gallery'] = true;
    $config['product'][$nametype]['gallery'] = array(
        $nametype => array
        (
            "title_main_photo" => "Hình ảnh phòng",
            "title_sub_photo" => "Hình ảnh",
            "number_photo" => 3,
            "images_photo" => true,
            "cart_photo" => false,
            "avatar_photo" => true,
            "tieude_photo" => true,
            "width_photo" => 612,
            "height_photo" => 460,
            "thumb_photo" => '612x460x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF'
        )
    );
    $config['product'][$nametype]['link'] = false;
    $config['product'][$nametype]['file'] = false;
    $config['product'][$nametype]['ma'] = false;
    $config['product'][$nametype]['tinhtrang'] = false;
    $config['product'][$nametype]['video'] = false;
    $config['product'][$nametype]['lichtrinh'] = false;
    $config['product'][$nametype]['khoihanh'] = false;
    $config['product'][$nametype]['gia'] = false;
    $config['product'][$nametype]['dientich'] = true;
    $config['product'][$nametype]['loaigiuong'] = true;
    $config['product'][$nametype]['huongphong'] = true;
    $config['product'][$nametype]['soluongnguoi'] = true;
    $config['product'][$nametype]['giamoi'] = false;
    $config['product'][$nametype]['giakm'] = false;
    $config['product'][$nametype]['mota'] = false;
    $config['product'][$nametype]['mota_cke'] = false;
    $config['product'][$nametype]['noidung'] = false;
    $config['product'][$nametype]['noidung_cke'] = false;
    $config['product'][$nametype]['seo'] = false;
    $config['product'][$nametype]['width'] = 612;
    $config['product'][$nametype]['height'] = 460;
    $config['product'][$nametype]['thumb'] = '612x460x1';
    $config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
    $config['product'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



    $config['product'][$nametype]['title_main_list'] = "Danh mục khách sạn";
    $config['product'][$nametype]['images_list'] = true;
    $config['product'][$nametype]['icon_list'] = false;
    $config['product'][$nametype]['tieude_list'] = false;
    $config['product'][$nametype]['show_images_list'] = true;
    $config['product'][$nametype]['slug_list'] = true;
    $config['product'][$nametype]['check_list'] = array('noibat'=>'Nổi bật');
    $config['product'][$nametype]['gallery_list'] = array(
        $nametype => array
        (
            "title_main_photo" => "Hình ảnh khách sạn",
            "title_sub_photo" => "Hình ảnh",
            "number_photo" => 5,
            "images_photo" => true,
            "file_photo" => false,
            "avatar_photo" => true,
            "mausac_photo" => false,
            "video_photo" => false,
            "link_photo" => false,
            "mota_photo" => false,
            "mota_cke_photo" => false,
            "tieude_photo" => false,
            "noidung_photo" => false,
            "noidung_cke_photo" => false,
            "width_photo" => 612,
            "height_photo" => 460,
            "thumb_photo" => '612x460x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF',
            "file_type_photo" => 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS'
        )
    );
    $config['product'][$nametype]['masp_list'] = true;
    $config['product'][$nametype]['thoigian_list'] = true;
    $config['product'][$nametype]['gia_list'] = true;
    $config['product'][$nametype]['mota_list'] = true;
    $config['product'][$nametype]['noidung_list'] = true;
    $config['product'][$nametype]['noidung_list_cke'] = true;
    $config['product'][$nametype]['seo_list'] = true;
    $config['product'][$nametype]['width_icon_list'] = 32;
    $config['product'][$nametype]['height_icon_list'] = 32;
    $config['product'][$nametype]['width_list'] = 612;
    $config['product'][$nametype]['height_list'] = 460;
    $config['product'][$nametype]['thumb_list'] = '612x460x1';
    $config['product'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.svg|.SVG';



    $config['product'][$nametype]['title_main_brand'] = "Danh sách tiện ích";
    $config['product'][$nametype]['images_brand'] = false;
    $config['product'][$nametype]['show_images_brand'] = false;
    $config['product'][$nametype]['slug_brand'] = false;
    $config['product'][$nametype]['check_brand'] = array();
    $config['product'][$nametype]['seo_brand'] = false;
    $config['product'][$nametype]['width_brand'] = 67*2;
    $config['product'][$nametype]['height_brand'] = 24*2;
    $config['product'][$nametype]['thumb_brand'] = '134x48x1';
    $config['product'][$nametype]['img_type_brand'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Đăng ký nhận tin */
    $nametype = "dangkytuvan";
    $config['newsletter'][$nametype]['title_main'] = "Đăng ký tư vấn";
    $config['newsletter'][$nametype]['email'] = true;
    $config['newsletter'][$nametype]['guiemail'] = false;
    $config['newsletter'][$nametype]['ten'] = true;
    $config['newsletter'][$nametype]['dienthoai'] = false;
    $config['newsletter'][$nametype]['diachi'] = false;
    $config['newsletter'][$nametype]['chude'] = false;
    $config['newsletter'][$nametype]['noidung'] = true;
    $config['newsletter'][$nametype]['ghichu'] = true;
    $config['newsletter'][$nametype]['tinhtrang'] = array("0"=>"Mới ","1" => "Đã xem", "2" => "Đã liên hệ", "3" => "Đã thông báo");
    $config['newsletter'][$nametype]['showten'] = true;
    $config['newsletter'][$nametype]['showdienthoai'] = true;
    $config['newsletter'][$nametype]['showngaytao'] = true;
    $config['newsletter'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



    $nametype = "datvexe";
    $config['newsletter'][$nametype]['title_main'] = "Đăng ký đặt vé xe";
    $config['newsletter'][$nametype]['email'] = true;
    $config['newsletter'][$nametype]['guiemail'] = false;
    $config['newsletter'][$nametype]['ten'] = true;
    $config['newsletter'][$nametype]['diemdi'] = true;
    $config['newsletter'][$nametype]['diemden'] = true;
    $config['newsletter'][$nametype]['nguoilon'] = true;
    $config['newsletter'][$nametype]['treem'] = true;
    $config['newsletter'][$nametype]['treem2'] = true;
    $config['newsletter'][$nametype]['ngaysudung'] = true;
    $config['newsletter'][$nametype]['dienthoai'] = true;
    $config['newsletter'][$nametype]['diachi'] = false;
    $config['newsletter'][$nametype]['chude'] = false;
    $config['newsletter'][$nametype]['noidung'] = true;
    $config['newsletter'][$nametype]['ghichu'] = true;
    $config['newsletter'][$nametype]['tinhtrang'] = array("0"=>"Mới ","1" => "Đã xem", "2" => "Đã liên hệ", "3" => "Đã thông báo");
    $config['newsletter'][$nametype]['showten'] = true;
    $config['newsletter'][$nametype]['showshowngaysudung'] = true;
    $config['newsletter'][$nametype]['showdienthoai'] = true;
    $config['newsletter'][$nametype]['showngaytao'] = true;
    $config['newsletter'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


    $nametype = "dangkytour";
    $config['newsletter'][$nametype]['title_main'] = "Đăng ký đặt tour";
    $config['newsletter'][$nametype]['email'] = true;
    $config['newsletter'][$nametype]['guiemail'] = false;
    $config['newsletter'][$nametype]['ten'] = true;
    $config['newsletter'][$nametype]['diemdi'] = false;
    $config['newsletter'][$nametype]['diemden'] = false;
    $config['newsletter'][$nametype]['nguoilon'] = true;
    $config['newsletter'][$nametype]['treem'] = true;
    $config['newsletter'][$nametype]['treem2'] = true;
    $config['newsletter'][$nametype]['name_tour'] = true;
    $config['newsletter'][$nametype]['ngaysudung'] = false;
    $config['newsletter'][$nametype]['dienthoai'] = true;
    $config['newsletter'][$nametype]['diachi'] = true;
    $config['newsletter'][$nametype]['chude'] = false;
    $config['newsletter'][$nametype]['noidung'] = true;
    $config['newsletter'][$nametype]['ghichu'] = true;
    $config['newsletter'][$nametype]['tinhtrang'] = array("0"=>"Mới ","1" => "Đã xem", "2" => "Đã liên hệ", "3" => "Đã thông báo");
    $config['newsletter'][$nametype]['showngaysudung'] = true;
    $config['newsletter'][$nametype]['showten'] = true;
    $config['newsletter'][$nametype]['showname_tour'] = true;
    $config['newsletter'][$nametype]['showdienthoai'] = true;
    $config['newsletter'][$nametype]['showngaytao'] = true;
    $config['newsletter'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


    $nametype = "datphong";
    $config['newsletter'][$nametype]['title_main'] = "Đăng ký đặt phòng";
    $config['newsletter'][$nametype]['email'] = true;
    $config['newsletter'][$nametype]['guiemail'] = false;
    $config['newsletter'][$nametype]['ten'] = true;
    $config['newsletter'][$nametype]['songuoi'] = true;
    $config['newsletter'][$nametype]['ngaysudung'] = true;
    $config['newsletter'][$nametype]['dienthoai'] = true;
    $config['newsletter'][$nametype]['diachi'] = false;
    $config['newsletter'][$nametype]['chude'] = false;
    $config['newsletter'][$nametype]['hangphong'] = true;
    $config['newsletter'][$nametype]['name_khachsan'] = true;
    $config['newsletter'][$nametype]['noidung'] = true;
    $config['newsletter'][$nametype]['ghichu'] = true;
    $config['newsletter'][$nametype]['tinhtrang'] = array("0"=>"Mới ","1" => "Đã xem", "2" => "Đã liên hệ", "3" => "Đã thông báo");
    $config['newsletter'][$nametype]['showten'] = true;
    $config['newsletter'][$nametype]['showkhachsan'] = true;
    $config['newsletter'][$nametype]['showngaysudung'] = true;
    $config['newsletter'][$nametype]['showsonguoi'] = true;
    $config['newsletter'][$nametype]['showdienthoai'] = true;
    $config['newsletter'][$nametype]['showngaytao'] = true;
    $config['newsletter'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



    $nametype = "datban";
    $config['newsletter'][$nametype]['title_main'] = "Đăng ký đặt nhà hàng";
    $config['newsletter'][$nametype]['email'] = true;
    $config['newsletter'][$nametype]['guiemail'] = false;
    $config['newsletter'][$nametype]['ten'] = true;
    $config['newsletter'][$nametype]['songuoi'] = true;
    $config['newsletter'][$nametype]['ngaysudung'] = true;
    $config['newsletter'][$nametype]['dienthoai'] = true;
    $config['newsletter'][$nametype]['diachi'] = false;
    $config['newsletter'][$nametype]['chude'] = false;
    $config['newsletter'][$nametype]['hangphong '] = false;
    $config['newsletter'][$nametype]['name_nhahang'] = true;
    $config['newsletter'][$nametype]['noidung'] = true;
    $config['newsletter'][$nametype]['ghichu'] = true;
    $config['newsletter'][$nametype]['tinhtrang'] = array("0"=>"Mới ","1" => "Đã xem", "2" => "Đã liên hệ", "3" => "Đã thông báo");
    $config['newsletter'][$nametype]['showten'] = true;
    $config['newsletter'][$nametype]['shownhahang'] = true;
    $config['newsletter'][$nametype]['showngaysudung'] = true;
    $config['newsletter'][$nametype]['showsonguoi'] = true;
    $config['newsletter'][$nametype]['showdienthoai'] = true;
    $config['newsletter'][$nametype]['showngaytao'] = true;
    $config['newsletter'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


    $nametype = "datvengay";
    $config['newsletter'][$nametype]['title_main'] = "Form đặt ngay";
    $config['newsletter'][$nametype]['email'] = true;
    $config['newsletter'][$nametype]['guiemail'] = false;
    $config['newsletter'][$nametype]['ten'] = true;
    $config['newsletter'][$nametype]['chude_tour'] = true;
    $config['newsletter'][$nametype]['diemdi'] = false;
    $config['newsletter'][$nametype]['diemden'] = false;
    $config['newsletter'][$nametype]['nguoilon'] = true;
    $config['newsletter'][$nametype]['treem'] = true;
    $config['newsletter'][$nametype]['treem2'] = true;
    $config['newsletter'][$nametype]['name_tour'] = true;
    $config['newsletter'][$nametype]['ngaysudung'] = true;
    $config['newsletter'][$nametype]['dienthoai'] = true;
    $config['newsletter'][$nametype]['diachi'] = true;
    $config['newsletter'][$nametype]['name_nhahang'] = true;
    $config['newsletter'][$nametype]['time_uoctinh'] = true;
    $config['newsletter'][$nametype]['time_dukien'] = true;
    $config['newsletter'][$nametype]['name_khachsan'] = true;
    $config['newsletter'][$nametype]['chude'] = false;
    $config['newsletter'][$nametype]['noidung'] = true;
    $config['newsletter'][$nametype]['ghichu'] = true;
    $config['newsletter'][$nametype]['tinhtrang'] = array("0"=>"Mới ","1" => "Đã xem", "2" => "Đã liên hệ", "3" => "Đã thông báo");
    $config['newsletter'][$nametype]['showten'] = true;
    $config['newsletter'][$nametype]['showname_tour'] = true;
    $config['newsletter'][$nametype]['showkhachsan'] = false;
    $config['newsletter'][$nametype]['shownhahang'] = false;
    $config['newsletter'][$nametype]['showdienthoai'] = true;
    $config['newsletter'][$nametype]['showngaytao'] = true;
    $config['newsletter'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



    $nametype = "dattourindex";
    $config['newsletter'][$nametype]['title_main'] = "Form đặt tour trang chủ";
    $config['newsletter'][$nametype]['email'] = true;
    $config['newsletter'][$nametype]['guiemail'] = false;
    $config['newsletter'][$nametype]['ten'] = true;
    $config['newsletter'][$nametype]['chude_tour'] = false;
    $config['newsletter'][$nametype]['diemdi'] = false;
    $config['newsletter'][$nametype]['diemden'] = false;
    $config['newsletter'][$nametype]['nguoilon'] = false;
    $config['newsletter'][$nametype]['treem'] = false;
    $config['newsletter'][$nametype]['treem2'] = false;
    $config['newsletter'][$nametype]['name_tour'] = true;
    $config['newsletter'][$nametype]['ngaysudung'] = true;
    $config['newsletter'][$nametype]['name_khachsan'] = true;
    $config['newsletter'][$nametype]['ngaysudung'] = true;
    $config['newsletter'][$nametype]['dienthoai'] = true;
    $config['newsletter'][$nametype]['diachi'] = true;
    $config['newsletter'][$nametype]['chude'] = false;
    $config['newsletter'][$nametype]['noidung'] = true;
    $config['newsletter'][$nametype]['ghichu'] = true;
    $config['newsletter'][$nametype]['tinhtrang'] = array("0"=>"Mới ","1" => "Đã xem", "2" => "Đã liên hệ", "3" => "Đã thông báo");
    $config['newsletter'][$nametype]['showten'] = true;
    $config['newsletter'][$nametype]['showname_tour'] = true;
    $config['newsletter'][$nametype]['showkhachsan'] = true;
    $config['newsletter'][$nametype]['shownhahang'] = false;
    $config['newsletter'][$nametype]['showdienthoai'] = true;
    $config['newsletter'][$nametype]['showngaytao'] = true;
    $config['newsletter'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


    /* Tin tức */
    

    $nametype = "chu-de-du-lich";
    $config['news'][$nametype]['title_main'] = "Chuyến du lịch";
    $config['news'][$nametype]['dropdown'] = true;
    $config['news'][$nametype]['list'] = true;
    $config['news'][$nametype]['cat'] = false;
    $config['news'][$nametype]['item'] = false;
    $config['news'][$nametype]['sub'] = false;
    $config['news'][$nametype]['tags'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = false;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array();
    $config['news'][$nametype]['icon'] = false;
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['show_gallery'] = true;
    $config['news'][$nametype]['gallery'] = array();
    $config['news'][$nametype]['link'] = false;
    $config['news'][$nametype]['file'] = false;
    $config['news'][$nametype]['video'] = false;
    $config['news'][$nametype]['mota'] = true;
    $config['news'][$nametype]['noidung_cke'] = true;
    $config['news'][$nametype]['noidung'] = true;
    $config['news'][$nametype]['noidung_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 588;
    $config['news'][$nametype]['height'] = 444;
    $config['news'][$nametype]['width_icon'] = 30*2;
    $config['news'][$nametype]['height_icon'] = 30*2;
    $config['news'][$nametype]['thumb'] = '588x444x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
    $config['news'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF| RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


    $config['news'][$nametype]['title_main_list'] = "Danh mục chủ đề";
    $config['news'][$nametype]['images_list'] = true;
    $config['news'][$nametype]['icon_list'] = true;
    $config['news'][$nametype]['show_images_list'] = true;
    $config['news'][$nametype]['slug_list'] = true;
    $config['news'][$nametype]['check_list'] = array();
    $config['news'][$nametype]['gallery_list'] = array();
    $config['news'][$nametype]['mota_list'] = false;
    $config['news'][$nametype]['mota_cke_list'] = false;
    $config['news'][$nametype]['noidung_list'] = false;
    $config['news'][$nametype]['noidung_cke_list'] = false;
    $config['news'][$nametype]['seo_list'] = true;
    $config['news'][$nametype]['width_icon_list'] = 32;
    $config['news'][$nametype]['height_icon_list'] = 32;
    $config['news'][$nametype]['width_list'] = 300;
    $config['news'][$nametype]['height_list'] = 300;
    $config['news'][$nametype]['thumb_list'] = '300x300x1';
    $config['news'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.svg|.SVG';



    $nametype = "gia-tri-cot-loi";
    $config['news'][$nametype]['title_main'] = "Giá trị cốt lõi";
    $config['news'][$nametype]['dropdown'] = false;
    $config['news'][$nametype]['list'] = false;
    $config['news'][$nametype]['cat'] = false;
    $config['news'][$nametype]['item'] = false;
    $config['news'][$nametype]['sub'] = false;
    $config['news'][$nametype]['tags'] = false;
    $config['news'][$nametype]['view'] = false;
    $config['news'][$nametype]['copy'] = false;
    $config['news'][$nametype]['copy_image'] = false;
    $config['news'][$nametype]['slug'] = false;
    $config['news'][$nametype]['check'] = array();
    $config['news'][$nametype]['icon'] = false;
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['show_gallery'] = false;
    $config['news'][$nametype]['gallery'] = array();
    $config['news'][$nametype]['link'] = false;
    $config['news'][$nametype]['file'] = false;
    $config['news'][$nametype]['video'] = false;
    $config['news'][$nametype]['mota'] = true;
    $config['news'][$nametype]['noidung_cke'] = false;
    $config['news'][$nametype]['noidung'] = false;
    $config['news'][$nametype]['noidung_cke'] = false;
    $config['news'][$nametype]['seo'] = false;
    $config['news'][$nametype]['width'] = 400;
    $config['news'][$nametype]['height'] = 400;
    $config['news'][$nametype]['width_icon'] = 30*2;
    $config['news'][$nametype]['height_icon'] = 30*2;
    $config['news'][$nametype]['thumb'] = '400x400x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
    $config['news'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF| RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



    $nametype = "tin-tuc";
    $config['news'][$nametype]['title_main'] = "Tin tức";
    $config['news'][$nametype]['dropdown'] = false;
    $config['news'][$nametype]['list'] = false;
    $config['news'][$nametype]['cat'] = false;
    $config['news'][$nametype]['item'] = false;
    $config['news'][$nametype]['sub'] = false;
    $config['news'][$nametype]['tags'] = false;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = false;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật");
    $config['news'][$nametype]['icon'] = false;
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['show_gallery'] = true;
    $config['news'][$nametype]['gallery'] = array();
    $config['news'][$nametype]['link'] = false;
    $config['news'][$nametype]['file'] = false;
    $config['news'][$nametype]['video'] = false;
    $config['news'][$nametype]['mota'] = true;
    $config['news'][$nametype]['noidung_cke'] = true;
    $config['news'][$nametype]['noidung'] = true;
    $config['news'][$nametype]['noidung_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 588;
    $config['news'][$nametype]['height'] = 444;
    $config['news'][$nametype]['width_icon'] = 30*2;
    $config['news'][$nametype]['height_icon'] = 30*2;
    $config['news'][$nametype]['thumb'] = '100x100x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
    $config['news'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF| RAR|ZIP|PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


    $config['news'][$nametype]['title_main_list'] = "Tin tức cấp 1";
    $config['news'][$nametype]['images_list'] = true;
    $config['news'][$nametype]['show_images_list'] = true;
    $config['news'][$nametype]['slug_list'] = true;
    $config['news'][$nametype]['check_list'] = array("noibat" => "Nổi bật");
    $config['news'][$nametype]['gallery_list'] = array();
    $config['news'][$nametype]['mota_list'] = true;
    $config['news'][$nametype]['mota_cke_list'] = true;
    $config['news'][$nametype]['noidung_list'] = true;
    $config['news'][$nametype]['noidung_cke_list'] = true;
    $config['news'][$nametype]['seo_list'] = true;
    $config['news'][$nametype]['width_list'] = 75*4;
    $config['news'][$nametype]['height_list'] = 50*4;
    $config['news'][$nametype]['thumb_list'] = '100x100x1';
    $config['news'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Tin tức (Cat) */
    $config['news'][$nametype]['title_main_cat'] = "Tin tức cấp 2";
    $config['news'][$nametype]['images_cat'] = true;
    $config['news'][$nametype]['show_images_cat'] = true;
    $config['news'][$nametype]['slug_cat'] = true;
    $config['news'][$nametype]['check_cat'] = array("noibat" => "Nổi bật");
    $config['news'][$nametype]['mota_cat'] = true;
    $config['news'][$nametype]['mota_cke_cat'] = true;
    $config['news'][$nametype]['noidung_cat'] = true;
    $config['news'][$nametype]['noidung_cke_cat'] = true;
    $config['news'][$nametype]['seo_cat'] = true;
    $config['news'][$nametype]['width_cat'] = 75*4;
    $config['news'][$nametype]['height_cat'] = 50*4;
    $config['news'][$nametype]['thumb_cat'] = '100x100x1';
    $config['news'][$nametype]['img_type_cat'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Tin tức (Item) */
    $config['news'][$nametype]['title_main_item'] = "Tin tức cấp 3";
    $config['news'][$nametype]['images_item'] = true;
    $config['news'][$nametype]['show_images_item'] = true;
    $config['news'][$nametype]['slug_item'] = true;
    $config['news'][$nametype]['check_item'] = array("noibat" => "Nổi bật");
    $config['news'][$nametype]['mota_item'] = true;
    $config['news'][$nametype]['mota_cke_item'] = true;
    $config['news'][$nametype]['noidung_item'] = true;
    $config['news'][$nametype]['noidung_cke_item'] = true;
    $config['news'][$nametype]['seo_item'] = true;
    $config['news'][$nametype]['width_item'] = 75*4;
    $config['news'][$nametype]['height_item'] = 50*4;
    $config['news'][$nametype]['thumb_item'] = '100x100x1';
    $config['news'][$nametype]['img_type_item'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Tin tức (Sub) */
    $config['news'][$nametype]['title_main_sub'] = "Tin tức cấp 4";
    $config['news'][$nametype]['images_sub'] = true;
    $config['news'][$nametype]['show_images_sub'] = true;
    $config['news'][$nametype]['slug_sub'] = true;
    $config['news'][$nametype]['check_sub'] = array("noibat" => "Nổi bật");
    $config['news'][$nametype]['mota_sub'] = true;
    $config['news'][$nametype]['mota_cke_sub'] = true;
    $config['news'][$nametype]['noidung_sub'] = true;
    $config['news'][$nametype]['noidung_cke_sub'] = true;
    $config['news'][$nametype]['seo_sub'] = true;
    $config['news'][$nametype]['width_sub'] = 75*4;
    $config['news'][$nametype]['height_sub'] = 50*4;
    $config['news'][$nametype]['thumb_sub'] = '100x100x1';
    $config['news'][$nametype]['img_type_sub'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    

    /* Giới thiệu */
    $nametype = "gioi-thieu";
    $config['static'][$nametype]['title_main'] = "Giới thiệu chung";
    $config['static'][$nametype]['images'] = true;
    $config['static'][$nametype]['link'] = false;
    $config['static'][$nametype]['file'] = false;
    $config['static'][$nametype]['video'] = false;
    $config['static'][$nametype]['tieude'] = false;
    $config['static'][$nametype]['mota'] = true;
    $config['static'][$nametype]['mota_cke'] = false;
    $config['static'][$nametype]['noidung'] = false;
    $config['static'][$nametype]['noidung_cke'] = false;
    $config['static'][$nametype]['seo'] = true;
    $config['static'][$nametype]['width'] = 590;
    $config['static'][$nametype]['height'] = 338;
    $config['static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
    $config['static'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP |PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';



    $nametype = "dat-ve-xe";
    $config['static'][$nametype]['title_main'] = "Đặt vé xe";
    $config['static'][$nametype]['images'] = true;
    $config['static'][$nametype]['gia'] = true;
    $config['static'][$nametype]['lichtrinh'] = true;
    $config['static'][$nametype]['khoihanh'] = true;
    $config['static'][$nametype]['link'] = false;
    $config['static'][$nametype]['file'] = false;
    $config['static'][$nametype]['video'] = false;
    $config['static'][$nametype]['gallery'] = array(
        $nametype => array
        (
            "title_main_photo" => "Hình ảnh sản phẩm",
            "title_sub_photo" => "Hình ảnh",
            "number_photo" => 3,
            "images_photo" => true,
            "cart_photo" => false,
            "avatar_photo" => true,
            "tieude_photo" => true,
            "width_photo" => 612,
            "height_photo" => 460,
            "thumb_photo" => '612x460x1',
            "img_type_photo" => '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF'
        )
    );
    $config['static'][$nametype]['tieude'] = true;
    $config['static'][$nametype]['mota'] = true;
    $config['static'][$nametype]['mota_cke'] = false;
    $config['static'][$nametype]['noidung'] = true;
    $config['static'][$nametype]['noidung_cke'] = true;
    $config['static'][$nametype]['lichtrinh'] = true;
    $config['static'][$nametype]['lichtrinh_cke'] = true;
    $config['static'][$nametype]['seo'] = true;
    $config['static'][$nametype]['width'] = 612;
    $config['static'][$nametype]['height'] = 460;
    $config['static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
    $config['static'][$nametype]['file_type'] = 'doc|docx|pdf|rar|zip|ppt|pptx|DOC|DOCX|PDF|RAR|ZIP |PPT|PPTX|xls|jpg|png|gif|JPG|PNG|GIF|xls|XLS';


    /* Liên hệ */
    $nametype = "lienhe";
    $config['static'][$nametype]['title_main'] = "Liên hệ";
    $config['static'][$nametype]['noidung'] = true;
    $config['static'][$nametype]['noidung_cke'] = true;

    /* Footer */
    $nametype = "footer";
    $config['static'][$nametype]['title_main'] = "Footer";
    $config['static'][$nametype]['noidung'] = true;
    $config['static'][$nametype]['noidung_cke'] = true;


    /* Logo */
    $nametype = "logo";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Logo";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['images2'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 172;
    $config['photo']['photo_static'][$nametype]['height'] = 40;
    $config['photo']['photo_static'][$nametype]['thumb'] = '172x40x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.svg|.SVG';


    $nametype = "slide-banner";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner Slide";
    $config['photo']['photo_static'][$nametype]['images'] = false;
    $config['photo']['photo_static'][$nametype]['images2'] = false;
    $config['photo']['photo_static'][$nametype]['tieude'] = true;
    $config['photo']['photo_static'][$nametype]['mota'] = true;
    $config['photo']['photo_static'][$nametype]['video_file'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 1366;
    $config['photo']['photo_static'][$nametype]['height'] = 700;
    $config['photo']['photo_static'][$nametype]['thumb'] = '1366x700x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.svg|.SVG';
    $config['photo']['photo_static'][$nametype]['video_type'] = '.mp4|.MP4';

    $nametype = "banner-gt-khach-san";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner giới thiệu khách sạn";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['tieude'] = true;
    $config['photo']['photo_static'][$nametype]['images2'] = false;
    $config['photo']['photo_static'][$nametype]['width'] = 1366;
    $config['photo']['photo_static'][$nametype]['height'] = 360;
    $config['photo']['photo_static'][$nametype]['thumb'] = '1366x360x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.svg|.SVG';

    $nametype = "banner-gt-nha-hang";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner giới thiệu nhà hàng";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['tieude'] = true;
    $config['photo']['photo_static'][$nametype]['images2'] = false;
    $config['photo']['photo_static'][$nametype]['width'] = 1366;
    $config['photo']['photo_static'][$nametype]['height'] = 360;
    $config['photo']['photo_static'][$nametype]['thumb'] = '1366x360x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.svg|.SVG';

    /* Favicon */
    $nametype = "favicon";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Favicon";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 25;
    $config['photo']['photo_static'][$nametype]['height'] = 25;
    $config['photo']['photo_static'][$nametype]['thumb'] = '25x25x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';


    /* Slideshow */
    $nametype = "slide";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Slideshow";
    $config['photo']['man_photo'][$nametype]['number_photo'] = 5;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['tieude_photo'] = true;
    $config['photo']['man_photo'][$nametype]['video_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 1366;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 523;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '1366x523x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';


    $nametype = "tai-sao";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Tại sao chọn chúng tôi";
    $config['photo']['man_photo'][$nametype]['number_photo'] = 5;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = false;
    $config['photo']['man_photo'][$nametype]['tieude_photo'] = true;
    $config['photo']['man_photo'][$nametype]['video_photo'] = false;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 160;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 160;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '160x160x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.svg|.SVG';

  
    /* Mạng xã hội */
    $nametype = "mangxahoi1";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Mạng xã hội footer";
    $config['photo']['man_photo'][$nametype]['number_photo'] = 3;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 32;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 32;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '32x32x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.svg|.SVG';




    $nametype = "tour-du-lich-banner-breadcrumb";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner trang Giới thiệu";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['images2'] = false;
    $config['photo']['photo_static'][$nametype]['tieude'] = false;
    $config['photo']['photo_static'][$nametype]['mota'] = false;
    $config['photo']['photo_static'][$nametype]['video_file'] = false;
    $config['photo']['photo_static'][$nametype]['width'] = 1440;
    $config['photo']['photo_static'][$nametype]['height'] = 450;
    $config['photo']['photo_static'][$nametype]['thumb'] = '1440x450x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.svg|.SVG';
    $config['photo']['photo_static'][$nametype]['video_type'] = '.mp4|.MP4';



    $nametype = "chu-de-du-lich-banner-breadcrumb";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner trang CĐ Du Lịch";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['images2'] = false;
    $config['photo']['photo_static'][$nametype]['tieude'] = false;
    $config['photo']['photo_static'][$nametype]['mota'] = false;
    $config['photo']['photo_static'][$nametype]['video_file'] = false;
    $config['photo']['photo_static'][$nametype]['width'] = 1440;
    $config['photo']['photo_static'][$nametype]['height'] = 450;
    $config['photo']['photo_static'][$nametype]['thumb'] = '1440x450x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.svg|.SVG';


    $nametype = "dat-ve-xe-banner-breadcrumb";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner trang đặt vé xe";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['images2'] = false;
    $config['photo']['photo_static'][$nametype]['tieude'] = false;
    $config['photo']['photo_static'][$nametype]['mota'] = false;
    $config['photo']['photo_static'][$nametype]['video_file'] = false;
    $config['photo']['photo_static'][$nametype]['width'] = 1440;
    $config['photo']['photo_static'][$nametype]['height'] = 450;
    $config['photo']['photo_static'][$nametype]['thumb'] = '1440x450x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.svg|.SVG';

    $nametype = "nha-hang-banner-breadcrumb";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner trang nhà hàng";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['images2'] = false;
    $config['photo']['photo_static'][$nametype]['tieude'] = false;
    $config['photo']['photo_static'][$nametype]['mota'] = false;
    $config['photo']['photo_static'][$nametype]['video_file'] = false;
    $config['photo']['photo_static'][$nametype]['width'] = 1440;
    $config['photo']['photo_static'][$nametype]['height'] = 450;
    $config['photo']['photo_static'][$nametype]['thumb'] = '1440x450x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.svg|.SVG';

    $nametype = "khach-san-banner-breadcrumb";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner trang khách sạn";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['images2'] = false;
    $config['photo']['photo_static'][$nametype]['tieude'] = false;
    $config['photo']['photo_static'][$nametype]['mota'] = false;
    $config['photo']['photo_static'][$nametype]['video_file'] = false;
    $config['photo']['photo_static'][$nametype]['width'] = 1440;
    $config['photo']['photo_static'][$nametype]['height'] = 450;
    $config['photo']['photo_static'][$nametype]['thumb'] = '1440x450x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.svg|.SVG';


    $nametype = "tin-tuc-banner-breadcrumb";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner trang Tin tức";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['images2'] = false;
    $config['photo']['photo_static'][$nametype]['tieude'] = false;
    $config['photo']['photo_static'][$nametype]['mota'] = false;
    $config['photo']['photo_static'][$nametype]['video_file'] = false;
    $config['photo']['photo_static'][$nametype]['width'] = 1440;
    $config['photo']['photo_static'][$nametype]['height'] = 450;
    $config['photo']['photo_static'][$nametype]['thumb'] = '1440x450x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.svg|.SVG';

    $nametype = "lienhe-banner-breadcrumb";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner trang Liên hệ";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['images2'] = false;
    $config['photo']['photo_static'][$nametype]['tieude'] = false;
    $config['photo']['photo_static'][$nametype]['mota'] = false;
    $config['photo']['photo_static'][$nametype]['video_file'] = false;
    $config['photo']['photo_static'][$nametype]['width'] = 1440;
    $config['photo']['photo_static'][$nametype]['height'] = 450;
    $config['photo']['photo_static'][$nametype]['thumb'] = '1440x450x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF|.svg|.SVG';


    /* Setting */
    $config['setting']['diachi'] = true;
    $config['setting']['dienthoai'] = true;
    $config['setting']['hotline'] = true;
    $config['setting']['zalo'] = true;
    $config['setting']['whatsapp'] = true;
    $config['setting']['oaidzalo'] = true;
    $config['setting']['email'] = true;
    $config['setting']['website'] = true;
    $config['setting']['fanpage'] = true;
    $config['setting']['toado'] = true;
    $config['setting']['toado_iframe'] = true;

    /* Seo page */
    $config['seopage']['page'] = array(
        "trang-chu" => "Trang chủ",
        "nha-hang" => "Nhà hàng",
        "khach-san" => "Khách sạn",
        "tin-tuc" => "Tin tức",
        "lien-he" => "Liên hệ"
    );
    $config['seopage']['width'] = 75*4;
    $config['seopage']['height'] = 50*4;
    $config['seopage']['thumb'] = '250x250x1';
    $config['seopage']['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Quản lý import */
    $config['import']['images'] = true;
    $config['import']['thumb'] = '100x100x1';
    $config['import']['img_type'] = ".jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF";

    /* Quản lý export */
    $config['export']['category'] = false;

    /* Quản lý tài khoản */
    $config['user']['active'] = false;
    $config['user']['admin'] = false;
    $config['user']['visitor'] = fasle;

    /* Quản lý phân quyền */
    $config['permission'] = false;

    /* Quản lý địa điểm */
    $config['places']['active'] = false;
    $config['places']['placesship'] = false;

    /* Quản lý giỏ hàng */
    $config['order']['active'] = false;
    $config['order']['search'] = false;
    $config['order']['excel'] = false;
    $config['order']['word'] = false;
    $config['order']['excelall'] = false;
    $config['order']['wordall'] = false;
    $config['order']['thumb'] = '100x100x1';

    /* Quản lý mã ưu đãi */
    $config['coupon'] = false;

    /* Quản lý thông báo đẩy */
    $config['onesignal'] = false;

    /* Quản lý mục (Không cấp) */
    if(count($config['news']))
    {
        foreach ($config['news'] as $key => $value)
        {
            if(isset($value['dropdown']) && $value['dropdown']==false)
            { 
                $config['shownews'] = 1;
                break;
            }
        }
    }
?>