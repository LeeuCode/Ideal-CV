<?php 
// $_db = new DB();
$education_experience_projects = $db->table('education_experience_projects')->get();
$education_section_title  = get_option($education_experience_projects->education_section_title);
$education_title  = get_option($education_experience_projects->education_title);
$education_name = get_option($education_experience_projects->education_name);
$education_description  = get_option($education_experience_projects->education_description);
$experience_section_title  = get_option($education_experience_projects->experience_section_title);
$experience_title = get_option($education_experience_projects->experience_title);
$experience_name  = get_option($education_experience_projects->experience_name);
$experience_description  = get_option($education_experience_projects->experience_description);
$project_section_title = get_option($education_experience_projects->project_section_title);
$project_image  = get_option($education_experience_projects->project_image);
$project_title  = get_option($education_experience_projects->project_title);
$background_type  = get_option($education_experience_projects->background_type);
$bakground_value  = get_option($education_experience_projects->bakground_value);
$background_color = get_option($education_experience_projects->background_color);

?>

<li class="agileits" style="<?= ($background_type == "img") ? 'background-image:url('.$bakground_value .');' : 'background-color:'.$background_color.';' ; ?>">
<!-- work -->
<div class="work agileits-w3layouts">
    <div class="container">
        <div class="col-md-6 work-agile-left">
            
            <?php require get_directory_path().'experience.php'; ?>

            <?php require get_directory_path().'education.php'; ?>
            
        </div>
        <div class="col-md-6 work-agile-right">

            <?php require get_directory_path().'projects.php'; ?>
            
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //work -->
</li>