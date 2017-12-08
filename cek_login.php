<?php

  include_once ('config.php');

  session_start();

  if (!isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users where username='".$username."' and password='".$password."'";
    $query  = mysqli_query($db_link, $sql) or die (mysqli_error());

    if (mysqli_num_rows($query)==1) {
      while ($qry = mysqli_fetch_array($query)) {
        $_SESSION['username'] = $qry['username'];
        $_SESSION['password'] = $qry['password'];
        $_SESSION['id_level'] = $qry['id_level'];
        $_SESSION['loggedin'] = 1;

        if ($_SESSION['id_level'] == 3) {
          header('location: v_admin.php');
        } else if($_SESSION['id_level'] == 1){
          header('location: v_pemilik.php');
        } else if($_SESSION['id_level'] == 2){
          header('location: v_pencari.php');
        }
      }
    } else{
      //echo "<script type='text/javascript'>alert('Gagal login');
      //window.location.href='login.php'</script>";
      header('location:login.php?error=tidak_terdaftar');
    }

  }

 ?>
