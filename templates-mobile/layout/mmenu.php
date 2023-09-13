<div class="opacity-menu"></div>
<div class="header-left-fixwidth">
    <spam class="close-menu absolute top-[20px] w-[40px] h-[40px] flex items-center justify-center right-[20px]">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M19 5L5 19" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"/>
            <path d="M19 19L5 5" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="square"/>
        </svg>
    </spam>
    <div class="section wrap-header">
        <div class="logos-menu">
            <a class="logo-header" href=""><img src="<?=UPLOAD_PHOTO_L.$logo['photo2']?>"/></a>
        </div>
        
        <div class="nav-menu">
            <ul>
                <li>
                    <a class="transition <?php if($com=='tour-du-lich') echo 'active'; ?>" href="<?=$tourlistmenu[0]['tenkhongdau'.$lang]?>" title="Về chúng tôi">Về chúng tôi</a>
                </li>
                <li>
                    <a class="transition <?php if($com=='chuyen-du-lich') echo 'active'; ?>" href="chuyen-du-lich" title="Chuyến du lịch">Chuyến du lịch</a>
                </li>
                <li>
                    <a class="transition <?php if($com=='dat-ve-xe') echo 'active'; ?>" href="dat-ve-xe" title="Đặt vé xe">Đặt vé xe</a>
                </li>
                <li>
                    <a class="transition <?php if($com=='nha-hang') echo 'active'; ?>" href="nha-hang" title="Nhà hàng">Nhà hàng</a>
                </li>
                <li>
                    <a class="transition <?php if($com=='khach-san') echo 'active'; ?>" href="khach-san" title="Khách sạn">Khách sạn</a>
                </li>
                <li>
                    <a class="transition <?php if($com=='tin-tuc') echo 'active'; ?>" href="tin-tuc" title="<?=tintuc?>"><?=tintuc?></a>
                </li>
                <li>
                    <a class="transition <?php if($com=='lien-he') echo 'active'; ?>" href="lien-he" title="<?=lienhe?>"><?=lienhe?></a>
                </li>
            </ul>
        </div>
    </div>
</div>