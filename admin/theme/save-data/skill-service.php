<?php 

$data['section_skill_title'] = input_exists('section_skill_title');
$data['section_skill_content'] = input_exists('section_skill_content');
$data['skill_title'] = input_exists('skill_title');
$data['skill_color'] = input_exists('skill_color');
$data['skill_level'] = input_exists('skill_level');
$data['section_service_title'] = input_exists('section_service_title');
$data['service_icon'] = input_exists('service_icon');
$data['service_title'] = input_exists('service_title');
$data['service_content'] = input_exists('service_content');
$data['background_type'] = input_exists('background_type');
$data['bakground_value'] = input_exists('bakground_value');
$data['background_color'] = input_exists('background_color');


$skills_services_count = $db->table('skills_services')->count();

if($skills_services_count > 0){

    $DB_skills_services = new DB();
    $skills_services = $DB_skills_services->table('skills_services')->get();


    $save = $db->update('skills_services',$skills_services->id,$data);

    if($save == true){
        $_SESSION['Success'] = $lang['Data has been updated successfully'];
    }else{
        $_SESSION['Error'] = $lang['Data is not updated, we have a problem during the update'];
    }
    
}else{

    $save = $db->insert('skills_services',$data);

    if($save == true){
        $_SESSION['Success'] = $lang['Data has been updated successfully'];
    }else{
        $_SESSION['Error'] = $lang['Data is not updated, we have a problem during the update'];
    }
}

back();

?>