<?php

//Send the email mail
function send_mail($detail=array()){


    if(!empty($detail['to']) && !empty($detail['message']) && !empty($detail['subject']) && !empty($detail['from'])){
        $mail = new PHPMailer(true); 
        //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.mailtrap.io';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'b0164611a100ce';                 // SMTP username
        $mail->Password = '50a342289fa893';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 2525;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('817ee78f28-834ac2@inbox.mailtrap.io', $detail['from']);
        $mail->addAddress($detail['to'], '');     // Add a recipient

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $detail['subject'];
        $mail->Body    = $detail['message'];
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if(!$mail->send()) {
              return false;
            } else {
                return true;
            }

    }else{

        die('Your Mail Handler requires four main paramters');

    }
   


}