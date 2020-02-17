<?php
session_start();
  include 'koneksi.php';

  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE email = '$email' AND level = 0";
  $query = mysqli_query($konek, $sql);
  $emailExists = mysqli_num_rows($query);

  if ($emailExists) {
    $data = mysqli_fetch_array($query);
    $hahed_password = $data['password'];

    if (password_verify($password,$hahed_password)) {
      $_SESSION['logged-in']=true;
      $_SESSION['email']= $_POST['email'];
      header('Location: index.php');
    } else {
      echo    "<script type=text/Javascript> alert('Password Salah')
                    window.location = 'login.php';
                </script>";
    }
  } else {
    echo    "<script type=text/Javascript> alert('Email Tidak Terdaftar / Anda Bukan Admin')
                    window.location = 'login.php';
                </script>";
  }

?>