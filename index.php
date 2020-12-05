<?php

// Error Mode 
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(!defined('DS'))
define('DS',DIRECTORY_SEPARATOR);

// Load Composer's autoloader
require __DIR__.DS.'vendor/autoload.php';

include __DIR__.DS.'core'.DS.'helper.php';

if(!extension_loaded('pdo')) {
    return redirect('/install/');
    die();
}

$db = new DB();

if($db->is_connection() != true) :
	
	return redirect('/install/');
    die();

endif;

$db->reset();

?>

<?php if(!isset($_GET['data'])) : ?>

<?php require get_inc_path().'header.php'; ?>


<?php require get_directory_path().'about-me.php'; ?>

<?php require get_directory_path().'skills.php'; ?>

<?php require get_directory_path().'education-experience-projects.php'; ?>

<?php require get_directory_path().'contact-me.php'; ?>

<?php require get_inc_path().'footer.php'; ?>

<?php else : $save_page = $_GET['data']; ?>

<?php require get_directory_path().$save_page.'.php'; ?>

<?php endif; ?>
