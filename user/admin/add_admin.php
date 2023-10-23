<?php
include("../connection.php");
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
//
// require_once 'vendor/autoload.php';
//
//
// function gen_jwt(){
//   $signing_key = "changeme";
//   $header = [
//       "alg" => "HS512",
//       "typ" => "JWT"
//   ];
//   $header = base64_url_encode(json_encode($header));
//   $payload =  $_POST;
//   $payload = base64_url_encode(json_encode($payload));
//   $signature = base64_url_encode(hash_hmac('sha512', "$header.$payload", $signing_key, true));
//   $jwt = "$header.$payload.$signature";
//   return $jwt;
// }
//
// /**
// * per https://stackoverflow.com/questions/2040240/php-function-to-generate-v4-uuid/15875555#15875555
// */
// function base64_url_encode($text):String{
//   return str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($text));
// }
//
//
//
//
//
//
// function base64_url_decode($text) {
//   return base64_decode(str_replace(['-', '_'], ['+', '/'], $text));
//  }
//



if(isset($_POST["submit"]))
{

  //  $jwt = gen_jwt();



    // $mail = new PHPMailer(true);
    //
    //
    // $mail->isSMTP();
    // $mail->Host = 'smtp.gmail.com';  //gmail SMTP server
    // $mail->SMTPAuth = true;
    // //to view proper logging details for success and error messages
    // // $mail->SMTPDebug = 1;
    // $mail->Host = 'smtp.gmail.com';  //gmail SMTP server
    // $mail->Username = 'goelshivang123@gmail.com';   //email
    // $mail->Password = "xkrdutdiytpxcqec";   //16 character obtained from app password created
    // $mail->Port = 465;                    //SMTP port
    // $mail->SMTPSecure = "ssl";
    // $mail->addAttachment('PDF_'.$_POST['value'].".pdf");
    //
    // $mail->addEmbeddedImage('images/image-1.png', 'logo_p1t');
    // $mail->addEmbeddedImage('images/image-2.png', 'logo_p2t');
    // $mail->addEmbeddedImage('images/image-3.png', 'logo_p3t');
    // $mail->addEmbeddedImage('images/image-4.png', 'logo_p4t');
    // $mail->addEmbeddedImage('images/image-5.png', 'logo_p5t');
    // $mail->addEmbeddedImage('images/image-6.png', 'logo_p6t');
    // $mail->addEmbeddedImage('images/image-7.png', 'logo_p7t');
    // $mail->addEmbeddedImage('images/image-8.png', 'logo_p8t');
    // $mail->addEmbeddedImage('images/image-9.png', 'logo_p9t');
    // $mail->addEmbeddedImage('images/image-10.png', 'logo_p10t');
    // //sender information
    // $mail->setFrom('goelshivang123@gmail.com', 'SHIVANG GOEL');
    //
    // //receiver email address and name
    // $mail->addAddress($_POST['emailid'], 'CHECK');
    //
    // // Add cc or bcc
    // // $mail->addCC('email@mail.com');
    // // $mail->addBCC('user@mail.com');
    //
    //
    // $mail->isHTML(true);
    //
    // $mail->Subject = 'Blood Request Accepted';
    // $mail->Body    = "http://localhost/shivang/user/admin/add.php?token=$jwt";
    //
    // // Send mail
    // if (!$mail->send()) {
    //     echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
    // } else {
    //     echo 'Message has been sent.';
    // }
    //
    //

  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $username	 = $_POST["username"];
  $email = $_POST["emailid"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $address = $_POST["address"];
  $info = $_POST["info"];
  $code = $_POST["code"];
  $city = $_POST["city"];
  $country = $_POST["country"];
  $cnumber = $_POST["number"];

  // $sql1 = "SELECT * FROM signup WHERE (username='$username' OR email='$email')";
  // $r1 = mysqli_query($con,$sql1);
  //
  // if($password != $cpassword)
  // {
  //   echo "<script>alert('Password does not match')</script>";
  // }
  // else
  // {
  //   if(mysqli_num_rows($r1)>0)
  //   {
  //     $row = mysqli_fetch_assoc($r1);
  //     if($email==isset($row['email']))
  //     {
  //       echo "<script>alert('Email already exists');</script>";
  //       echo "<script> window.location.assign('login.php'); </script>";
  //     }
  //     else if($username==isset($row['username']))
  //     {
  //       echo "<script>alert('Username already exists');</script>";
  //       echo "<script> window.location.assign('login.php'); </script>";
  //     }
  // }
  // else
  // {
   $sql = "INSERT INTO signup(username,email,password) VALUES ('$username', '$email','$password')";
    $result=mysqli_query($con,$sql);

    if($result)
    {
      echo "<script>alert('Data inserted succesfully');</script>";
      echo "<script> window.location.assign('admin.php'); </script>";
    }
    else {
      echo "dni";
    }

}
 ?>
