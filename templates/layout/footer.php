<footer id="footer" class="">
   <div class="container">
        <div class="footer-article">
            <div class="row flex justify-between">
                <div class="col-8 col-lg-8">
                    <div class="row flex justify-between">
                        <div class="col-7 col-lg-7">
                            <div class="info-footer"><?=htmlspecialchars_decode($footer['noidung'.$lang])?></div>
                        </div>
                        <div class="col-4 col-lg-4">
                            <p class="title-footer">Liên Kết Với Chúng Tôi</p>
                            <ul class="social !mb-[25px] social-footer flex items-center justify-start">
                                <?php for($i=0;$i<count($social1);$i++) { ?>
                                    <li class="!mr-[24px]"><a href="<?=$social1[$i]['link']?>" target="_blank"><img src="<?=UPLOAD_PHOTO_L.$social1[$i]['photo']?>" alt="<?=$social1[$i]['ten'.$lang]?>"></a></li>
                                <?php } ?>
                            </ul>
                            <p class="title-footer">Danh mục</p>
                            <ul class="footer-ul">
                                <li><a class="transition-all duration-300 hover:!text-[#3A9923]" href="">Trang chủ</a></li>
                                <li><a class="transition-all duration-300 hover:!text-[#3A9923]" href="<?=$tourlistmenu[0]['tenkhongdau'.$lang]?>">Giới thiệu</a></li>
                                <li><a class="transition-all duration-300 hover:!text-[#3A9923]" href="tin-tuc">Tin tức</a></li>
                                <li><a class="transition-all duration-300 hover:!text-[#3A9923]" href="lien-he">Liên hệ</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-12 mt-[19px]">
                            <p class="text-[#868686] text-[13px]">Copyright© 2023 Ewin Group all rights reserved. Developed by A Website</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-lg-4 !pl-[30px]">
                    <p class="title-footer">Đăng Ký Nhận Tư Vấn</p>
                    <div class="col-desc">
                        <form  method="post" action="" enctype="multipart/form-data">
                            <div class="input-contact !mb-[40px]">
                                <input type="text" class="form-input !h-[32px] !border-t-0 !border-l-0 !border-r-0 !indent-0 !bg-transparent !ring-0 !rounded-0 placeholder:!text-[#868686] !text-[#fff] !border-[#868686] !border-[1px]" name="data[ten]" placeholder="<?=hoten?>" required />
                            </div>
                            <div class="input-contact !mb-[40px]">
                                <input type="text" class="form-input !h-[32px] !border-t-0 !border-l-0 !border-r-0 !indent-0 !bg-transparent !ring-0 !rounded-0 placeholder:!text-[#868686] !text-[#fff] !border-[#868686] !border-[1px]" name="data[email]" placeholder="Email - SĐT" required />
                            </div>
                            <div class="input-contact !mb-[24px]">
                                <textarea class="form-textarea !h-[100px] !bg-transparent !ring-0 !rounded-0 placeholder:!text-[#868686] !text-[#fff] !border-[#868686] !border-[1px]" name="data[noidung]" placeholder="<?=noidung?>" required /></textarea>
                            </div>
                            <input type="submit" class="rounded-[26px] border-[1px] border-[#3A9923] bg-[#3A9923] font-bold text-[16px] text-white px-[40px] py-[10px] uppercase transition-all hover:!bg-white hover:!text-[#3A9923] cursor-pointer" name="submit-newsletter" value="ĐĂNG KÝ" />
                            <input type="hidden" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                            <input type="hidden" name="data[type]" value="dangkytuvan">
                            <input type="hidden" name="url" value="<?=$func->getCurrentPageURL()?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </div>
</footer>
<a class="btn-whatapps btn-frame text-decoration-none" target="_blank" href="https://api.whatsapp.com/send?phone=<?= preg_replace('/[^0-9]/', '', $optsetting['whatsapp']); ?>">
    <img src="assets/images/icon.svg" alt="WhatsApp">
</a>


