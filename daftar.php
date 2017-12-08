<html>
  <head>
    <meta charset="utf-8">
    <title>Halaman Daftar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
     <link href="img/icon-home.png" type="image/x-icon" rel="shortcut icon" />
    <link rel="stylesheet" href="style/home/css/bootstrap.css">
  </head>
  <body>
    <div class="container">
      <div class="login-form col-md-4 offset-md-4">
        <h2 class="title">DAFTAR</h2>
        <form action="daftar.php" method="post" name="form_daftar">
          <div class="form-group">
            <input type="text" class="form-control" required name="nama" placeholder="nama lengkap">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" required name="username" placeholder="username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" required name="password" placeholder="password">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" required name="alamat" placeholder="alamat">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" required name="kontak" placeholder="no. hp">
          </div>
          <div class="form-group">
            <select class="form-control" id="jk" name="jenis_kelamin">
              <option>Laki - Laki</option>
              <option>Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" id="lvl" name="id_level">
              <option>1</option>
              <option>2</option>
            </select>
            <p>* 1 (pencari kontrakan) & 2 (pemilik kontrakan)</p>
          </div>
            <button type="submit" name="Submit" class="btn btn-primary btn-block">DAFTAR</button>
        </form>

        <?php

          if (isset($_POST['Submit'])) {
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $alamat = $_POST['alamat'];
            $kontak = $_POST['kontak'];
            $jenis_kelamin  = $_POST['jenis_kelamin'];
            $level  = $_POST['id_level'];

            include_once ('config.php');
            $result = mysqli_query($db_link, "INSERT INTO users (id_level, nama, jenis_kelamin, username, password, alamat, kontak) VALUES ('$level', '$nama', '$jenis_kelamin', '$username', '$password', '$alamat', '$kontak')");
            echo "tambah berhasil";
          }

         ?>
      </div>
    </div>
  </body>

  <style media="screen">
  body{

  }
  #jk, #lvl{
    cursor: pointer;
  }
  .login-form{
    width: 30%;
    background-color: white;
    margin-top: 50px;
    box-shadow: 0 1px 5px 1px grey;
    padding-bottom: 15px;
    border-radius: 10px;
  }
  .form-control{
    height: 40px;
    font-size: 14px;
  }
  .title{
    margin-bottom: 20px;
    background-color: #007bbf;
    padding: 10px;
    text-align: center;
    color: white;
    border-radius: 0 0 10px 10px;
  }
  .btn{
    margin-top: 20px;
    border-radius: 5px;
    height: 40px;
    font-size: 14px;
    cursor: pointer;
  }
  p{
    margin-top: 5px;
    color: red;
    font-size: 10px;
  }
  </style>

</html>
