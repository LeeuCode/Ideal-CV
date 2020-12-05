<?php 

// $conn_db = new DB();
$contact_me = $db->table('contact_me')->get();
$section_title = get_option($contact_me->section_title);
$phone = get_option($contact_me->phone);
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


if(isset($_POST['submit'])){

    $save_page = $_GET['data'];
    require get_directory_path().$save_page.'.php';
}
    

?>


<li class="agileits" style="<?= ($background_type == "img") ? 'background-image:url('.$bakground_value .');' : 'background-color:'.$background_color.';' ; ?>" >
<!-- contact -->
<div class="contact agileits-w3layouts">
    <div class="container">
        <h3 class="agileits-title"><?= $section_title; ?></h3>
        <div class="contact-w3lsrow">
            <div id="form-messages" class="col-md-12" style="display:none;">
                
            </div>
            <div class="col-md-6 contact-wthree-left">
                <?= $google_map; ?>
                <div class="faddressw3-agileinfo">
                    <div class="faddress-w3left">
                        <p><?= $street; ?>, <?= $city; ?>,<br> <?= $country;  ?> </p>
                    </div>
                    <div class="faddress-w3right">
                        <p>Call us :  <?= $phone; ?></p>
                        <p>E-mail : <a href="mailto:<?= $email; ?>"><?= $email; ?></a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-6 contact-wthree-right">
                <form id="ajax-contact"  action="<?= home_url().'/?data=send-mail'; ?>"  method="post">
                    <input id="name" type="text" name="name" placeholder="Name" required="">
                    <input id="email" type="email" class="email" name="email" placeholder="Email" required="">
                    <input id="phone" type="text" class="phone" name="phone" placeholder="Phone" required="">
                    <textarea id="message" name="message" placeholder="message" required=""></textarea>
                    <button id="button" name="submit" type="submit" >
                        <i class="fa fa-send"></i>
                        Send
                    </button>
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- footer -->
        <div class="agile-footer">
            <p>© <?= date('Y'); ?> <?= $site_name; ?> . All rights reserved | Programming by  <a href="#" target="_blank">LeeuCode</a> </p>
        </div>
        <!-- //footer -->
    </div>
</div>
<!-- //contact -->
</li>