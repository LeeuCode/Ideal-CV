<?php 


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    
    
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
    
    
    $name = $_POST['name'];
    $_email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);  // Passing `true` enables exceptions
    try {
    // Server settings
    if(!empty($smtp_host) & !empty($smtp_username) & !empty($smtp_password) & !empty($smtp_secure) &!empty($smtp_port)){
        
        $mail->SMTPDebug = 2;// Enable verbose debug output
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = $smtp_host;  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = $smtp_username; // SMTP username
        $mail->Password = $smtp_password; // SMTP password
        $mail->SMTPSecure = $smtp_secure; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = $smtp_port; // TCP port to connect to
    }

        //Recipients
        $mail->setFrom($_email, $name);
        $mail->addAddress($email, $site_name);     // Add a recipient
        // $mail->addAddress($email);               // Name is optional
        $mail->addReplyTo($email, $site_name);

        //Content
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = $name = $_POST['name'];
        $mail->Body    = $message;
        $mail->AltBody = 'Phone Number : '.$phone;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
    
  
    