<?php

	/* Validate URL */
	$func->checkUrl($config['website']['index']);
	
	/* Check login */
    $func->checkLogin();

	/* Mobile detect */
    $deviceType = ($detect->isMobile() || $detect->isTablet()) ? 'mobile' : 'computer';
    if($deviceType != 'mobile') @define('TEMPLATE','./templates/');
    else @define('TEMPLATE','./templates-mobile/');

    /* Watermark */
    $wtmPro = $d->rawQueryOne("SELECT hienthi, photo, options FROM #_photo WHERE type = ? AND act = ? LIMIT 0,1",array('watermark','photo_static'));
	$wtmNews = $d->rawQueryOne("SELECT hienthi, photo, options FROM #_photo WHERE type = ? AND act = ? LIMIT 0,1",array('watermark-news','photo_static'));

    /* Router */

    $router->setBasePath($config['database']['url']);
    $router->map('GET',array('admin/','admin'), function(){
		global $func, $config;
		$func->redirect($config['database']['url']."admin/index.php");
		exit;
	});
	$router->map('GET',array('admin','admin'), function(){
		global $func, $config;
		$func->redirect($config['database']['url']."admin/index.php");
		exit;
	});

	$router->map('GET',array('newadmin/','newadmin'), function(){
		global $func, $config;
		$func->redirect($config['database']['url']."newadmin/index.php");
		exit;
	});
	$router->map('GET',array('newadmin','newadmin'), function(){
		global $func, $config;
		$func->redirect($config['database']['url']."newadmin/index.php");
		exit;
	});
	
    $router->map('GET|POST', '', 'index', 'home');
    $router->map('GET|POST', 'index.php', 'index', 'index');
    $router->map('GET|POST', 'sitemap.xml', 'sitemap', 'sitemap');
    $router->map('GET|POST', '[a:com]', 'allpage', 'show');
    $router->map('GET|POST', '[a:com]/[a:lang]/', 'allpagelang', 'lang');
    $router->map('GET|POST', '[a:com]/[a:action]', 'account', 'account');
    $router->map('GET', THUMBS.'/[i:w]x[i:h]x[i:z]/[**:src]', function($w,$h,$z,$src){
        global $func;
        $func->createThumb($w,$h,$z,$src,null,THUMBS);
    },'thumb');
    $router->map('GET', WATERMARK.'/product/[i:w]x[i:h]x[i:z]/[**:src]', function($w,$h,$z,$src){
        global $func, $wtmPro;
        $func->createThumb($w,$h,$z,$src,$wtmPro,"product");
    },'watermark');
    $router->map('GET', WATERMARK.'/news/[i:w]x[i:h]x[i:z]/[**:src]', function($w,$h,$z,$src){
        global $func, $wtmNews;
        $func->createThumb($w,$h,$z,$src,$wtmNews,"news");
    },'watermarkNews');
    $match = $router->match();
	if(is_array($match)){
		if(is_callable($match['target'])){
			call_user_func_array($match['target'], $match['params']); 
		}else{
			$com = (isset($match['params']['com'])) ? htmlspecialchars($match['params']['com']) : htmlspecialchars($match['target']);
			$get_page = isset($_GET['p']) ? htmlspecialchars($_GET['p']) : 1;
		}
	}else{
		header($_SERVER["SERVER_PROTOCOL"].'404 Not Found');
		include("404.php");
		exit;
	}

    /* Setting */
    $sqlCache = "select * from #_setting";
    $setting = $cache->getCache($sqlCache,'fetch',600);
    $optsetting = json_decode($setting['options'],true);

    /* Lang */
    $_SESSION['lang'] = (isset($_SESSION['lang'])) ? $_SESSION['lang']:'vi';
    if(isset($match['params']['lang'])) $_SESSION['lang'] = $match['params']['lang'];
    else if(!isset($_SESSION['lang']) && !isset($match['params']['lang'])) $_SESSION['lang'] = $optsetting['lang_default'];
    $lang = $_SESSION['lang'];

    /* Slug lang */
    $sluglang = 'tenkhongdauvi';

    /* SEO Lang */
    $seolang = "vi";

    /* Require datas */
    require_once LIBRARIES."lang/lang$lang.php";
    require_once SOURCES."allpage.php";

	/* Tối ưu link */
	$requick = array(


		array("tbl"=>"product_list","field"=>"idl","source"=>"product","com"=>"tour-du-lich","type"=>"tour-du-lich"),
		array("tbl"=>"product","field"=>"id","source"=>"product","com"=>"tour-du-lich","type"=>"tour-du-lich",'menu'=>false),

		array("tbl"=>"product_list","field"=>"idl","source"=>"product","com"=>"nha-hang","type"=>"nha-hang"),
		array("tbl"=>"product","field"=>"id","source"=>"product","com"=>"nha-hang","type"=>"nha-hang",'menu'=>true),

		array("tbl"=>"product_list","field"=>"idl","source"=>"product","com"=>"khach-san","type"=>"khach-san"),
		array("tbl"=>"product","field"=>"id","source"=>"product","com"=>"khach-san","type"=>"khach-san",'menu'=>true),

		array("tbl"=>"news_list","field"=>"idl","source"=>"news","com"=>"chuyen-du-lich","type"=>"chu-de-du-lich"),
		array("tbl"=>"news","field"=>"id","source"=>"news","com"=>"chuyen-du-lich","type"=>"chu-de-du-lich",'menu'=>true),

		array("tbl"=>"news","field"=>"id","source"=>"news","com"=>"tin-tuc","type"=>"tin-tuc",'menu'=>true),

		array("tbl"=>"static","field"=>"id","source"=>"static","com"=>"dat-ve-xe","type"=>"dat-ve-xe",'menu'=>true),
		array("tbl"=>"","field"=>"id","source"=>"","com"=>"lien-he","type"=>"",'menu'=>true),
	);

	/* Find data */
	if($com != 'tim-kiem' && $com != 'account' && $com != 'sitemap')
	{
		foreach($requick as $k => $v)
		{
			$url_tbl = $v['tbl'];
			$url_tbltag = (isset($v['tbltag'])) ? $v['tbltag']:'';
			$url_type = $v['type'];
			$url_field = $v['field'];
			$url_com = $v['com'];
			
			if($url_tbl!='' && $url_tbl!='static' && $url_tbl!='photo')
			{
				$row = $d->rawQueryOne("select id from #_$url_tbl where $sluglang = ? and type = ? and hienthi=1",array($com,$url_type));
				
				if($row['id'])
				{
					$_GET[$url_field] = $row['id'];
					$com = $url_com;
					break;
				}
			}
		}
	}

	/* Switch coms */
	switch($com)
	{
		case 'lien-he':
			$source = "contact";
			$template = "contact/contact";
			$seo->setSeo('type','object');
			$type = 'lienhe';
			$title_crumb = lienhe;
			break;

		case 'dat-ve-xe':
			$source = "static";
			$template = "static/datvexe";
			$type = $com;
			$seo->setSeo('type','article');
			$title_crumb = 'Đặt vé xe';
			break;

		case 'tour-du-lich':
			$source = "product";
			$template = isset($_GET['id']) ? "tour/tour_detail" : "tour/tour";
			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");
			$type = $com;
			$title_crumb = 'Giới thiệu';
			break;

		case 'tin-tuc':
			$source = "news";
			$template = isset($_GET['id']) ? "news/news_detail" : "news/news";
			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");
			$type = $com;
			$title_crumb = tintuc;
			break;

		case 'chuyen-du-lich':
			$source = "news";
			$template = isset($_GET['id']) ? "chude/chude_detail" : "chude/chude";
			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");
			$type ='chu-de-du-lich';
			$title_crumb = 'Chuyến du lịch';
			break;

		case 'nha-hang':
			$source = "nhahang";
			$template = isset($_GET['idl']) ? "nhahang/nhahang_detail" : "nhahang/nhahang";
			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");
			$type = $com;
			$title_crumb = 'Nhà hàng';
			break;

		case 'khach-san':
			$source = "khachsan";
			$template = isset($_GET['idl']) ? "khachsan/khachsan_detail" : "khachsan/khachsan";
			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");
			$type = $com;
			$title_crumb = 'Khách sạn';
			break;

		case 'sitemap':
			include_once LIBRARIES."sitemap.php";
			exit();
			
		case '':
		case 'index':
			$source = "index";
			$template ="layout/index";
			$seo->setSeo('type','website');
			break;

		default: 
			header('HTTP/1.0 404 Not Found', true, 404);
			include("404.php");
			exit();
	}

	/* Include sources */
	if($source!='') include SOURCES.$source.".php";
	if($template=='')
	{
		header('HTTP/1.0 404 Not Found', true, 404);
		include("404.php");
		exit();
	}
?>