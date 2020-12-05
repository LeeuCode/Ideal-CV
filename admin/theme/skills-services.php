<?php 

$skills_services = $db->table('skills_services')->get();
$section_skill_title  = get_option($skills_services->section_skill_title);
$section_skill_content  = get_option($skills_services->section_skill_content);
$skill_title = get_option($skills_services->skill_title);
$skill_color  = get_option($skills_services->skill_color);
$skill_level  = get_option($skills_services->skill_level);
$section_service_title = get_option($skills_services->section_service_title);
$service_icon  = get_option($skills_services->service_icon);
$service_title  = get_option($skills_services->service_title);
$service_content = get_option($skills_services->service_content);
$background_type  = get_option($skills_services->background_type);
$bakground_value  = get_option($skills_services->bakground_value);
$background_color = get_option($skills_services->background_color);

?>

<?php 

$title = "IDEAL C.V | ".$lang['skills & services'];
require get_admin_template_directory().'header.php'; 

?>

  <form action="<?= home_url() ?>/admin/?url=save&data=skill-service" method="post" >
    <!-- Content Header (Page header) -->
    <div class="col-md-12" style="margin-bottom:2%;">
      <section class="content-header">
        <!--  Breadcrumb -->
        <ol class="breadcrumb">
          <li><a href="<?= home_url().'/admin/' ?>"><i class="fa fa-dashboard"></i><?= $lang['home'] ?></a></li>
          <li class="active"><?= $lang['skills & services']; ?></li>
        </ol>
        <!--  /.Breadcrumb -->
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
        <?php require get_admin_template_directory().'alert.php'; ?>
      </div>

      <div class="col-md-7">
        <!-- Section About Information -->
        <?php require get_admin_template_parts().'section-skills.php'; ?>
        <!-- /.Section About Information -->
      </div>
      <div class="col-md-5">
        <!-- background & color style  -->
        <?php require get_admin_template_parts().'section-background.php'; ?>
        <!-- background & color style -->
      </div>
      <div class="col-md-12">
        <?php require get_admin_template_parts().'section-services.php'; ?>
      </div>
  </section>
  <!-- /.content -->
</form>

<?php require get_admin_template_directory().'footer.php'; ?>