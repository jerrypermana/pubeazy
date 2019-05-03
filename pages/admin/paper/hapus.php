<?php


if (isset($_GET['idpaper'])) {
    $id = $_GET['idpaper'];


    $hapus          = mysqli_query($konek, "delete from paper where paper_id='$id'");



    if ($hapus) {
        echo '<script>alert("Data Berhasil Di Hapus")
				location.replace("' . $base_url . '/index.php?p=dashboard")</script>';
    } else {
        echo '<script>alert("Data Gagal Di Hapus")
				location.replace("' . $base_url . '/index.php?p=dashboard")</script>';
    }
}

if (isset($_GET['idtrans'])) {
    $id_trans = $_GET['idtrans'];


    $hapus          = mysqli_query($konek, "delete from transaksi_presenter where transfer_id='$id_trans'");



    if ($hapus) {
        echo '<script>alert("Data Berhasil Di Hapus")
				location.replace("' . $base_url . '/index.php?p=dashboard")</script>';
    } else {
        echo '<script>alert("Data Gagal Di Hapus")
				location.replace("' . $base_url . '/index.php?p=dashboard")</script>';
    }
}
?>

