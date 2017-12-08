<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Halaman Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
     <link href="img/icon-home.png" type="image/x-icon" rel="shortcut icon" />
    <link rel="stylesheet" href="style/home/css/bootstrap.css">
  </head>
  <body>
    <div class="container">
      <div class="login-form col-md-4 offset-md-4">
        <h1 class="title">LOGIN</h1>
        <form action="cek_login.php" name="login" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" class="form-control" name="username" required placeholder="username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" required placeholder="password">
          </div>
          <div class="">
            <button type="submit" name="masuk" value="masuk" class="btn btn-primary btn-block">MASUK</button>
          </div>
        </form>
        <p>Belum punya akun? Silahkan daftar <a href="daftar.php">disini</a></p></p>
      </div>
    </div>
  </body>

  <style media="screen">
      body{
      }
      .login-form{
        width: 30%;
        background-color: white;
        margin-top: 150px;
        box-shadow: 0 1px 5px 1px grey;
        padding-bottom: 10px;
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
        margin-top: 10px;
        text-align: center;
      }
  </style>

</html>
