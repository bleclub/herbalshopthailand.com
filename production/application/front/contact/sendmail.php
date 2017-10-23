<?php
// include('./lib/database.php');

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

     $name = $_POST['template-contactform-name'];
     $email = $_POST['template-contactform-email'];
     $phone = $_POST['template-contactform-phone'];
     $position = $_POST['template-contactform-service'];
     $subject = $_POST['template-contactform-subject'];
     $message = $_POST['template-contactform-message'];

    // if ( isset( $_FILES['template-contactform-cvfile'] ) && $_FILES['template-contactform-cvfile']['error'] == UPLOAD_ERR_OK ) {
    //     $mail->IsHTML(true);
    //     $mail->AddAttachment( $_FILES['template-contactform-cvfile']['tmp_name'], $_FILES['template-contactform-cvfile']['name'] );
    // }
    if (isset( $_FILES['template-contactform-cvfile']))
    {

        $filename = date('YmdHis').rand(0, 9);
        $tmp = explode(".", $_FILES["template-contactform-cvfile"]["name"]);
        $type = end($tmp);
        $new_name = "career_".$filename . "." . $type;
        move_uploaded_file($_FILES["template-contactform-cvfile"]["tmp_name"],"upload/career/".$new_name);
    }
    

    $mailto = 'vanlop.n@gmail.com';

    $subject = 'ติดต่อเราเรื่อง: '.$subject;

    $body = 'Name: '.$name.'<br>';
    $body .= 'Email: '.$email.'<br>';
    $body .= 'Phone: '.$phone.'<br>';    
    $body .= 'Subject: '.$subject.'<br>';
    $body .= 'Message: '.$message.'<br>';
    // $body = 'CV: <a href="'.$baseUrl.'/upload/career/'.$new_name.'">'.$baseUrl.'/upload/career/'.$new_name.'</a><br>';    


    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Additional headers
    // $headers .= 'To: Webmaster <webmaster@bigfans.io>, Kelly <kelly@example.com>' . "\r\n";
    $headers .= 'From: Webmaster <webmaster@thaiherbinfo.com>' . "\r\n";
    // $headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
    // $headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

    @mail($mailto, $subject, $body, $headers);
    header('Location: '.$baseUrl.'/'.$lang.'/contact/thankyou/success');
    // //SEND Mail
    // if ()) {
    //     echo "mail send ... OK"; // or use booleans here
    // } else {
    //     echo "mail send ... ERROR!";
    //     print_r( error_get_last() );
    // }

}
?> 