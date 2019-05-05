<?php


if (isset($_GET['jamID'])) {
    $jamID = $_GET['jamID'];


    $hapus_jam          = mysqli_query($konek, "delete from jadwal_jam where jam_id='$jamID'");



    if ($hapus_jam) {
        echo '<script>alert("Data Berhasil Di Hapus")
				location.replace("' . $base_url . '/index.php?p=mst-jam")</script>';
    } else {
        echo '<script>alert("Data Gagal Di Hapus")
				location.replace("' . $base_url . '/index.php?p=mst-jam)</script>';
    }
}

elseif (isset($_GET['bankID'])) {
    $bankID = $_GET['bankID'];


    $hapus_bank         = mysqli_query($konek, "delete from account_bank where kode_bank='$bankID'");



    if ($hapus_bank) {
        echo '<script>alert("Data Berhasil Di Hapus")
				location.replace("' . $base_url . '/index.php?p=mst-accountbank")</script>';
    } else {
        echo '<script>alert("Data Gagal Di Hapus")
				location.replace("' . $base_url . '/index.php?p=mst-accountbank)</script>';
    }
}
elseif (isset($_GET['admin_id'])) {
    $admin_id = $_GET['admin_id'];


    $hapus_admin         = mysqli_query($konek, "delete from login where admin_id='$admin_id'");



    if ($hapus_admin) {
        echo '<script>alert("Data Berhasil Di Hapus")
				location.replace("' . $base_url . '/index.php?p=mst-admin")</script>';
    } else {
        echo '<script>alert("Data Gagal Di Hapus")
				location.replace("' . $base_url . '/index.php?p=mst-admin)</script>';
    }
}
elseif (isset($_GET['subjectID'])) {
    $subjectID = $_GET['subjectID'];


    $hapus_subject       = mysqli_query($konek, "delete from mst_subject where subject_id='$subjectID'");



    if ($hapus_subject) {
        echo '<script>alert("Data Berhasil Di Hapus")
				location.replace("' . $base_url . '/index.php?p=mst-subject")</script>';
    } else {
        echo '<script>alert("Data Gagal Di Hapus")
				location.replace("' . $base_url . '/index.php?p=mst-subject)</script>';
    }
}

elseif (isset($_GET['keywordID'])) {
    $keywordID = $_GET['keywordID'];

    $query = "delete from mst_keyword where keyword_id='$keywordID'";
    $hapus_key       = mysqli_query($konek,$query);


   
    if ($hapus_key) {
        echo '<script>alert("Data Berhasil Di Hapus")
				location.replace("' . $base_url . '/index.php?p=mst-keyword")</script>';
    } else {
        echo '<script>alert("Data Gagal Di Hapus")
				location.replace("' . $base_url . '/index.php?p=mst-keyword)</script>';
    }
}

elseif (isset($_GET['ruangID'])) {
  $ruangID = $_GET['ruangID'];

  $query = "delete from mst_ruang where ruang_id='$ruangID'";
  $hapus_ruang       = mysqli_query($konek,$query);


 
  if ($hapus_ruang) {
      echo '<script>alert("Data Berhasil Di Hapus")
      location.replace("' . $base_url . '/index.php?p=mst-ruang")</script>';
  } else {
      echo '<script>alert("Data Gagal Di Hapus")
      location.replace("' . $base_url . '/index.php?p=mst-ruang)</script>';
  }
}

elseif (isset($_GET['speakID'])) {
  $speakID = $_GET['speakID'];

  $query = "delete from speakers where speaker_id='$speakID'";
  $hapus_speak       = mysqli_query($konek,$query);


 
  if ($hapus_speak) {
      echo '<script>alert("Data Berhasil Di Hapus")
      location.replace("' . $base_url . '/index.php?p=set-keynote-speakers")</script>';
  } else {
      echo '<script>alert("Data Gagal Di Hapus")
      location.replace("' . $base_url . '/index.php?p=set-keynote-speakers)</script>';
  }
}

elseif (isset($_GET['reviewer_id'])) {
  $reviewer_id = $_GET['reviewer_id'];

  $query = "delete from reviewer where reviewer_id='$reviewer_id'";
  $hapus_review       = mysqli_query($konek,$query);


 
  if ($hapus_review) {
      echo '<script>alert("Data Berhasil Di Hapus")
      location.replace("' . $base_url . '/index.php?p=list-reviewer")</script>';
  } else {
      echo '<script>alert("Data Gagal Di Hapus")
      location.replace("' . $base_url . '/index.php?p=list-reviewer)</script>';
  }
}
?>

