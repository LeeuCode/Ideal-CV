<?php

date_default_timezone_set('Africa/Lagos');

function my_autoloader($class) {
    $file = dirname(__DIR__).DS.'core'.DS. $class .'.php';
    if(file_exists($file)){
        require $file;
    }
  
  
}
spl_autoload_register('my_autoloader');

/**
 *
 * Get Directory Path .
 *
 */
function get_directory_path()
{
  return dirname(dirname(__FILE__)).DS;
}

/**
 *
 * Get Inc Directory Path .
 *
 */
function get_inc_path()
{
  return dirname(dirname(__FILE__)).DS.'inc'.DS;
}

/**
 *
 * Get Admin Template Directory Path .
 *
 */
function get_admin_template_directory()
{
  return dirname(dirname(__FILE__)).DS.'admin'.DS.'theme'.DS;
}

/**
 *
 * Get Admin Template Parts Directory Path .
 *
 */
function get_admin_template_parts()
{
  return dirname(dirname(__FILE__)).DS.'admin'.DS.'theme'.DS.'parts'.DS;
}
/**
 *
 * Get Admin Template Parts Directory Path .
 *
 */
function get_install_directory()
{
  return dirname(dirname(__FILE__)).DS.'install'.DS;
}


/**
 *
 * Get the main website link .
 *
 */
function home_url($atRoot=FALSE, $atCore=FALSE, $parse=FALSE){
    if (isset($_SERVER['HTTP_HOST'])) {
        $http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
        $hostname = $_SERVER['HTTP_HOST'];
        $dir =  str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

        $core = preg_split('@/@', str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(dirname(__FILE__))), NULL, PREG_SPLIT_NO_EMPTY);
        $core = $core[0];

        $tmplt = $atRoot ? ($atCore ? "%s://%s/%s/" : "%s://%s/") : ($atCore ? "%s://%s/%s/" : "%s://%s%s");
        $end = $atRoot ? ($atCore ? $core : $hostname) : ($atCore ? $core : $dir);
        $base_url = sprintf( $tmplt, $http, $hostname, $end );
    }
    else $base_url = 'http://localhost/';

    if ($parse) {
        $base_url = parse_url($base_url);
        if (isset($base_url['path'])) if ($base_url['path'] == '/') $base_url['path'] = '';
    }

    return trim(str_replace(array('admin','install'),'',$base_url),'/');
}

/**
 *
 * Get style & script Directory Path URI .
 *
 */
function Enqueue($path)
{
  return home_url().'/public'.$path;
}



/**
 *
 * Calls the required language file .
 *
 */
function get_lang($filename){

  global $lang;

  require get_directory_path()."language".DS.$filename.'.php';

}

/**
 *
 * This function is Works on color gradation .
 *
 */
function hexToRgb($hex, $alpha = false) {
   $hex      = str_replace('#', '', $hex);
   $length   = strlen($hex);
   $rgb['r'] = hexdec($length == 6 ? substr($hex, 0, 2) : ($length == 3 ? str_repeat(substr($hex, 0, 1), 2) : 0));
   $rgb['g'] = hexdec($length == 6 ? substr($hex, 2, 2) : ($length == 3 ? str_repeat(substr($hex, 1, 1), 2) : 0));
   $rgb['b'] = hexdec($length == 6 ? substr($hex, 4, 2) : ($length == 3 ? str_repeat(substr($hex, 2, 1), 2) : 0));
   if ( $alpha ) {
      $rgb['a'] = $alpha;
   }
   return $rgb;
}

/**
 *
 * This function is Works on redirect Custom URI .
 *
 */
function redirect($url){
  return header('Location: '.home_url().$url);
}

/**
 *
 * This function is Works on redirect to the Previous page .
 *
 */
function back(){
  return header('Location: ' . $_SERVER['HTTP_REFERER']);
}

/**
 *
 * This function is Works on Check for a value in the field or not .
 *
 */
function input_exists($val){
  if(isset($_POST[$val])){
    if(is_array($_POST[$val])){
      return serialize($_POST[$val]);
    }else{
      return $_POST[$val];
    }
  }else{
    return '';
  } 
}

/**
 *
 * This function is Works on Check for a value in the database or not .
 * This function unserialize if data is array .
 *
 */
function get_option($var,$val = ""){

  if(isset($var) & !empty($var)) { 

    if(@unserialize($var) != false && is_array(unserialize($var))){
      return unserialize($var);
    }else{
      return $var;
    }

  }else{

    return $val;
  }

}

function icon(){

  return array (
  'icon' => 'icon',
  'facebook' => '',
  'twitter' => '',
  'youtube' => '',
  'youtube-play' => '',
  'instagram' => '',
  'google-plus' => '',
  'linkedin' => '',
  'tumblr' => '',
  'behance' => '',
  'digg' => '',
  'dribbble' => '',
  'github' => '',
  'github-alt' => '',
  'pinterest-p' => '',
  'soundcloud' => '',
  'stack-overflow' => '',
  'vimeo' => '',
  'vk' => '',
  'weibo' => '',
);

}

function languages(){


  return array (

    
    'en' => 'English',
    'de' => 'German',
    'pt' => 'Portuguese',
    'zh-CHS' => 'Chinese Simplified',
    'fr' => 'French',
    'it' => 'Italian',
    'ja' => 'Japanese',
    'ro' => 'Romanian',
    'ru' => 'Russian',
    'es' => 'Spanish',
    'tr' => 'Turkish',
  );
  
}

function db_connection($dbname,$username,$password,$servername){
  try{
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    return true;
  }
  catch(PDOException $e){
    return false;
    // echo "Connection failed: " . $e->getMessage();
  }
}