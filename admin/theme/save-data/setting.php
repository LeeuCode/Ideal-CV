<?php 

$data['favicon'] = input_exists('favicon');
$data['site_name'] = input_exists('site_name');
$data['admin_name'] = input_exists('admin_name');
$data['admin_password'] = input_exists('admin_password');
$data['site_description'] = input_exists('site_description');
$data['site_tags'] = input_exists('site_tags');
$data['language'] = input_exists('language');
$data['site_status'] = input_exists('site_status');
$data['primary_color'] = input_exists('primary_color');
$data['secondary_color'] = input_exists('secondary_color');
$data['headings_color'] = input_exists('headings_color');
$setting_count = $db->table('setting')->count();

if($setting_count > 0){

    $DB_setting = new DB();
    $setting = $DB_setting->table('setting')->get();

    $save = $db->update('setting',$setting->id,$data);

    if($save == true){
        $_SESSION['Success'] = $lang['Data has been updated successfully'];
    }else{
        $_SESSION['Error'] = $lang['Data is not updated, we have a problem during the update'];
    }
    
}else{

    $save = $db->insert('setting',$data);

    if($save == true){
        $_SESSION['Success'] = $lang['Data has been updated successfully'];
    }else{
        $_SESSION['Error'] = $lang['Data is not updated, we have a problem during the update'];
    }
}

back();