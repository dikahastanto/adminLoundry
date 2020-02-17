<?php
  include 'koneksi.php';
  $email = $_POST['email'];
  $password = password_hash('12345678', PASSWORD_DEFAULT);
  $namaLengkap = $_POST['namaLengkap'];
  $alamat = $_POST['alamat'];
  $noTelp = $_POST['noTelp'];
  $noRek = $_POST['noRek'];
  $namaBank = $_POST['namaBank'];
  $atasNama = $_POST['atasNama'];
  $sql = "INSERT INTO users (email, password, namaLengkap, alamat, noTelp, noRek, namaBank, atasNama, level) VALUES ('$email', '$password', '$namaLengkap', '$alamat', '$noTelp', '$noRek', '$namaBank', '$atasNama', 1)";
  $query = mysqli_query($konek, $sql);
  if ($query) {
    echo    "<script type=text/Javascript> alert('Berhasil Input')
                    window.location = 'dataloundry.php';
                </script>";
  } else {
    echo    "<script type=text/Javascript> alert('Gagal Input')
                    window.location = 'dataloundry.php';
                </script>";
  }
?>