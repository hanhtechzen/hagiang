<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript">
    var FRAMEWORK = FRAMEWORK || {};
    var CONFIG_BASE = '<?=$config_base?>';
    var WEBSITE_NAME = '<?=($setting['ten'.$lang]) ? $setting['ten'.$lang] : $setting['title'.$seolang]?>';
    var TIMENOW = '<?=date("Y/m/d",time())?>';
    var SHIP_CART = <?=($config['order']['ship']) ? 'true' : 'false'?>;
    var GOTOP = 'assets/images/top.png';
    var LANG = {
        'no_keywords': '<?=chuanhaptukhoatimkiem?>',
        'delete_product_from_cart': '<?=banmuonxoasanphamnay?>',
        'no_products_in_cart': '<?=khongtontaisanphamtronggiohang?>',
        'no_coupon': '<?=chuanhapmauudai?>',
        'wards': '<?=phuongxa?>',
        'back_to_home': '<?=vetrangchu?>',
    };
    var sitekey ='<?=$config['googleAPI']['recaptcha']['sitekey']?>';
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
    $js->setCache("cached");
    $js->setJs("./assets/bootstrap/js/bootstrap.js");
    $js->setJs("./assets/owlcarousel2/owl.carousel.js");
    $js->setJs("./assets/magiczoomplus/magiczoomplus.js");
    $js->setJs("./assets/slick/slick.js");
    $js->setJs("./assets/fancybox3/jquery.fancybox.min.js");
    $js->setJs("./assets/toc/toc.js");
    $js->setJs("./assets/js/functions.js");
    $js->setJs("./assets/js/jquery.lettering.js");
    $js->setJs("./assets/js/jquery.textillate.js");
    $js->setJs("./assets/js/flatpickr.js");
    $js->setJs("./assets/js/flickity.pkgd.min.js");
    $js->setJs("./assets/js/HoldOn.js");
    $js->setJs("./assets/js/alpinejs.cdn.min.js");
    $js->setJs("./assets/js/app-mobile.js");
    echo $js->getJs();
?>
<?php if($config['oneSignal']['active']) { ?>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script type="text/javascript">
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "<?=$config['oneSignal']['id']?>"
            });
        });
    </script>
<?php } ?>
<?=$addons->setAddons('script-main', 'script-main', 0.5);?>
<?=$addons->getAddons();?>
<?=htmlspecialchars_decode($setting['bodyjs'])?>



<script src="https://translate.google.com/translate_a/element.js?cb=GoogleLanguageTranslatorInit"></script>
<script>
  function GoogleLanguageTranslatorInit() {
    setCookie('googtrans', '/en/vi', 1);
    doGoogleLanguageTranslator('en');
    new google.translate.TranslateElement({pageLanguage: 'vi', autoDisplay: false }, 'google_language_translator');
  }
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGoogleLanguageTranslator||getElementById|google_language_translator|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}));
</script>
<script>
  function readCookie(name) {
    var c = document.cookie.split('; '),
    cookies = {}, i, C;
    for (i = c.length - 1; i >= 0; i--) {
      C = c[i].split('=');
      cookies[C[0]] = C[1];
    }
    return cookies[name];
  }
  $(document).ready(function() {
    $(".changeLanguage").click(function(event) {
      event.preventDefault();
      doGoogleLanguageTranslator($(this).attr('data-value'));
      var _readCookie = readCookie('googtrans');
      var text_lang = $(this).attr('data-text');
      var flag = $(this).attr('style');
      $(".lang_txt").text(text_lang);
    });
  });
  $(window).load(function () {
    var _readCookie = readCookie('googtrans');
    var selected = (_readCookie !== undefined) ? _readCookie.split("/") : '';
    $(".changeLanguage").each(function(index, el) {
      var data_lang = $(this).attr('data-value').split("|");
      if (data_lang[1] == selected[2]) {
        var text_lang = $(this).attr('data-text');
        var flag = $(this).attr('style');
        $(".lang_txt").text(text_lang);
        return false;
      }
    });
  });

  function setCookie(key, value, expiry) {
        var expires = new Date();
        expires.setTime(expires.getTime() + (expiry * 24 * 60 * 60 * 1000));
        document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
    }

</script>