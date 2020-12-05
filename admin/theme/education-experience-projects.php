<?php 

$title = "IDEAL C.V | ".$lang['education & experience & projects'];
require get_admin_template_directory().'header.php'; 

?> 

<?php 

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

<form action="<?= home_url(); ?>/admin/?url=save&data=education-experience-projects" method="post" >

  <!-- Content Header (Page header) -->
  <div class="col-md-12" style="margin-bottom:2%;">
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="<?= home_url().'/admin/' ?>"><i class="fa fa-dashboard"></i><?= $lang['home'] ?></a></li>
        <li class="active"><?= $lang['education & experience & projects']; ?></li>
      </ol>
      <h1>
        <button name="submit" type="submit" class="btn pull-right btn-success">
        <i class="fa fa-save"></i>
        <?= $lang['save']; ?>
        </button>
      </h1>
    </section>
  </div>

  <!-- Main content -->
  <section class="content">

    <div class="col-md-12">
      <?php require_once get_admin_template_directory().'alert.php'; ?>
    </div>
    <!--  -->
    <div class="col-md-6">
      <!-- Education  -->
      <?php require get_admin_template_parts().'section-education.php'; ?>
      <!-- /.Education -->

      <!-- background & color style  -->
      <?php require get_admin_template_parts().'section-projects.php'; ?>
      <!-- background & color style -->

    </div>
    <!--  -->
    <div class="col-md-6">
      <!-- Experience  -->
      <?php require get_admin_template_parts().'section-experience.php'; ?>
      <!-- /.Experience -->
      
      <!-- background & color style  -->
      <?php require get_admin_template_parts().'section-background.php'; ?>
      <!-- background & color style -->      
    </div>
  </section>
  <!-- /.content -->
</form>

<?php require get_admin_template_directory().'footer.php'; ?>