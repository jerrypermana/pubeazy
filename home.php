<!--==========================
    Intro Section
  ============================-->
<?php
include 'config/koneksi.php';

$query = mysqli_query($konek, "SELECT * FROM conference WHERE show_dashboard='1' ");
$row = mysqli_fetch_array($query);

$start_conf = date('d', strtotime($row['start_date']));
$end_conf = date('d F Y', strtotime($row['end_date']));

$homepage      = mysqli_query($konek, "SELECT * FROM homepage LIMIT 1");
$data_homepage = mysqli_fetch_array($homepage);

?>
<br>
<section id="intro">
    <div class="intro-container wow fadeIn">
        <h1 class="mb-4 pb-0">Pub<span>Eazy</span> CONFERENCE</h1>
        <div class="col-lg-8" align="center">
            <p> <?php echo $row['nama_konferensi']; ?></p>
            <span style="color: white;"> <?php echo $start_conf . ' - ' . $end_conf; ?> , </span><span style="color: white;"><?php echo $row['penyelenggara']; ?></span>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            <a href="<?php echo $base_url; ?>/url.php?p=register" class="about-btn scrollto">Registrasi Peserta</a>
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
                    <h2><?php echo $data_homepage['about_title']; ?></h2>
                    <p><?php echo $data_homepage['about_text']; ?></p>
                </div>
                <div class="col-lg-3">
                    <h3><?php echo $data_homepage['location_title']; ?></h3>
                    <p><?php echo $data_homepage['location_text']; ?></p>
                </div>
                <div class="col-lg-3">
                    <h3><?php echo $data_homepage['when_title']; ?></h3>
                    <p><?php echo $data_homepage['when_text']; ?></p>
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
                <!-- <p>Here are some of our speakers</p> -->
            </div>
            <div class="row">
            <?php
            $select = mysqli_query($konek, "SELECT * FROM speakers order by sequance ASC ");
            while ($row_speak = mysqli_fetch_array($select)) {

                if ($row_speak['image_speaker'] != NULL) {
                    $photo = '<img src="files/speakers/' . $row_speak['image_speaker'] . '" alt="Speaker 1" class="img-fluid">';
                } else {
                    $photo = '<img src="files/presenter/presenter.jpg" alt="Speaker 1" class="img-fluid">';
                }


                echo '<div class="col-lg-3 col-md-6">
                        <div class="speaker" style="max-width: 100%; height: 100%; align: center;">
                            ' . $photo . '
                            <div class="details">
                                <h3><a href="speaker-details.html">' . $row_speak['speaker_name'] . '</a></h3>
                                <p>' . $row_speak['institution'] . '</p>

                            </div>
                        </div>
                    </div>';
            }
            ?>
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
