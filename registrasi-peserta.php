<br>
<br>
<main id="main">
    <?php
    $konferensi_id = $_GET['konferensi_id'];

    ?>
    <!--==========================
      Speaker Details Section
    ============================-->
    <section id="speakers-details" class="wow fadeIn">
        <div class="container">
            <div class="section-header">
                <h2>Registrasi Peserta</h2>
                <p>Praesentium ut qui possimus sapiente nulla.</p>
            </div>

            <div class="row">

                <div class="col-md-12">
                    <section id="contact" class="section-bg wow fadeInUp">

                        <div class="container">

                            <div class="form">
                                <div id="sendmessage">Your message has been sent. Thank you!</div>
                                <div id="errormessage"></div>


                                <form role="form" action="" method="POST" name='simpan' class='form-horizontal form-bordered' onSubmit='return validasi()' enctype="multipart/form-data">


                                    <div class="col-md-12">

                                        <div class="form-row">
                                            <div class="col-md-2">
                                                <label></label>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" name="nama" class="form-control" id="name" placeholder="Nama Lengkap Tanpa Gelar" />
                                                <input type="hidden" name="konferensi_id" value='<?php echo $konferensi_id; ?>'>

                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" />

                                            </div>
                                            <div class="col-md-2">
                                                <label></label>
                                            </div>
                                        </div>


                                        <div class="form-row">
                                            <div class="col-md-2">
                                                <label></label>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <input type="text" name="instansi" class="form-control" id="instansi" placeholder="Instansi" />


                                            </div>

                                            <div class="col-md-2">
                                                <label></label>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-2">
                                                <label></label>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <select class="form-control" name='paket_id'>
                                                    <option valu='0'>Pilih Paket Konferensi</option>
                                                    <?php
                                                    $select_conf = mysqli_query($konek, "SELECT * FROM paket_konferensi");

                                                    while ($row = mysqli_fetch_array($select_conf)) {

                                                        echo "<option value='$row[paket_id]'>$row[nama_paket] (Rp. $row[biaya])</option>";
                                                    }
                                                    ?>

                                                </select>


                                            </div>

                                            <div class="col-md-2">
                                                <label></label>
                                            </div>
                                        </div>


                                        <div class="form-row">
                                            <div class="col-md-2">
                                                <label></label>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" name="username" class="form-control" id="username" placeholder="Username" />


                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" name="hp" class="form-control" id="hp" placeholder="No Handphone" />

                                            </div>
                                            <div class="col-md-2">
                                                <label></label>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-2">
                                                <label></label>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" />


                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="password" name="repassword" class="form-control" id="repassword" placeholder="Ulangi Password" />


                                            </div>
                                            <div class="col-md-2">
                                                <label></label>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-3">
                                                <label></label>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <img id="captchaimg" src="captcha_code_file.php?rand=<?php echo rand(); ?>" />
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input type="text" class="form-control" name="captcha" id="captcha" placeholder="Masukkan Captcha"  />
                                            </div>

                                            <div class="col-md-3">
                                                <label></label>
                                            </div>
                                        </div>


                                        <div class="text-center">
                                            <button type="submit" name='submit'>Registrasi</button>
                                        </div>
                                    </div>

                                </form>
                                <script type='text/javascript'>
                                    function validasi() {


                                        if (simpan.username.value == "") {
                                            alert("Username Tidak Boleh KOSONG ");
                                            simpan.username.focus();
                                            return false;
                                        }
                                        if (simpan.nama.value == "") {
                                            alert("Nama Tidak Boleh KOSONG");
                                            simpan.nama.focus();
                                            return false;
                                        }
                                        if (isNaN(parseInt(simpan.nama.value)) == false) {
                                            alert("Nama harus berisi HURUF");
                                            simpan.nama.focus();
                                            return false;
                                        }


                                        if (simpan.instansi.value == "") {
                                            alert("instansi Tidak Boleh KOSONG");
                                            simpan.instansi.focus();
                                            return false;
                                        }


                                        if (simpan.instansi.value == "") {
                                            alert("instansi Tidak Boleh KOSONG");
                                            simpan.instansi.focus();
                                            return false;
                                        }

                                        if (simpan.hp.value == "") {
                                            alert("No Handphone Tidak Boleh KOSONG");
                                            simpan.hp.focus();
                                            return false;
                                        }
                                        if (simpan.password.value == "") {
                                            alert("Password Tidak Boleh KOSONG");
                                            simpan.password.focus();
                                            return false;
                                        }

                                        var baru = simpan.password.value;
                                        var lagi = simpan.repassword.value;

                                        if (baru != lagi) {
                                            alert('Password baru tidak cocok,\nCek ulang password baru Anda!');
                                            return false;
                                        }


                                        return true;
                                    }
                                </script>
                            </div>
                            <?php


                            //  INSERT TO DATABASE REGISTER PESERTA
                            if (isset($_POST['submit'])) {
                                if (empty($_SESSION['captcha']) || strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0) {
                                    //Note: the captcha code is compared case insensitively.
                                    //if you want case sensitive match, update the check above to
                                    // strcmp()
                                   
                                    echo '<script>alert("Capctha yang anda masukkan salah")
                                    location.replace("url.php?p=home")</script>';
                                }elseif(empty($errors)) {

                                    $username         = $_POST['username'];
                                    $nama             = ucwords($_POST['nama']);
                                    $instansi         = ucwords($_POST['instansi']);
                                    $email            = $_POST['email'] == '' ? '-' : $_POST['email'];
                                    $hp               = $_POST['hp'] == '' ? '-' : $_POST['hp'];
                                    $password         = md5($_POST['password']);
                                    $tglinput         = date("Y/m/d");
                                    $tglubah          = date("Y/m/d");
                                    $group            = 'peserta';
                                    $paket_id         = $_POST['paket_id'];

                                    $select_peserta = mysqli_query($konek, "SELECT * FROM peserta order by id_peserta desc");
                                    $peserta_select = mysqli_fetch_array($select_peserta);
                                    $numpeserta = mysqli_fetch_row(($select_peserta));

                                    $item    = $peserta_select['member_id'];

                                    if ($numpeserta > 0) {
                                        $one = 1;
                                        $split = substr($item, 6, 9);
                                        $part = $one . $split;
                                        $sum = $part;
                                        $join = $part + 1;
                                    } else {
                                        $join = 10001;
                                    }
                                    $change = strval($join);
                                    $groub = substr($change, 1, 5);
                                    $member_id = 'RJI-2-' . $groub;
                                    $join++;



                                    $query  = "INSERT INTO peserta (member_id,username, realname, email, instansi, no_hp,  password, group_session , input_date, last_update)
                              VALUES('$member_id','$username', '$nama', '$email', '$instansi','$hp','$password','$group','$tglinput', '$tglubah')";


                                    $insert_registrasi    = mysqli_query($konek, $query);

                                    $id_peserta       = mysqli_insert_id($konek);
                                    $konferensi_id    = $_GET['konferensi_id'];

                                    $q_transaksi = "INSERT INTO transaksi_peserta (id_peserta, konferensi_id, paket_id,input_date, last_update)VALUES('$id_peserta','$konferensi_id','$paket_id','$tglinput','$tglubah')";
                                    //     echo $query;
                                    // echo $q_transaksi;
                                    $insert_transaksi     = mysqli_query($konek, $q_transaksi);

                                    if ($insert_registrasi and $insert_transaksi) {
                                        echo '<script>alert("Registrasi Berhasil")
                                    	location.replace("' . $base_url . '/url.php?p=login")</script>';
                                    } else {

                                        echo '<script>alert("Registrasi Gagal")
                                        location.replace("' . $base_url . '/url.php?p=registrasi-peserta")</script>';
                                    }
                                }
                            }
                            ?>

                        </div>
                    </section><!-- #contact -->
                </div>

            </div>
        </div>

    </section>

</main>