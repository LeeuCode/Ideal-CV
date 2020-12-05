<?php 



// if(isset($_POST['submit'])){
    // require dirname(dirname(__FILE__)).DS.'core'.DS.'helper.php';
    $save_page = $_GET['data'];
    include get_install_directory().'save-data'.DS.$save_page.'.php';

// }

?>