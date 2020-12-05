<?php 

$title = "IDEAL C.V | ".$lang['setting'];
require get_admin_template_directory().'header.php'; 

?>


<?php 

$setting = $db->table('setting')->get();
$favicon = get_option(@$setting->favicon);
$site_name = get_option(@$setting->site_name);
$admin_name = get_option(@$setting->admin_name);
$admin_password = get_option(@$setting->admin_password);
$site_description = get_option(@$setting->site_description);
$site_tags = get_option(@$setting->site_tags);
$language = get_option(@$setting->language);
$site_status = get_option(@$setting->site_status);
$primary_color = get_option(@$setting->primary_color);
$secondary_color = get_option(@$setting->secondary_color);
$headings_color = get_option(@$setting->headings_color);

?>

<form action="<?= home_url() ?>/admin/?url=save&data=setting" method="post" >
    <!-- Content Header (Page header) -->
    <div class="col-md-12" style="margin-bottom:2%;">
      <section class="content-header">
        <ol class="breadcrumb">
          <li><a href="<?= home_url().'/admin/' ?>"><i class="fa fa-dashboard"></i><?= $lang['home'] ?></a></li>
          <li class="active"><?= $lang['setting']; ?></li>
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

      <div class="col-md-12">
        <!-- Section Settings -->
        <?php require get_admin_template_parts().'section-settings.php'; ?>
        <!-- /.Section Settings -->
      </div>
    </section>
    <!-- /.content -->
</form>

<?php require get_admin_template_directory().'footer.php'; ?>