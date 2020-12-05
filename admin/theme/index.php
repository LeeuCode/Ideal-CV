<?php 

$title = "IDEAL C.V"." | ".$lang['about me'];
require get_admin_template_directory().'header.php'; 

?> 

<?php

$about = $db->table('about')->get();
$additional_id = get_option($about->additional_id);
$social_media = get_option($about->social_media);
$socail_url = get_option($about->socail_url);
$background_type = get_option($about->background_type);
$bakground_value = get_option($about->bakground_value);
$background_color = get_option($about->background_color);

?>

<form action="<?= home_url() ?>/admin/?url=save&data=about" method="post" >

      <!-- Content Header (Page header) -->
      <div class="col-md-12" style="margin-bottom:2%;">
        <section class="content-header">
          <ol class="breadcrumb">
            <li><a href="<?= home_url().'/admin/' ?>"><i class="fa fa-dashboard"></i><?= $lang['home'] ?></a></li>
            <li class="active"><?= $lang['about me']; ?></li>
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

        <div class="col-md-7">
          <!-- Section About Information -->
          <?php require get_admin_template_parts().'section-about-information.php'; ?>
          <!-- /.Section About Information -->

          <!-- additional information -->
          <?php require get_admin_template_parts().'section-additional-information.php'; ?>
          <!-- additional information -->

        </div>
      
        <div class="col-md-5">
          <!-- Socail Madia -->
          <?php require get_admin_template_parts().'social-madia.php'; ?>
          <!-- /.Socail Madia -->

          <!-- background & color style  -->
          <?php require get_admin_template_parts().'section-background.php'; ?>
          <!-- background & color style -->

        </div>
    </section>
    <!-- /.content -->
</form>

<?php require get_admin_template_directory().'footer.php'; ?>
