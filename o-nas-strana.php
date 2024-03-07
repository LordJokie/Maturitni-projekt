<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O nás</title>
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
        .position-text {
            position: absolute;
            top: 49%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 50px;
            font-weight: bold;
        }
        h2 {
          margin-top: 70px;
          color: white;
          font-size: 20px;
          font-weight: bold;
        }
        .navbar-inverse .navbar-nav>li>a {
          color: #F2ECFF;
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
          color: #007FFF;
        }
        .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
          color: #007FFF;
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
        .img-fluid {
          margin-top: -20px;
          width: 100%;
          height: 100%;
        }
          #fluid1 {
          padding-left: 0;
          padding-right: 0;
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
            <li class="active"><a>O NÁS</a></li>
            <li><a href="clanky-strana.php">ČLÁNKY</a></li>
            <li><a href="hraci-strana.php">HRÁČI</a></li>
            <li><a href="uspechy-strana.php">ÚSPĚCHY</a></li>
            <li><a href="partneri-strana.php">PARTNEŘI</a></li>
            <li><a href="kontakt-strana.php">KONTAKT</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['id'])): ?>
              <li><a href="logout.php?redirect=http://localhost/PROJEKT/o-nas-strana.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
              <?php else: ?>
              <li><a href="login.php"><span class="glyphicon glyphicon-pencil"></span></a></li>
              <?php endif; ?>     
          </ul>
        </div>
      </nav>
        
      <div class="container-fluid text-center" id="fluid1">
        <div class="position-text">
            <h1>O nás</h1>
            <h2>eSuba je historicky nejúspěšnější organizace věnující se esportu v Česku a na Slovensku. Za 18 let působení tým získal mnoho ocenění na československé i mezinárodní scéně. eSuba se angažuje v dvou herních sekcích, a to League of Legends a Counter-Strike: Global Offensive.</h2>
            <h2>Historie: Tým byl založen roku 2004 Ladislavem Dyntarem. První sestava týmu byla představena pro hru Call of Duty ve složení sLic, PITTBULL, Kursk23 a Nodlle. V roce 2007 organizace podepsala spolupráci se společnostmi AMD, SAPPHIRE a HAL3000. Tým se dočasně přejmenoval na eSuba.HAL3000. S postupem času začala eSuba působit ve více hrách, nejdéle se věnovala herním sériím Counter-Strike a Call of Duty.</h2> 
            <h2>21. března 2011 eSuba oznámila League of Legends sekci a hned další rok ovládla v tomto herním titulu největší CZ/SK turnaj Mistroství ČR 2012, které si posádka v čele s Pavlem "Herdynem" Mikešem připsala opět i v roce 2013. V roce 2011 si taktéž Erik "hakkiJunior" Leštach připsal Mistroství světa ESWC 2011 v Trackmanii a získal tak jeden z největších úspěchů českého esportu.</h2>
              </div>
        <img class="img-fluid" src="sestava-pozadi.png"></img>
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