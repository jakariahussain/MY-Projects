<?php
    include 'Mail.php';

    $mail = new Mail();
    $mail->config('veechimailengine@gmail.com', 'Epsilon786');
?>

<?php
    if( $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit'] == 'Send Message'){

    //bingoboy2112@gmail.com
        $to = 'info@gmail.com';
        $from = 'veechimailengine@gmail.com';
        $subject = "New Contact Message";
        $body ='<h3> Name is: '.$_POST['name'].'</h3> <br> <h2> Email: '.$_POST['email'].'</h2> <br> <p> Message: '.$_POST['message'].'</p>';

        // echo '<script>window.location="http://jak.veechitechnologies.com/tomjones/index.php?msg=1"</script>';
        
        $mail->send([
            'from'      => $from,
            'to'        => $to,
            'subject'   => $subject,
            'body'      => $body
        ]);
        
        header('location:../../../rich_meat/contact.php?msg=1');
        exit;

    }
?>
