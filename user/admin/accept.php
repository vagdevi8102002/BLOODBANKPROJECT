<?php
  require_once('../connection.php');
  $r = "SELECT id ,Emailid FROM becomedonor WHERE status = 0 AND bloodgroup = '".$_POST['blood']."' LIMIT 1";
  $rq = mysqli_query($con , $r);
  $result = mysqli_fetch_assoc($rq);
  $sql = "UPDATE becomedonor SET status = 1 WHERE id = ".$result['id'];
  mysqli_query($con, $sql);

  $sql = "UPDATE requestblood SET status = 1 WHERE id = ".$_POST['value'];
  mysqli_query($con, $sql);

  $reqblood = "SELECT ContactName FROM requestblood WHERE id = ".$_POST['value'];
  $requestedblood = mysqli_query($con, $reqblood);


  require_once 'vendor/autoload.php';


  //Import PHPMailer classes into the global namespace

  use Dompdf\Dompdf;
  $dompdf = new Dompdf();

  $html= file_get_contents('pdftemp.html');
  // Load HTML content
  $dompdf->loadHtml($html);


  // (Optional) Setup the paper size and orientation
  $dompdf->setPaper('A4', 'landscape');

  // Render the HTML as PDF
  $dompdf->render();

  // Output the generated PDF to Browser

    $output = $dompdf->output();
    file_put_contents('PDF_'.$_POST['value'].".pdf", $output);


  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require_once 'vendor/autoload.php';

  $mail = new PHPMailer(true);


  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';  //gmail SMTP server
  $mail->SMTPAuth = true;
  //to view proper logging details for success and error messages
  // $mail->SMTPDebug = 1;
  $mail->Host = 'smtp.gmail.com';  //gmail SMTP server
  $mail->Username = 'goelshivang123@gmail.com';   //email
  $mail->Password = "xkrdutdiytpxcqec";   //16 character obtained from app password created
  $mail->Port = 465;                    //SMTP port
  $mail->SMTPSecure = "ssl";
  $mail->addAttachment('PDF_'.$_POST['value'].".pdf");

  $mail->addEmbeddedImage('images/image-1.png', 'logo_p1t');
  $mail->addEmbeddedImage('images/image-2.png', 'logo_p2t');
  $mail->addEmbeddedImage('images/image-3.png', 'logo_p3t');
  $mail->addEmbeddedImage('images/image-4.png', 'logo_p4t');
  $mail->addEmbeddedImage('images/image-5.png', 'logo_p5t');
  $mail->addEmbeddedImage('images/image-6.png', 'logo_p6t');
  $mail->addEmbeddedImage('images/image-7.png', 'logo_p7t');
  $mail->addEmbeddedImage('images/image-8.png', 'logo_p8t');
  $mail->addEmbeddedImage('images/image-9.png', 'logo_p9t');
  $mail->addEmbeddedImage('images/image-10.png', 'logo_p10t');

  /***********************************************************************************/
  $mail->addEmbeddedImage('donormailtemp/image-1.png', 'donor_q1t');
  $mail->addEmbeddedImage('donormailtemp/image-2.png', 'donor_q2t');
  $mail->addEmbeddedImage('donormailtemp/image-3.png', 'donor_q3t');
  $mail->addEmbeddedImage('donormailtemp/image-4.png', 'donor_q4t');
  $mail->addEmbeddedImage('donormailtemp/image-5.png', 'donor_q5t');
  $mail->addEmbeddedImage('donormailtemp/image-6.png', 'donor_q6t');
  $mail->addEmbeddedImage('donormailtemp/image-7.png', 'donor_q7t');
  $mail->addEmbeddedImage('donormailtemp/image-8.png', 'donor_q8t');
  //sender information
  $mail->setFrom('goelshivang123@gmail.com', 'SHIVANG GOEL');

  //receiver email address and name
  $mail->addAddress($_POST['emailid'], mysqli_fetch_assoc($requestedblood)['ContactName']);

  // Add cc or bcc
  // $mail->addCC('email@mail.com');
  // $mail->addBCC('user@mail.com');


  $mail->isHTML(true);

  $mail->Subject = 'Blood Request Accepted';
  $mail->Body    = file_get_contents('mailtemp.html');

  // Send mail
  if (!$mail->send()) {
      echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
  } else {
      echo 'Message has been sent.';
  }

  /***************************/



    //sender information
    $mail->setFrom('goelshivang123@gmail.com', 'SHIVANG GOEL');

    //receiver email address and name
    $mail->addAddress($result['Emailid'], 'GOEL');



    $mail->isHTML(true);

    $mail->Subject = 'Donor Request Accepted';
    $mail->Body    = file_get_contents('donormailtemp.html');

    // Send mail
    if (!$mail->send()) {
        echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent.';
    }

  $mail->smtpClose();

?>
