<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hráči</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
          color: white;
          font-weight: bold;
          font-size: 80px;
          margin-top: 20px;
        }
        footer {
          bottom: 0;
          width: 100%;
          height: min-content;
          margin-top: 40px;
        }
    </style>
</head>
<body>
<?php session_start() ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
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

      <footer>
            <div class="container-fluid">
              <div class="row text-center" id="modrej">
                      <p class="modrakrev">#modrakrev</p>
              </div>
          </div>
      </footer>
</body>
</html>