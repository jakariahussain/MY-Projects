<?php
    include 'Mail.php';

    $mail = new Mail();
    $mail->config('veechimailengine@gmail.com', 'Epsilon786');
?>

<?php
    if( $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit'] == 'content'){

    //bingoboy2112@gmail.com
        $to = 'jakariahussain95@gmail.com';
        $from = 'veechimailengine@gmail.com';
        $subject = "New Contact Message";
        $body ='<h1>subscription email is: '.$_POST['email'].'</h1>';

        // echo '<script>window.location="http://jak.veechitechnologies.com/tomjones/index.php?msg=1"</script>';
        
        $mail->send([
            'from'      => $from,
            'to'        => $to,
            'subject'   => $subject,
            'body'      => $body
        ]);
        
        header('location:../../../agency/index.php');
        exit;

    }
?>
