<?php 

$data['education_section_title'] = input_exists('education_section_title');
$data['education_title'] = input_exists('education_title');
$data['education_name'] = input_exists('education_name');
$data['education_description'] = input_exists('education_description');
$data['experience_section_title'] = input_exists('experience_section_title');
$data['experience_title'] = input_exists('experience_title');
$data['experience_name'] = input_exists('experience_name');
$data['experience_description'] = input_exists('experience_description');
$data['project_section_title'] = input_exists('project_section_title');
$data['project_image'] = input_exists('project_image');
$data['project_title'] = input_exists('project_title');
$data['background_type'] = input_exists('background_type');
$data['bakground_value'] = input_exists('bakground_value');
$data['background_color'] = input_exists('background_color');


$count = $db->table('education_experience_projects')->count();

if($count > 0){

    $DB_education_experience_projects = new DB();
    $education_experience_projects = $DB_education_experience_projects->table('education_experience_projects')->get();
    
    $save = $db->update('education_experience_projects',$education_experience_projects->id,$data);

    if($save == true){
        $_SESSION['Success'] = $lang['Data has been updated successfully'];
    }else{
        $_SESSION['Error'] = $lang['Data is not updated, we have a problem during the update'];
    }

}else{

    $save = $db->insert('education_experience_projects',$data);

    if($save == true){
        $_SESSION['Success'] = $lang['Data has been updated successfully'];
    }else{
        $_SESSION['Error'] = $lang['Data is not updated, we have a problem during the update'];
    }
}

back();

?>