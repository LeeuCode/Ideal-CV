<?php 

$data['section_title'] = input_exists('section_title');
$data['phone'] = input_exists('phone');
$data['email'] = input_exists('email');
$data['google_map'] = input_exists('google_map');
$data['country'] = input_exists('country');
$data['city'] = input_exists('city');
$data['street'] = input_exists('street');
$data['smtp_host'] = input_exists('smtp_host');
$data['smtp_username'] = input_exists('smtp_username');
$data['smtp_password'] = input_exists('smtp_password');
$data['smtp_secure'] = input_exists('smtp_secure');
$data['smtp_port'] = input_exists('smtp_port');
$data['background_type'] = input_exists('background_type');
$data['bakground_value'] = input_exists('bakground_value');
$data['background_color'] = input_exists('background_color');

$contact_me_count = $db->table('contact_me')->count();

if($contact_me_count > 0){

    $DB_contact_me = new DB();
    $contact_me = $DB_contact_me->table('contact_me')->get();

    $save = $db->update('contact_me',$contact_me->id,$data);

    if($save == true){
        $_SESSION['Success'] = $lang['Data has been updated successfully'];
    }else{
        $_SESSION['Error'] = $lang['Data is not updated, we have a problem during the update'];
    }

}else{

    $save = $db->insert('contact_me',$data);

    if($save == true){
        $_SESSION['Success'] = $lang['Data has been updated successfully'];
    }else{
        $_SESSION['Error'] = $lang['Data is not updated, we have a problem during the update'];
    }

}

back();