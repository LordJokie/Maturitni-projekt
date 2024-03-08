<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: black;
        }

        #hihi {
            background-color: #333;
            height: 50px;
        }

        .btn-danger {
            margin-top: 5px;
            background-color: #dc3545;
            border-color: #dc3545; 
            font-size: 18px;
            height: 40px;
        }

        .row {
            margin-left: 0px;
            margin-right: 0px;
        }
        .col-6 {
            float: left;
            width: 50%;
            display: flex;
            justify-content: center;

        }

        #tlacitko{
            margin-top: 200px;
            height: 100px;
            background-color: black;
            color:  #00FFFF;
        }

        #tlacitko:hover {
            background-color:  #00FFFF;
            color: #000;
            cursor: pointer;
            box-shadow: 0 0 10px   #00FFFF, 0 0 20px  #00FFFF, 0 0 30px  #00FFFF;
            border: 1px solid transparent;
            transition: 0.4s;
        }
        img{
            max-width: 100%;
            height: auto;
            border: solid;
            border-color:  #00FFFF;
            border-radius: 5px;
            border-width: 5px;
        }
        .card {
            margin-top: 23%;
        }


    </style>
</head>
<body>
    <?php

session_start();
if (!isset($_SESSION['user_name'])) {
    header( "Location: hlavni-strana.php");
}
else {?>

<div class='row text-center' id='hihi'>;
        <a href='logout.php' type='button' class='btn btn-danger'>LOGOUT</a>;
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-6 text-center">
            <div class="card" style="width: 50%;">
            <a href="hraci-tabulka.php"><img src="hraci.png" class="card-img-top" alt="..."></a>
                <div class="card-body">
                </div>
            </div>
        </div>

        <div class="col-6 text-center">
            <div class="card" style="width: 50%;">
            <a href="clanky-tabulka.php"><img src="clanky.png" class="card-img-top"alt="..."></a>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
}
?>
</body>
</html>