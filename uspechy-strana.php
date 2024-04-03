<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Úspěchy</title>
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
        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
        }
        body {
          background-color: black;
          overflow-x: hidden;
        }
        h1 {
          margin-top: 30px;
          color: #007FFF;
          font-size: 50px;
          font-weight: bold;
        }
        h2 {
          color: black;
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
        .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
          color: #007FFF;
        }
        #modrej {
          background-color: #0069FF;
          height: 150px;
          bottom: 0;
        }
        .modrakrev {
          text-align: center;
          color: white;
          font-weight: bold;
          font-size: 80px;
          margin-top: 20px;
        }
        .text-center{
          width: 100% !important;
        }
        .rows{
          margin-top: 80px;
          display: flex;
          flex-direction: column;
          gap: 200px;
        }
        .row::after, .row::before{
          display: none;
        }
        .row{
          width: 80%;
          max-width: 900px;
          margin: 0 auto;
          display: flex;
          flex-wrap: wrap;
          align-items: center;
          justify-content: space-between;
          height: 300px;
          background:#fff;
        }
        .row .text{
          width: 400px;
          margin-inline: 30px;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          text-align: center;
        }
        .row:nth-child(2),
        .row:nth-child(4),
        .row:nth-child(6){
          flex-direction: row-reverse;
        }
        #img {
          margin-top: -25px;
          height: 350px;
          aspect-ratio: 1.25;
          border: 1px solid grey;
        }
      
        footer {
          bottom: 0;
          width: 100%;
          background-color: #0069FF;
          height: min-content;
          display: flex;
          flex-direction: column;
          margin-top: 90px;
        }
        footer * {
          margin: 0;
          padding: 0;
        }
        @media screen and (max-width:1080px) {
          .row{
            align-items: normal;
            justify-content: center;
            width: 437.5px;
            height: 500px;
          }
          .row .text{
            margin: 0;
          }
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
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="hlavni-strana.php"><img id="esuba"  src="logo.png"></img></a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="o-nas-strana.php">O NÁS</a></li>
            <li><a href="clanky-strana.php">ČLÁNKY</a></li>
            <li><a href="hraci-strana.php">HRÁČI</a></li>
            <li class="active"><a>ÚSPĚCHY</a></li>
            <li><a href="partneri-strana.php">PARTNEŘI</a></li>
            <li><a href="kontakt-strana.php">KONTAKT</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['id'])): ?>
              <li><a href="logout.php?redirect=http://localhost/PROJEKT/uspechy-strana.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
              <?php else: ?>
              <li><a href="login.php"><span class="glyphicon glyphicon-pencil"></span></a></li>
              <?php endif; ?> 
          </ul>
        </div>
      </nav>
        
      <div class="container text-center">
        <h1>Úspěchy</h1>
      </div>

      <div class="rows">
        <div class="row">
            <img id="img" src="https://www.esuba.eu/sites/default/files/styles/800x450/public/field/image/dany_esuba.jpg?itok=1rtIXKHH" alt="..."> </img>
            <div class="text">
              <h2>LoL tým veze z Brna stříbro</h2>
              <h2>2023</h2>
            </div>
        </div>

        
        <div class="row">
            <img id="img" src="https://www.esuba.eu/sites/default/files/styles/800x450/public/field/image/lmx00855.jpg?itok=SaBud5C7" alt="..."> </img>
            <div class="text">
              <h2>CS:GO sekce veze z FOR GAMES stříbro</h2>
              <h2>2022</h2>
            </div>
        </div>

        
        <div class="row">
            <img id="img" src="https://www.esuba.eu/sites/default/files/new_images/Fotografie/_dsc6308.jpg" alt="..."> </img>
            <div class="text">
              <h2>CSkaři berou stříbro z MČR</h2>
              <h2>2022</h2>
            </div>
        </div>

        
        <div class="row">
            <img id="img" src="https://www.esuba.eu/sites/default/files/styles/800x450/public/field/image/244750662_10159500187357954_7381763546472130688_n.jpg?itok=KBc8JR7D" alt="..."> </img>
            <div class="text">
              <h2>Máme double z MSR!</h2>
              <h2>2021</h2>
            </div>
        </div>

        
        <div class="row">
            <img id="img" src="https://www.esuba.eu/sites/default/files/styles/800x450/public/field/image/esuba-gg_0.jpg?itok=O9ieXJGI" alt="..."> </img>
            <div class="text">
              <h2>Hattrick! Díky senzačnímu obratu eSuba ovládla Hitpoint Winter</h2>
              <h2>2020</h2>
            </div>
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