<?php 

$title = "IDEAL C.V | ".$lang['contact me'];
require get_admin_template_directory().'header.php'; 

?>

<?php 

$contact_me = $db->table('contact_me')->get();
$phone = get_option($contact_me->phone);
$section_title = get_option($contact_me->section_title);
$email = get_option($contact_me->email);
$google_map = get_option($contact_me->google_map);
$country = get_option($contact_me->country);
$city = get_option($contact_me->city);
$street = get_option($contact_me->street);
$smtp_host = get_option($contact_me->smtp_host);
$smtp_username = get_option($contact_me->smtp_username);
$smtp_password = get_option($contact_me->smtp_password);
$smtp_secure = get_option($contact_me->smtp_secure);
$smtp_port = get_option($contact_me->smtp_port);
$background_type = get_option($contact_me->background_type);
$bakground_value = get_option($contact_me->bakground_value);
$background_color = get_option($contact_me->background_color);

?>

<form action="<?= home_url() ?>/admin/?url=save&data=contact" method="post" >

  <!-- Content Header (Page header) -->
  <div class="col-md-12" style="margin-bottom:2%;">
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="<?= home_url().'/admin/' ?>"><i class="fa fa-dashboard"></i><?= $lang['home'] ?></a></li>
        <li class="active"><?= $lang['contact me']; ?></li>
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

    <div class="col-md-6">
      <!-- Section Settings -->
      <?php require get_admin_template_parts().'section-contact.php'; ?>
      <!-- /.Section Settings -->
    </div>
    
    <div class="col-md-6">
      <!-- Section  SMTP Mail -->
      <?php require get_admin_template_parts().'section-stmp.php'; ?>
      <!-- /.Section SMTP Mail -->
    </div>

    <div class="col-md-6">
      <!-- background & color style  -->
      <?php require get_admin_template_parts().'section-background.php'; ?>
      <!-- background & color style -->
    </div>

  </section>
  <!-- /.content -->
</form>

<?php require get_admin_template_directory().'footer.php'; ?>