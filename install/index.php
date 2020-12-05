<?php

// Error Mode 
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if(!defined('DS'))
define('DS',DIRECTORY_SEPARATOR);

require dirname(dirname(__FILE__)).DS.'core'.DS.'helper.php';

if(extension_loaded('pdo')) {

    // create new object of DataBase (DB) class .
    $db = new DB();

    // check if database is connection , if connected it'll redirect to home page . 
    if($db->is_connection()){
        if($db->table('setting')->get() != false){
            $db->reset();
            $setting = $db->table('setting')->get();
            if(!empty($setting->site_name) && !empty($setting->admin_name) && !empty($setting->admin_password) && !isset($_SESSION['_TOKEN'])){
                unset($_SESSION['_TOKEN']);
                redirect('/');
            }
        }
    }
}


$language = 'en';

get_lang($language);


$_error = false;

// check php version greater than 5.3.2V  .
if(PHP_VERSION_ID > 50329){ $php_version = 'fa-check-circle'; }else{ $php_version = 'fa-times-circle'; $_error=true ; }
// check if the session start or no .
if(session_id() != '') { $is_session = 'fa-check-circle'; }else{ $is_session = 'fa-times-circle' ; $_error=true ; }
// check PDO extension is exists . 
if(extension_loaded('pdo')) { $exists_pdo = 'fa-check-circle'; }else{ $exists_pdo = 'fa-times-circle' ; $_error=true ; } 
// check GD library is exists .
if(extension_loaded('gd')) { $exists_gd = 'fa-check-circle'; }else{ $exists_gd = 'fa-times-circle'; $_error=true; }
// check config.php is writable .
if(is_writable(dirname(dirname(__FILE__)).DS.'config.php')){ $config_folder = 'fa-check-circle'; }else{ $config_folder = 'fa-times-circle' ; $_error=true ; }
// check Source folder is writable .
if(is_writable(dirname(dirname(__FILE__)).DS.'public'.DS.'source'.DS)){ $source_folder = 'fa-check-circle'; }else{ $source_folder = 'fa-times-circle' ; $_error=true ; }
// check Thumbs folder is writable .
if(is_writable(dirname(dirname(__FILE__)).DS.'public'.DS.'thumbs'.DS)){ $thumbs_folder = 'fa-check-circle'; }else{ $thumbs_folder = 'fa-times-circle' ; $_error=true ; }


$url = (isset($_GET['url'])) ? filter_var($_GET['url'],FILTER_SANITIZE_STRING) : false;
$file = get_install_directory().$url.'.php';

if($url != false) :
    if(file_exists($file)) :
        include $file;
    else :
        echo "no";
    endif;
else:
    require get_install_directory().'step-one.php';
endif;