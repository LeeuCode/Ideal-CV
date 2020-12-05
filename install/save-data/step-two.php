<?php 

if(isset($_POST['submit'])){

    $_dbname = $_POST["db_name"];
    $_username = $_POST["db_user"];
    $_password = $_POST["db_pass"];
    $_servername = $_POST["db_host"];

    $is_db_conn = db_connection($_dbname,$_username,$_password,$_servername);

    if($is_db_conn == true){
        
        $file = get_directory_path().'config.php';
        $get_content_file = file_get_contents($file);

        require $file;

        $key_replace = [$database,$username,$password,$servername];
        $value_replace = [$_dbname,$_username,$_password,$_servername]; 
        $file_replace = str_replace($key_replace,$value_replace, $get_content_file);

        file_put_contents($file,$file_replace);
        
        $_SESSION['_TOKEN'] = "YES";

        redirect('/install/?url=step-three');
    }else{
        echo "false";
    }
}
