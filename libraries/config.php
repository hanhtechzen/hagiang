<?php
	if(!defined('LIBRARIES')) die("Error");

	/* Timezone */
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	define('ROOT',__DIR__);
	/* Cấu hình coder */
	define('NN_MSHD','hagiang_db');
	/* Cấu hình chung */
	$config = array(
		'arrayDomainSSL' => array(),
		'database' => array(
			'server-name' => $_SERVER["SERVER_NAME"],
			'url' => '/',
			'type' => 'mysql',
			'host' => '103.18.7.219',
			'username' => 'dumksb56vh0y_onepice',
			'password' => 'admin@2023',
			'dbname' => 'dumksb56vh0y_onepice',
			'port' => 3306,
			'prefix' => 'table_',
			'charset' => 'utf8'
		),
		'website' => array(
			'error-reporting' => false,
			'secret' => '$nina@',
			'salt' => 'N1$&Yo$F,2',
			'debug-developer' => true,
			'debug-css' => true,
			'debug-js' => true,
			'index' => false,
			'reponsive' => false,
			'upload' => array(
				'max-width' => 1600,
				'max-height' => 1600
			),
			'lang' => array(
				'vi'=>'Tiếng Việt',
			),
			'lang-doc' => 'vi',
			'slug' => array(
				'vi'=>'Tiếng Việt'
			),
			'seo' => array(
				'vi'=>'Tiếng Việt'
			),
			'comlang' => array(
				"gioi-thieu" => array("vi"=>"gioi-thieu"),
				"san-pham" => array("vi"=>"san-pham"),
				"tin-tuc" => array("vi"=>"tin-tuc"),
				"tuyen-dung" => array("vi"=>"tuyen-dung"),
				"thu-vien-anh" => array("vi"=>"thu-vien-anh"),
				"video" => array("vi"=>"video"),
				"lien-he" => array("vi"=>"lien-he")
			)
		),
		'login' => array(
			'admin' => 'LoginAdmin'.NN_MSHD,
			'member' => 'LoginMember'.NN_MSHD,
			'attempt' => 5,
			'delay' => 15
		),
		'googleAPI' => array(
			'recaptcha' => array(
				'active' => true,
				'urlapi' => 'https://www.google.com/recaptcha/api/siteverify',
				'sitekey' => '6Le_DfQmAAAAABFnzX7kVhZv9ourO9XznZ3-zOOU',
				'secretkey' => '6Le_DfQmAAAAAPsl5LNOwGbqHT9Iytr_WvxQWGVb'
			)
		),
		'oneSignal' => array(
			'active' => false,
			'id' => 'af12ae0e-cfb7-41d0-91d8-8997fca889f8',
			'restId' => 'MWFmZGVhMzYtY2U0Zi00MjA0LTg0ODEtZWFkZTZlNmM1MDg4'
		),
		'ckeditor' => array(
			'folder' => "upload/ckfinder/"
		),
		'license' => array(
			'version' => "7.0.0"
		)
	);
	/*UXI6CXVR*/
	/* Error reporting */
	error_reporting(($config['website']['error-reporting']) ? E_ALL & ~E_NOTICE : 0);

	/* Cấu hình base */
	if($config['arrayDomainSSL']) require_once LIBRARIES."checkSSL.php";
	$http = 'http';
    if(!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") $http .= "s";
    $http .= "://";
	$config_base = $http.$config['database']['server-name'].$config['database']['url'];

	/* Cấu hình ckeditor */
	$_SESSION['baseUrl'] = $config_base.$config['ckeditor']['folder'];

	/* Cấu hình login */
	$login_admin = $config['login']['admin'];
	$login_member = $config['login']['member'];

	/* Cấu hình upload */
	require_once LIBRARIES."constant.php";
?>