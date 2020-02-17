<?php
  $username = 'root';
  $password = '';
  $host = 'localhost';
  $dbname = 'db_loundry';

  $konek = mysqli_connect($host, $username, $password, $dbname);
  if (!$konek) {
    echo 'gagal konek database';
  }
?>