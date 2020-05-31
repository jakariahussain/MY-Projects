<?php include 'include/header.php'; ?>
<main>
    <section class="hero_section  section-curb" id="curb" data-background="images/curb/01.png">
        <div class="container">
            <div class="row wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">
                <div class="curb_title">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
        <div class="rmt_hd_crb"></div>
    </section>
<!--=======================================================================
                                Contact Form
=======================================================================-->
<section class="form_area pt-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-7"></div>
            <div class="col-lg-5">
                <div class="contact_form">
                   <h2>Send <strong>Message</strong></h2>
                    <form action="mail/config/data.php" method="POST">
                        <input type="text" name="name" placeholder="Full Name">
                        <input type="email" name="email" placeholder="Email">
                        <textarea name="message" placeholder="Writing Message"></textarea>
                        <input type="submit" name="submit" value="Send Message" class="btn1 msg">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
    <?php if($_GET['msg'] == 1){ ?>
        <script>
            toastr.success("message has been sent successfully. thank you very much.");
        </script>
    <?php } ?>
<?php include 'include/footer.php'; ?>
