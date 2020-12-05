<?php 

if(isset($_POST['submit'])){
    
    $save_page = $_GET['data'];
    include get_admin_template_directory().'save-data'.DS.$save_page.'.php';

}

?>