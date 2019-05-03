<?php

if (isset($_POST['submit'])) {
$username        = $_POST['username'];
$realname        = $_POST['realname'];
$password        =  md5($_POST['password']);
$group           = 'admin';






$query  = mysqli_query($konek, "INSERT INTO login (username, realname, password, group_session)
        VALUES('$username','$realname','$password','$group')");

if ($query) {
    echo '<script>alert("Berhasil Menambahkan Admin")
            location.replace("' . $base_url . '/index.php?p=mst-admin")</script>';
  } else {

    echo '<script>alert("Gagal Menambahkan Admin")
            location.replace("' . $base_url . '/index.php?p=mst-admin")</script>';
  }
}
