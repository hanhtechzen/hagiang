<?php
    if(!defined('SOURCES')) die("Error");
    
    /* Query allpage */
    $favicon = $d->rawQueryOne("SELECT photo FROM #_photo WHERE hienthi=1 AND type = ? AND act = ? limit 0,1",array('favicon','photo_static'));
    $logo = $d->rawQueryOne("SELECT id, photo,photo2 FROM #_photo WHERE type = ? AND act = ? limit 0,1",array('logo','photo_static'));
    $banner = $d->rawQueryOne("SELECT photo FROM #_photo WHERE type = ? AND act = ? limit 0,1",array('banner','photo_static'));
    $slogan = $d->rawQueryOne("SELECT ten$lang FROM #_static WHERE type = ? limit 0,1",array('slogan'));
    $social = $d->rawQuery("SELECT ten$lang, photo, link FROM #_photo WHERE type = ? AND hienthi=1 ORDER BY stt,id DESC",array('mangxahoi'));
    $social1 = $d->rawQuery("SELECT ten$lang, photo, link FROM #_photo WHERE type = ? AND hienthi=1 ORDER BY stt,id DESC",array('mangxahoi1'));
    $social2 = $d->rawQuery("SELECT ten$lang, photo, link FROM #_photo WHERE type = ? AND hienthi=1 ORDER BY stt,id DESC",array('mangxahoi2'));

    
    $tourlistmenu = $d->rawQuery("SELECT ten$lang as ten, tenkhongdauvi, tenkhongdauen, id FROM #_product_list WHERE hienthi=1 AND type = ? ORDER BY stt,id DESC",array('tour-du-lich'));

    $serviceslist = $d->rawQuery("SELECT ten$lang as ten, tenkhongdauvi, tenkhongdauen, id FROM #_news WHERE hienthi=1 AND type = ? ORDER BY stt asc,id DESC",array('to-chuc-su-kien'));

    $footer = $d->rawQueryOne("SELECT ten$lang, noidung$lang FROM #_static WHERE type = ?",array('footer'));
    $cs = $d->rawQuery("SELECT ten$lang, tenkhongdauvi, tenkhongdauen, id, photo FROM #_news WHERE hienthi=1 AND type = ? ORDER BY stt,id DESC",array('chinh-sach'));
    /* Get statistic */
    $counter = $statistic->getCounter();
    $online = $statistic->getOnline();

    /* Đăng ký nhận mail */
    if(isset($_POST['submit-newsletter']))
    {
        $responseCaptcha = $_POST['recaptcha_response_newsletter'];
        $resultCaptcha = $func->checkRecaptcha($responseCaptcha);

        if(($resultCaptcha['score'] >= 0.5 && $resultCaptcha['action'] == 'Newsletter') || $resultCaptcha['test'])
        {
            $data = (isset($_POST['data'])) ? $_POST['data']:null;
            if(!empty($data)) { foreach($data as $column => $value) $data[$column] = htmlspecialchars($value); }
            $data['ngaytao'] = time();

            if($d->insert('newsletter',$data))
            {
                $func->transfer("Đăng ký nhận tin thành công. Chúng tôi sẽ liên hệ với bạn sớm.",$_POST['url']);
            }
            else
            {
                $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.",$_POST['url'], false);
            }
        }
        else
        {
            $func->transfer("Đăng ký nhận tin thất bại. Vui lòng thử lại sau.",$_POST['url'], false);
        }
    }

    if(isset($_POST['submit-dangkytour']))
    {
        $responseCaptcha = $_POST['recaptcha_response_dangkytour'];
        $resultCaptcha = $func->checkRecaptcha($responseCaptcha);

        if(($resultCaptcha['score'] >= 0.5 && $resultCaptcha['action'] == 'Dangkytour') || $resultCaptcha['test'])
        {
            $data = (isset($_POST['data'])) ? $_POST['data']:null;
            if(!empty($data)) { foreach($data as $column => $value) $data[$column] = htmlspecialchars($value); }
            $data['ngaytao'] = time();

            if($d->insert('newsletter',$data))
            {
                $func->transfer("Đăng ký đặt tour thành công. Chúng tôi sẽ liên hệ với bạn sớm.",$_POST['url']);
            }
            else
            {
                $func->transfer("Đăng ký đặt tour thất bại. Vui lòng thử lại sau.",$_POST['url'], false);
            }
        }
        else
        {
            $func->transfer("Đăng ký đặt tour thất bại. Vui lòng thử lại sau.",$_POST['url'], false);
        }
    }
    
    

    
    

    

    
?>