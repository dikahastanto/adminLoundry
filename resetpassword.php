<?php
include 'koneksi.php';
  $id = $_GET['id'];
  
  $password = password_hash('12345678', PASSWORD_DEFAULT);

  $sql = "UPDATE users SET password = '$password' WHERE id = '$id'";
  $query = mysqli_query($konek, $sql);

  if ($query) {
    echo    "<script type=text/Javascript> alert('Berhasil Reset Password')
                    window.location = 'dataloundry.php';
                </script>";
  } else {
    echo    "<script type=text/Javascript> alert('Gagal Reset Password')
                    window.location = 'dataloundry.php';
                </script>";
  }
?>