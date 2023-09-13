<section class="menu" id="menu">
    <div class="desc-menu d-flex flex-wrap justify-content-between">
        <ul class="menu-i d-flex align-items-center justify-content-between">
            <li>
               
            </li>
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
                <a class="transition <?php if($com=='nha-hang' or $com=='khach-san') echo 'active'; ?>" href="javascript:void(0)" title="Dịch vụ">Dịch vụ</a>
                <ul>
                    <li><a href="nha-hang">Nhà hàng</a></li>
                    <li><a href="khach-san">Khách sạn</a></li>
                </ul>
            </li>
            <li>
                <a class="transition <?php if($com=='tin-tuc') echo 'active'; ?>" href="tin-tuc" title="<?=tintuc?>"><?=tintuc?></a>
            </li>
            <li>
                <a class="transition <?php if($com=='lien-he') echo 'active'; ?>" href="lien-he" title="<?=lienhe?>"><?=lienhe?></a>
            </li>
            <li>
                
            </li>
        </ul>
    </div>
</section>