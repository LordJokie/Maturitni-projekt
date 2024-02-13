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

    @media only screen and (max-width: 1199.5px) {
        body {
        background-color: lightblue;
        }
    }

    @media only screen and (max-width: 991.5px) {
        body {
        background-color: red;
        }
    }

    @media only screen and (max-width: 767.5px) {
        body {
        background-color: green;
        }
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
        margin: 0;
    }
    tr {
        background-color: white;
    }
     #tlacitko{
        margin-top: 5px;
        height: 40px;
        background-color: black;
        color: cyan;
    }
    #tlacitko:hover {
        background-color: cyan;
        color: #000;
        cursor: pointer;
        box-shadow: 0 0 10px  cyan, 0 0 20px cyan, 0 0 30px cyan;
        border: 1px solid transparent;
        transition: 0.4s;
    }

    .btn-danger {
        margin-top: 5px;
    }

    .table .thead-dark th {
        background-color: black;
    }
    .table td, .table th {
        vertical-align: middle;
        padding: 0.4rem;
    }
    td {
        max-width: 118px;
        overflow: hidden;
        overflow-x: scroll;
    }
    
    input {
        text-align: center;
    }

    .table td::-webkit-scrollbar {
        width: 5px;
        height: 8px;
    }

    .table td::-webkit-scrollbar-track {
    background-color: transparent;
    }

    .table td::-webkit-scrollbar-thumb {
    background-color: cyan;
    border-radius: 2px;
    }

    .table td.needs-scrollbar::-webkit-scrollbar-thumb {
    display: block;
    }

    .table td.no-scrollbar::-webkit-scrollbar-thumb {
    display: none;
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
        '<form action="rozcesti.php">'.
            '<input type="submit" value="ZPĚT" id="tlacitko">'.
            '<input type="hidden">'.
        '</form>'.
    "</td>";
    echo "</div>";
    
    echo "<div class='col-6 col-md-4 text-center'>";
    echo 
    "<td>".
        '<form action="hraci-tabulka.php" method="POST">'.
            '<input type="submit" value="PŘIDAT HRÁČE" id="tlacitko">'.
            '<input type="hidden" name="insert1">'.
        '</form>'.
    "</td>";
    echo "</div>";

    echo "<div class='col-6 col-md-4 text-center'>";
    echo "<a href='logout.php' type='button' class='btn btn-danger'>LOGOUT</a>";
    echo "</div>";
    echo "</div>";

    require_once("dbconfig.php");
    $sql = "SELECT * FROM hraci";
    $hraci = $conn->query($sql);

    echo "<div class='row'>";
    echo "<div class='container-fluid p-0'>";
    echo "<table class='table table-bordered text-center'>";
    echo "<thead class='thead-dark'>";
        echo "<tr>";
            echo "<th scope='col'>"."Přezdívka"."</th>";
            echo "<th scope='col'>"."Jméno"."</th>";
            echo "<th scope='col'>"."Kategorie"."</th>";
            echo "<th scope='col'>"."Věk"."</th>";
            echo "<th scope='col'>"."Země"."</th>";
            echo "<th scope='col'>"."Pozice"."</th>";            
            echo "<th scope='col'>"."Edit"."</th>";
            echo "<th scope='col'>"."Delete"."</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";



        if(isset($_POST["insert1"])){
            echo "<tr>";
                    echo "<form action='proved.php' method='POST'>";
                    echo "<td><input type='text' name='prezdivka'/></td>";
                    echo "<td><input type='text' name='jmeno'/></td>";
                    echo "<td><input type='text' name='kategorie'/></td>";
                    echo "<td><input type='number' name='vek'/></td>";
                    echo "<td><input type='text' name='zeme'/></td>";
                    echo "<td><input type='text' name='pozice'/></td>";
                    echo '<input type="hidden" name="insert">';
                    echo "<td>".'<input type="submit" value="add">'."</td>";
                    echo "</form>";
                    echo 
                            "<td>".
                                '<form action="hraci-tabulka.php" method="POST">'.
                                    '<input type="submit" value="cancel">'.
                                '</form>'.
                            "</td>";
                      
                      
        }




        foreach( $hraci as $hrac ) {
            if(isset($_POST["update1"])){
                if($_POST["update1"]=="$hrac[id]"){
                echo "<tr>";
                    echo "<form action='proved.php' method='POST'>";
                    echo "<td><input type='text' name='prezdivka' value='".$hrac['prezdivka']."'/></td>";
                    echo "<td><input type='text' name='jmeno' value='".$hrac['jmeno']."'/></td>";
                    echo "<td><input type='text' name='kategorie' value='".$hrac['kategorie']."'/></td>";
                    echo "<td><input type='number' name='vek' value='".$hrac['vek']."'/></td>";
                    echo "<td><input type='text' name='zeme' value='".$hrac['zeme']."'/></td>";
                    echo "<td><input type='text' name='pozice' value='".$hrac['pozice']."'/></td>";
                    echo '<input type="hidden" name="update" value='.$hrac["id"].'>';
                    echo "<td>".'<input type="submit" value="save">'."</td>";
                      echo "</form>";
                      echo 
                            "<td>".
                                '<form action="hraci-tabulka.php" method="POST">'.
                                    '<input type="submit" value="cancel">'.
                                '</form>'.
                            "</td>";
                echo "</tr>";
                }
                else {
                    echo "<tr>";
                        echo "<form action='hraci-tabulka.php' method='POST'>";
                            echo "<td>" .$hrac['prezdivka']."</td>";
                            echo "<td>" .$hrac['jmeno']."</td>";
                            echo "<td>" .$hrac['kategorie']."</td>";
                            echo "<td>" .$hrac['vek']."</td>";
                            echo "<td>" .$hrac['zeme']."</td>";
                            echo "<td>" .$hrac['pozice']."</td>";
                            echo '<input type="hidden" name="update1" value='.$hrac["id"].'>';
                            echo "<td>".'<input type="submit" value="edit">'."</td>";
                            echo "</form>";
            
                        echo 
                            "<td>".
                                '<form action="proved.php" method="POST">'.
                                    '<input type="submit" value="delete">'.
                                    '<input type="hidden" name="delete" value='.$hrac["id"].'>'.
                                '</form>'.
                            "</td>";
                    echo "</tr>";
                }
            }
            else {
                echo "<tr>";
                        echo "<form action='hraci-tabulka.php' method='POST'>";
                            echo "<td>" .$hrac['prezdivka']."</td>";
                            echo "<td>" .$hrac['jmeno']."</td>";
                            echo "<td>" .$hrac['kategorie']."</td>";
                            echo "<td>" .$hrac['vek']."</td>";
                            echo "<td>" .$hrac['zeme']."</td>";
                            echo "<td>" .$hrac['pozice']."</td>";
                            echo '<input type="hidden" name="update1" value='.$hrac["id"].'>';
                            echo "<td>".'<input type="submit" value="edit">'."</td>";
                            echo "</form>";
            
                        echo 
                            "<td>".
                                '<form action="proved.php" method="POST">'.
                                    '<input type="submit" value="delete">'.
                                    '<input type="hidden" name="delete" value='.$hrac["id"].'>'.
                                '</form>'.
                            "</td>";
                    echo "</tr>";
            }
        };
        echo "</tbody>";
    echo "</table>";
    echo "</div>";
    }
else {
    header("Location: hlavni-strana.php");
}
?>
</body>
</html>