<?php
include $_SERVER['DOCUMENT_ROOT'].'/Rebellion/connect.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
if (isset($_POST['submit'])) {
      $email = $_POST['email'];
      $query = "SELECT * FROM tb_laundry WHERE email='$email'";
      $res = mysqli_query($conn, $query);
      $data = mysqli_fetch_array($res);
      $id = $data['id_laundry'];
      $nama = $data['nama_laundry'];
      $emailData = $data['email'];
      $url = 'http://'.$_SERVER['SERVER_NAME'].'/Rebellion/reset.php?id_laundry='.$id.'&email='.$emailData;
      $message = 'Link Reset.<br>'.$url;
      if ($email == $emailData){
                  $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
                  $mail->IsSMTP(); // telling the class to use SMTP
            try {
                 //$mail->Host       = "mail.gmail.com"; // SMTP server
                  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
                  $mail->SMTPAuth   = true;                  // enable SMTP authentication
                  $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
                  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
                  $mail->Port       = 587;   // set the SMTP port for the GMAIL server
                  $mail->SMTPKeepAlive = true;
                  $mail->Mailer = "smtp";
                  $mail->Username   = "ichijouekaru04@gmail.com";       // GMAIL username
                  $mail->Password   = "sayangruka04";                     // GMAIL password
                  $mail->AddAddress($email, $nama);
                  $mail->SetFrom('ichijouekaru04@gmail.com', 'Reset Password');
                  $mail->Subject = 'Password baru';
                  $mail->AltBody = 'Halo' .$email.'lakukan reset' .$message; // optional - MsgHTML will create an alternate automatically
                  $mail->MsgHTML($message);
                  $mail->Send();
                  echo "Email Sent OK</p>\n";
                  // header("location: ../test.html");
            } catch (phpmailerException $e) {
                  echo $e->errorMessage(); //Pretty error messages from PHPMailer
            } catch (Exception $e) {
                  echo $e->getMessage(); //Boring error messages from anything else!
            } finally {
            	header("location:forgotpass.php?pesan=sukses");
            }
      }else{
            echo'Email tidak terdaftar';
      }
}
?>