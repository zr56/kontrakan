<?php

  $db_host  = 'localhost';
  $db_user  = 'root';
  $db_pass  = '';
  $db_name  = 'web';

  $db_link  = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
  if (!$db_link) {
    echo 'Tidak terhubung ke database';
  }

 ?>
