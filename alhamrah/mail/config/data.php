<?php
    include 'Mail.php';

    $mail = new Mail();
    $mail->config('veechimailengine@gmail.com', 'Epsilon786');
?>

<?php
    if( $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit'] == 'Send Now'){

    //bingoboy2112@gmail.com
        $to = 'jakariahussain95@gmail.com';
        $from = 'veechimailengine@gmail.com';
        $subject = "New Contact Message";
        $body ='<h6> Title: '.$_POST['title'].'</h6> <br> <h6> Name: '.$_POST['name'].'</h6> <br> <h6> Email: '.$_POST['email'].'</h6> <br> <h6> ticket: '.$_POST['ticket'].'</h6> <br> <h6> number: '.$_POST['number'].'</h6><br> <h6> address: '.$_POST['address'].'</h6><br><h6> Message: '.$_POST['message'].'</h6>';

        echo '<script>window.location="http://alhamrah.co.uk/contact.php?msg=1"</script>';
        
        $mail->send([
            'from'      => $from,
            'to'        => $to,
            'subject'   => $subject,
            'body'      => $body
        ]);
        
        // header('location:../../../alhamrah/contact.php?msg=1');
        exit;

    }
?>
