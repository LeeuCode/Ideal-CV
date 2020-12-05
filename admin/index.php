<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if(!defined('DS'))
define('DS',DIRECTORY_SEPARATOR);

// Load Composer's autoloader
require dirname(__DIR__).DS.'vendor/autoload.php';

// Load helper functions file
require dirname(__DIR__).DS.'core'.DS.'helper.php';

if(!extension_loaded('pdo')) {
    return redirect('/install/');
    die();
}

$db = new DB();

if($db->is_connection() != true) :

    return redirect('/install/');
    die();

endif;



$db_setting = new DB();
$language =  $db_setting->table('setting')->get()->language;

get_lang($language);


$fonts = file_get_contents(Enqueue('/admin/js/font-awesome-4.7.0.json'));

$icon = json_decode($fonts);


$url = (isset($_GET['url'])) ? filter_var($_GET['url'],FILTER_SANITIZE_STRING) : false;
$file = get_admin_template_directory().$url.'.php';

if($url != false) :
    if(file_exists($file)) :
        include $file;
    else :
        echo "no";
    endif;
else :
    include get_admin_template_directory().'index.php';
endif;


