<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editace</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    body {
        background-color: grey;
    }
    .row {
        margin-left: 0px;
        margin-right: 0px;
    }
    .col-6 {
        padding: 0;
    }
    #hihi {
        background-color: #333;
        height: 50px;
    }
    .table-bordered {
        border: 3px solid cyan;
    }
    tr {
        background-color: white;
    }
</style>
</head>
<body>
<?php
session_start();
if (isset($_SESSION['user_name'])) {

    echo "<div class='row' id='hihi'>";
    echo "<div class='col-6 col-md-4 text-center'>";
    echo 
    "<td>".
        '<form action="insert.php" method="POST">'.
            '<input type="submit" value="přidat hráče">'.
            '<input type="hidden" name="insert">'.
        '</form>'.
    "</td>";
    echo "</div>";
    echo "<div class='col-6 col-md-4 text-center'>";
    echo "<a href='logout.php'>Exit</a>";
    echo "</div>";
    echo "<div class='col-6 col-md-4 text-center'>";
    echo 
    "<td>".
        '<form action="insert.php" method="POST">'.
            '<input type="submit" value="přidat článek">'.
            '<input type="hidden" name="insert2">'.
        '</form>'.
    "</td>";
    echo "</div>";
    echo "</div>";

    require_once("dbconfig.php");
    $sql = "SELECT * FROM hraci";
    $hraci = $conn->query($sql);
    echo "<div class='row'>";
    echo "<div class='col-6'>";
    echo "<table class='table table-bordered text-center'>";
    echo "<thead class='thead-dark'>";
        echo "<tr>";
            echo "<th scope='col'>"."Jméno"."</th>";
            echo "<th scope='col'>"."Pozice"."</th>";
            echo "<th scope='col'>"."Věk"."</th>";
            echo "<th scope='col'>"."Země"."</th>";
            echo "<th scope='col'>"."Datum připojení"."</th>";            
            echo "<th scope='col'>"."Edit"."</th>";
            echo "<th scope='col'>"."Delete"."</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach($hraci as $hrac){
            echo "<tr>";
                echo "<td>".$hrac['jmeno']."</th>";
                echo "<td>".$hrac['pozice']."</th>";
                echo "<td>".$hrac['vek']."</th>";
                echo "<td>".$hrac['zeme']."</th>";
                echo "<td>".$hrac['datum_pripojeni']."</th>";
                echo 
                    "<td>".
                        '<form action="edit.php" method="POST">'.
                            '<input type="submit" value="edit">'.
                            '<input type="hidden" name="edit" value='.$hrac["id"].'>'.
                        '</form>'.
                    "</td>";
                echo 
                    "<td>".
                        '<form action="proved.php" method="POST">'.
                            '<input type="submit" value="delete">'.
                            '<input type="hidden" name="delete" value='.$hrac["id"].'>'.
                        '</form>'.
                    "</td>";
            echo "</tr>";
        };
        echo "</tbody>";
    echo "</table>";
    echo "</div>";


    $mysql = "SELECT * FROM clanky";
    $clanky = $conn->query($mysql);
    echo "<div class='col-6'>";
    echo "<table class='table table-bordered text-center'>";
    echo "<thead class='thead-dark'>";
        echo "<tr>";
            echo "<th scope='col'>"."Název"."</th>";
            echo "<th scope='col'>"."Autor"."</th>";
            echo "<th scope='col'>"."Kategorie"."</th>";
            echo "<th scope='col'>"."Obsah"."</th>";
            echo "<th scope='col'>"."Datum vydání"."</th>";            
            echo "<th scope='col'>"."Edit"."</th>";
            echo "<th scope='col'>"."Delete"."</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        foreach($clanky as $clanek){
            echo "<tr>";
                echo "<td>".$clanek['nazev']."</th>";
                echo "<td>".$clanek['autor']."</th>";
                echo "<td>".$clanek['kategorie']."</th>";
                echo "<td>".$clanek['obsah']."</th>";
                echo "<td>".$clanek['datum_vydani']."</th>";
                echo 
                    "<td>".
                        '<form action="edit.php" method="POST">'.
                            '<input type="submit" value="edit">'.
                            '<input type="hidden" name="edit2" value='.$clanek["id"].'>'.
                        '</form>'.
                    "</td>";
                echo 
                    "<td>".
                        '<form action="proved.php" method="POST">'.
                            '<input type="submit" value="delete">'.
                            '<input type="hidden" name="delete2" value='.$clanek["id"].'>'.
                        '</form>'.
                    "</td>";
            echo "</tr>";
        };
        echo "</tbody>";
    echo "</table>";
    echo "</div>";
    echo "</div>";
}
else {
    header("Location: hlavni-strana.php");
}
?>
</body>
</html>