<!--==========================
    Intro Section
  ============================-->
<?php

include 'config/koneksi.php';

$query = mysqli_query($konek, "SELECT * FROM conference WHERE show_dashboard='1' ");
$row = mysqli_fetch_array($query);

$tanggal_conf = date('d F Y', strtotime($row['tanggal']));
?>
<br>
<section id="intro">
    <div class="intro-container wow fadeIn">
        <h1 class="mb-4 pb-0">Pub<span>Eazy</span> CONFERENCE</h1>
        <div class="col-lg-8" align="center">
            <p> <?php echo $row['nama_konferensi']; ?></p>
            <span style="color: white;"> <?php echo $tanggal_conf; ?> , </span><span style="color: white;"><?php echo $row['penyelenggara']; ?></span>
        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        <a href="<?php echo $base_url; ?>/url.php?p=registrasi-peserta&konferensi_id=<?php echo $row['konferensi_id']; ?>" class="about-btn scrollto">Registrasi Peserta</a>
        </div>
    </div>
</section>

<main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>About The Event</h2>
                    <p>Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius aut
                        accusantium et. Non odit consequatur repudiandae sequi ea odio molestiae. Enim possimus sunt inventore in
                        est ut optio sequi unde.</p>
                </div>
                <div class="col-lg-3">
                    <h3>Where</h3>
                    <p>Downtown Conference Center, New York</p>
                </div>
                <div class="col-lg-3">
                    <h3>When</h3>
                    <p>Monday to Wednesday<br>10-12 December</p>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Event Speakers</h2>
                <p>Here are some of our speakers</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="assets-event/img/speakers/1.jpg" alt="Speaker 1" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">Brenden Legros</a></h3>
                            <p>Quas alias incidunt</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="assets-event/img/speakers/2.jpg" alt="Speaker 2" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">Hubert Hirthe</a></h3>
                            <p>Consequuntur odio aut</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="assets-event/img/speakers/3.jpg" alt="Speaker 3" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">Cole Emmerich</a></h3>
                            <p>Fugiat laborum et</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="assets-event/img/speakers/4.jpg" alt="Speaker 4" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">Jack Christiansen</a></h3>
                            <p>Debitis iure vero</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="assets-event/img/speakers/5.jpg" alt="Speaker 5" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">Alejandrin Littel</a></h3>
                            <p>Qui molestiae natus</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker">
                        <img src="assets-event/img/speakers/6.jpg" alt="Speaker 6" class="img-fluid">
                        <div class="details">
                            <h3><a href="speaker-details.html">Willow Trantow</a></h3>
                            <p>Non autem dicta</p>
                            <div class="social">
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

        <div class="container">

            <div class="section-header">
                <h2>Contact Us</h2>
                <p>Nihil officia ut sint molestiae tenetur.</p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address>A108 Adam Street, NY 535022, USA</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- #contact -->

</main>