<!DOCTYPE html>



<!-- end menu BAR-->

<!--  body -->
<?php
$domain = $_SERVER['SERVER_NAME'];
$base_url = "http://" . $domain . "/pubeazy";
include "header.php";
if (isset($_GET["p"])) {
    $id = $_GET["p"];

    if ($id == "home") {
        include 'home.php';
    }
    // START REGISTER // 
    elseif ($id == "register") {
        include 'register.php';
    }elseif ($id == "registrasi-peserta") {
        include 'registrasi-peserta.php';
    }
    // START LOGIN // 
    elseif ($id == "login") {
        include 'login.php';
    } else {
        include 'index.php';
    }
}
include "footer.php"
?>
<!-- End  body -->


<!-- CONTENT-WRAPPER SECTION END--> 