<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $to = "naturalcosmeticsalba@gmail.com";
        $from = $_POST['name'];
        $subject = "Запитване от потребител относно:";
        $message = 'Телефон: ' . $_POST['phone'] . "<br>" . "Email:" . $_POST['email'] . "<br>" .  $_POST['message'];
        $header = "From: " . $from . "\r\n";
        $mailsent = mail($to, $subject, $message, $header);
        if($mailsent)
        {
            echo 'message sent!';
        }
        else 
        {
            echo 'There was an error';
        }
        ?>
    </body>
</html>
