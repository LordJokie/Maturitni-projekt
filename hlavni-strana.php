<?php
    $servername= "localhost";
    $username= "root";
    $password = "";
    $admin = "esuba";
    $conn = mysqli_connect($servername, $username, $password, $admin);
    if (!$conn) {
        echo "Connection failed!";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hlavní strana</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
          background-color: #333;
        }
        .navbar {
          border-radius: 0;
        }
        #esuba {
          width: 35px;
        }
        .navbar-brand {
          margin-top: -10px;          
        }
        .navbar-inverse .navbar-nav>li>a:focus, .navbar-inverse .navbar-nav>li>a:hover {
          transition: 0.5s;
        }
        .img-fluid {
          margin-top: -20px;
          width: 100%;
          height: 650px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand"><img id="esuba"  src="esuba-logo.png"></img></a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="o-nas-strana.html">O NÁS</a></li>
            <li><a href="clanky-strana.html">ČLÁNKY</a></li>
            <li><a href="sekce-strana.html">SEKCE</a></li>
            <li><a href="uspechy-strana.html">ÚSPĚCHY</a></li>
            <li><a href="partneri-strana.html">PARTNEŘI</a></li>
            <li><a href="kontakt-strana.html">KONTAKT</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Editace</a></li>
          </ul>
        </div>
      </nav>
      <img class="img-fluid" src="titulniobrazek.png"></img>
      <div class="container text-center">
      </div>
      <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- Obsah 1. sloupce -->
            </div>
            <div class="col-md-4">
                <!-- Obsah 2. sloupce -->
            </div>
            <div class="col-md-4">
                <!-- Obsah 3. sloupce -->
            </div>
        </div>
    </div>
</body>
</html>