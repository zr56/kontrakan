<?php
  include_once ('config.php');
 ?>

 <html>
   <head>
     <meta charset="utf-8">
     <title>kontrakanku</title>
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
     <link href="img/icon-home.png" type="image/x-icon" rel="shortcut icon" />
     <link rel="stylesheet" href="style/panel/css/bootstrap.min.css">
     <link rel="stylesheet" href="style/panel/css/bootstrap.css">
   </head>
   <body class="home" id="page">
     <header class="main-header">
       <div class="container">
         <div class="header-content">
           <nav class="site-nav">
             <a href="login.php"><button type="button" class="btn">masuk</button> </a>
             <a href="daftar.php"><button type="button" class="btn">daftar</button> </a>
           </nav>
         </div>
       </div>
     </header>
   </body>

   <style media="screen">
    body{
      background-image: url("img/bg/bg.jpg");
    }
     .home header{
       height: 60px;
       background-color: black;
       padding: 10px;
     }
   </style>

 </html>
