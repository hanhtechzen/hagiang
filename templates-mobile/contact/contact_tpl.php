<?php 
    $row_banner_breadcrumb = $d->rawQueryOne("select photo from #_photo where type=?",array($type.'-banner-breadcrumb'));
?>
<?php include TEMPLATE.LAYOUT."banner_breadcrumb.php"; ?>
<div class="wrap-contact-page relative z-[10] pb-[40px]">
    <div class="container">
        <div class="wrapper_contant shadow-[0px_0px_50px_rgba(124,124,124,0.15)] rounded-[8px] p-[30px] bg-white mt-[30px]">
            <form class="validation-contact" method="post" action="" enctype="multipart/form-data">
                <div class="header_contant mb-[30px]">
                    <h3 class="inline-block text-[32px] font-bold mb-0 leading-[invert]">
                        <p>Chúng tôi</p>
                        <p>Muốn lắng nghe bạn!</p>
                    </h3>
                    <span>Điền một số thông tin để chúng tôi tư vấn ngay cho bạn nhé!</span>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="mb-[15px]">
                            <input type="text" id="text" class="text-[15px] form-input bg-[#F7F7F7] !border border-gray-300 text-gray-900 rounded-[5px] focus:ring-cammenu-900 focus:border-cammenu-900 block w-full p-2.5" name="data[ten]" placeholder="<?=hoten?> *" required>
                        </div>
                        <div class="mb-[15px]">
                            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="email" class="text-[15px] form-input bg-[#F7F7F7] !border border-gray-300 text-gray-900 rounded-[5px] focus:ring-cammenu-900 focus:border-cammenu-900 block w-full p-2.5 " name="data[email]" placeholder="Email *" required>
                        </div>
                        <div class="mb-[15px]">
                            <input type="number" id="text" class="text-[15px] form-input bg-[#F7F7F7] !border border-gray-300 text-gray-900 rounded-[5px] focus:ring-cammenu-900 focus:border-cammenu-900 block w-full p-2.5 " placeholder="Điện thoại" name="data[dienthoai]">
                        </div>
                        <div class="mb-[15px]">
                            <input type="text" id="text" class="text-[15px] form-input bg-[#F7F7F7] !border border-gray-300 text-gray-900 rounded-[5px] focus:ring-cammenu-900 focus:border-cammenu-900 block w-full p-2.5 " placeholder="Chủ đề" name="data[tieude]">
                        </div>
                        <div class="mb-[15px]">
                            <textarea class="text-[15px] form-textarea bg-[#F7F7F7] !border border-gray-300 text-gray-900 rounded-[5px] focus:ring-cammenu-900 focus:border-cammenu-900 block w-full p-2.5 resize-none h-[170px]" placeholder="<?=noidung?>" name="data[noidung]"></textarea>
                        </div>
                        <div class="mb-[15px]">
                            <input type="file" class="form-file bg-[#F7F7F7] !border border-gray-300 text-gray-900 rounded-[5px] focus:ring-cammenu-900 focus:border-cammenu-900 block w-full p-2.5" name="file">
                        </div>
                        <button type="submit" name="submit-contact" class="bg-[#3A9923] rounded-[26px] inline-block text-[16px] font-bold py-[10px] px-[48px] leading-[24px] uppercase border-[1px] border-[#3A9923] !text-white hover:bg-white hover:!text-[#3A9923] transition-all duration-500" value="ok"><?=gui?></button>
                        <input type="hidden" name="recaptcha_response_contact" id="recaptchaResponseContact">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <section class="contact_bottom relative mt-[80px]">
        <div class="container">
            <div class="info_contant_content">
                <div class="row">
                    <div class="col-12 col-lg-6 col_text_info_contant_content">
                        <?=htmlspecialchars_decode($lienhe['noidung'.$lang])?>
                    </div>
                    <div class="col-12 mt-[30px] col-lg-6 col_map_info_contant_content">
                        <?=htmlspecialchars_decode($optsetting['toado_iframe'])?>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
