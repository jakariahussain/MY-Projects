<?php include 'include/header.php'; ?>
    <!--===============================================
                    Start slider_area
================================================-->
    <section class="inner_about_area" id="inner_contact_section">
        <div class="container-fluid">
            <div class="row  wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">
                <div class="col-lg-6">
                    <div class="curb_bg" style="background:url('images/services/10.png') no-repeat;height:460px; background-size:cover;"></div>
                </div>
                <div class="col-lg-6">
                    <div class="hero_title">
                        <h1>Contact Us</h1>
                        <div class="hero_content">
                            <p>Let’s Be Adventurers. choices you make Take only memories leave yourself behind.</p>
                           
                        </div>
                    </div>
                    <!--*End hero_title*-->
                </div>
            </div>
        </div>
    </section>

    <!--===============================================
                    Start About_area
================================================-->
  <section class="" id="inner_contact">
        <div class="container">
            <div class="row  wow fadeIn" data-wow-duration="2s" data-wow-delay=".1s">
                <div class="col-md-6 col-lg-6">
                    <div class="section_title ab1">
                        <h2>Get In Touch With Us</h2>
                        <div class="section_title_content">
                            <form action="mail/config/data.php" method="POST">
                                <input type="text" name="name" placeholder="Your Name">
                                <input type="email" name="email" placeholder="Your Email Address">
                                <input type="text" name="number" placeholder="Your Contact Number">
                                <textarea name="message" placeholder="Write Your Message"></textarea>
                                <input type="submit" name="submit" value="contact" class="SubmiSend">
                            </form>
                        </div>
                    </div>
                    <!--*End section_title*-->
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="about_thumb">
                        <figure>
                            <img src="images/services/11.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'include/footer.php'; ?>