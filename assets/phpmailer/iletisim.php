<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Load Composer's autoloader
require 'vendor/autoload.php';
if($_POST){ 
 
    $adsoyadt = $_POST['adsoyadt']; 
    $emailt = $_POST['emailt']; 
    $phonet = $_POST['phonet'];
    $pageurl = $_POST['pageurl'];

  
 
	$icerik = "<p>Ad Soyad: ".$adsoyadt."</p><p>Email: ".$emailt."</p><p>Telefon: ".$phonet."</p><p>Gönderilen Sayfa: ".$pageurl."</p>";
    $mail = new PHPMailer(true);                            
try {
 //Server Ayarları 
 $mail->CharSet  ="utf-8";
 $mail->SMTPDebug=3;
 $mail->isSMTP();
 
 
 $mail->SMTPAuth = true;
 $mail->Host = 'smtp.yandex.com.tr';
    $mail->Username = 'es.mailer@yandex.com';
    $mail->Password = 'ESmailer00';
    $mail->SMTPSecure = 'ssl';
	// Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;    




    //Recipients
    $mail->setFrom( $mail->Username , 'faceaestheticsturkey - Landing Page Free Consultation Form');
    $konu='faceaestheticsturkey - Landing Page Free Consultation Form';
 
 
      $mail->addAddress('info@faceaestheticsturkey.co', $_POST["name"]); 
   //$mail->addAddress('info@panoramikdis.com.tr', $_POST["name"]); 
 
       // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information'); 
	// $mail->addCC('emresezer1903@gmail.com', $_POST["adsoyad"]);
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content

 

       /* if(is_array($_FILES)) {
            $mail->AddAttachment($_FILES['doctorReports']['tmp_name'],$_FILES['doctorReports']['name']); 
            } */

   
        

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $konu;
    $mail->Body    = $icerik; 

    $mail->send();
    echo true;
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
}
else {
	echo " post edilmedi";
}