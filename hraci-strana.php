<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hráči</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        ::-webkit-scrollbar {
          width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
          background-color: #333;	
        }
        
        /* Handle */
        ::-webkit-scrollbar-thumb {
          background: #0069FF; 
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
          background: #002F6C; 
        }
        body {
          background-color: black;
        }
        h1 {
          margin-top: 70px;
          color: #007FFF;
          font-size: 50px;
          font-weight: bold;
        }
        .navbar-inverse .navbar-nav>li>a:focus, .navbar-inverse .navbar-nav>li>a:hover {
          transition: 0.5s;
          color: #007FFF;
        }
        .navbar-inverse .navbar-nav>li>a {
          color: #F2ECFF;
        }   
        .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
          color: #007FFF;
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
        #modrej {
          background-color: #0069FF;
          height: 150px;
        }
        .modrakrev {
          text-align: center;
          color: white;
          font-weight: bold;
          font-size: 80px;
          margin-top: 20px;
        }
        .card {
          box-shadow: none !important;
          background-color: white;
          border: 5px solid #007FFF;
          border-radius: 5px;
        }
        .card-title {
          text-align: center;
          font-weight: bold;
          font-size:x-large;
          color: black;
        }
        .card-text {
          font-size:small;
          font-weight: bolder;
          color: black;
        }
        .card-subtitle {
          font-size: medium;
          font-weight: bolder;
          color: black;
        }
        #img-hrac {
          object-fit: cover;
          max-width: 100%;
          border:  2px solid black;
        }
        #col-hraci {
          display: flex;
          justify-content: center;
          align-items: center;
          padding-top: 20px;
          padding-bottom: 40px;
        }
        footer {
          bottom: 0;
          width: 100%;
          background-color: #0069FF;
          height: min-content;
          display: flex;
          flex-direction: column;
        }
        footer * {
          margin: 0;
          padding: 0;
        }
        .odkazy  {
          width: 100%;
          display: flex;
          justify-content: center;
          gap: 10px;
          
        }
        .odkazy a {
          color: white;
        }
    </style>
</head>
<body>
<?php session_start(); ?>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="hlavni-strana.php"><img id="esuba"  src="logo.png"></img></a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="o-nas-strana.php">O NÁS</a></li>
            <li><a href="clanky-strana.php">ČLÁNKY</a></li>
            <li class="active"><a>HRÁČI</a></li>
            <li><a href="uspechy-strana.php">ÚSPĚCHY</a></li>
            <li><a href="partneri-strana.php">PARTNEŘI</a></li>
            <li><a href="kontakt-strana.php">KONTAKT</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['id'])): ?>
              <li><a href="logout.php?redirect=http://localhost/PROJEKT/hraci-strana.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
              <?php else: ?>
              <li><a href="login.php"><span class="glyphicon glyphicon-pencil"></span></a></li>
              <?php endif; ?> 
          </ul>
        </div>
      </nav>
        
      <div class="container text-center">
        <h1>Hráči</h1>
      </div>

      <div class="container">
  <div class="row">
    <?php
        require_once ("dbconfig.php");
        $sql = "SELECT * FROM hraci";
        $hraci = $conn->query($sql);
    foreach ($hraci as $hrac):
    ?>
      <div class="col-md-4 text-center" id="col-hraci">
        <div class="card" style="width: 30rem;">
          <img id="img-hrac" src="<?php echo $hrac['imageurl']; ?>" class="card-img-top" alt="..."> 
          <div class="card-body">
            <h5 class="card-title"><?php echo $hrac['prezdivka']; ?></h5>
            <p class="card-subtitle"><?php echo $hrac['jmeno']; ?></p>
            <h6 class="card-text"><?php echo $hrac['kategorie']; ?></h6>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<footer>
        <p class="modrakrev">#modrakrev</p>
        <div class="odkazy">
            <a href="https://www.facebook.com/esuba.eu"><i class="bi bi-facebook" aria-hidden="true"></i></a>
            <a href="https://www.youtube.com/user/eSubacz"><i class="bi bi-youtube" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/esuba.gg/"><i class="bi bi-instagram" aria-hidden="true"></i></a>
            <a href="https://twitter.com/esubacz"><i class="bi bi-twitter" aria-hidden="true"></i></a>
            <a href="https://www.twitch.tv/eSuba"><i class="bi bi-twitch" aria-hidden="true"></i></a>
            <a href="https://discord.gg/ESkSfUk"><i class="bi bi-discord" aria-hidden="true"></i></a>
        </div>
      </footer>

</body>
</html>