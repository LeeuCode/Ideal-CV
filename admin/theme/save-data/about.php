<?php 

$data['user_name'] = input_exists('user_name');
$data['section_title'] = input_exists('section_title');
$data['section_content'] = input_exists('section_content');
$data['image'] = input_exists('image');
$data['additional_id'] = input_exists('additional_id');
$data['additional_icon'] = input_exists('additional_icon');
$data['additional_title_block'] = input_exists('additional_title_block');
$data['additional_title'] = input_exists('additional_title');
$data['additional_description'] = input_exists('additional_description');
$data['background_type'] = input_exists('background_type');
$data['bakground_value'] = input_exists('bakground_value');
$data['background_color'] = input_exists('background_color');
$data['social_media'] = input_exists('social_media');
$data['socail_url'] = input_exists('socail_url');

$about_count = $db->table('about')->count();

if($about_count > 0){

    $DB_about = new DB();
    $about = $DB_about->table('about')->get();

    $save = $db->update('about',$about->id,$data);

    if($save == true){
        $_SESSION['Success'] = $lang['Data has been updated successfully'];
    }else{
        $_SESSION['Error'] = $lang['Data is not updated, we have a problem during the update'];
    }

}else{

    $save = $db->insert('about',$data);

    if($save == true){
        $_SESSION['Success'] = $lang['Data has been updated successfully'];
    }else{
        $_SESSION['Error'] = $lang['Data is not updated, we have a problem during the update'];
    }

}

back();