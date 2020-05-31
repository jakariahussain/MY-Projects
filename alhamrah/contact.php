<?php include("inc/header.php"); ?>
    <!--Breadcumb area start here-->
    <section class="breadcumb-area bg-img jarallax af">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcumb">
                        <h2>Contact us</h2>
                        <ul class="list-inline">
                            <li><a href="index.php">Home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Breadcumb area end here-->
    <!--Contact area start here-->
    <section class="contact-area pd-t80">
        <div class="container">
            <div class="row mr-b50">
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <div class="contact-info">
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <p>37 Green Street, London, E7 8DA</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <div class="contact-info">
                        <span><i class="fa fa-phone"></i></span>
                        <p>Mob: 0203 773 3381</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <div class="contact-info">
                        <span><i class="fa fa-envelope"></i></span>
                        <p><b>Email</b>: info@alhamrah.co.uk</p>
                        <p><b>Visit</b>: <a href="https://www.alhamrah.co.uk">alhamrah.co.uk</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-heading-two banner-con">
                        <h2 class="">Contact Us</h2>
                        <p><b class="haaj_umrah">Alhamrah</b></p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-area">
                        <form action="mail/config/data.php" method="POST">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12 feld">
                                        <input type="text" name="title" placeholder="title*">
                                    </div>
                                    <div class="col-sm-4 col-xs-12 feld">
                                        <input type="text" name="name" placeholder="Name">
                                        <span><i class="fa fa-user"></i></span>
                                    </div>
                                    <div class="col-sm-4 col-xs-12 feld">
                                        <input type="email" name="email" placeholder="Email *">
                                        <span><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <div class="col-sm-4 col-xs-12 feld">
                                        <select name="ticket" id="">
                                            <option >select</option>
                                            <option value="one">one</option>
                                            <option value="Ticket" selected>Ticket</option>
                                            <option value="three">three</option>
                                            <option value="four">four</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 col-xs-12 feld">
                                        <input type="text" name="number" placeholder="Contact">
                                        <span><i class="fa fa-star"></i></span>
                                    </div>
                                    <div class="col-sm-4 col-xs-12 feld">
                                        <input type="text" name="address" placeholder="Address">
                                        <span><i class="fa fa-star"></i></span>
                                    </div>
                                </div>
                                <fieldset>
                                    <div class="feld">
                                        <textarea placeholder="Message" name="message"></textarea>
                                        <span class="msg"><i class="far fa-edit"></i></span>
                                    </div>
                                </fieldset>
                                <div class="btn-area text-center">
                                    <input type="submit" class="btn4" name="submit" value="Send Now"><span></span></button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact area end here-->
   
    <?php include("inc/footer.php"); ?>
    <?php if($_GET['msg'] == 1){ ?>
        <script>
            toastr.success("message has been sent successfully. thank you very much.");
        </script>
    <?php } ?>