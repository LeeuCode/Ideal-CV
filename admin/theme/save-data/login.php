<?php 

if(isset($_POST['submit'])){

  $username = $_POST['username'];
  $password = $_POST['password'];

  $_login = $db->table('setting')
  ->where("admin_name = '".$username."' AND admin_password = '".$password."'")
  ->count();

  $db->table('setting')->reset();

  if($_login > 0) {

    $setting = $db->table('setting')->get();
    $_SESSION['login'] = $setting->admin_name;

    redirect('/admin/');

  }else{
    $_SESSION['Error'] = $lang['User name or password error'];
    
    redirect('/admin/?url=login');
    
  }

}
