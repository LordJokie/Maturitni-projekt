<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        border: 3px solid  #00FFFF;
        margin: 0;
    }
    tr {
        background-color: white;
    }
     #tlacitko{
        margin-top: 5px;
        height: 40px;
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

.table td::-webkit-scrollbar {
    width: 5px;
    height: 8px;
}

.table td::-webkit-scrollbar-track {
  background-color: transparent;
}

.table td::-webkit-scrollbar-thumb {
  background-color:  #00FFFF;
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
    require_once("dbconfig.php");
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
            '<form action="clanky-tabulka.php" method="POST">'.
                '<input type="submit" value="PŘIDAT ČLÁNEK" id="tlacitko">'.
                '<input type="hidden" name="insert2">'.
            '</form>'.
        "</td>";
        echo "</div>";

        echo "<div class='col-6 col-md-4 text-center'>";
        echo "<a href='logout.php' type='button' class='btn btn-danger'>LOGOUT</a>";
        echo "</div>";
        echo "</div>";

    $mysql = "SELECT * FROM clanky";
    $clanky = $conn->query($mysql);
    echo "<div class='container-fluid p-0'>";
    echo "<table class='table table-bordered text-center'>";
    echo "<thead class='thead-dark'>";
        echo "<tr>";
            echo "<th scope='col'>"."Název"."</th>";
            echo "<th scope='col'>"."Autor"."</th>";
            echo "<th scope='col'>"."Kategorie"."</th>";
            echo "<th scope='col'>"."Obsah"."</th>";
            echo "<th scope='col'>"."Datum vydání"."</th>";            
            echo "<th scope='col'>"."Update"."</th>";
            echo "<th scope='col'>"."Delete"."</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";


        if(isset($_POST["insert2"])){
            echo "<tr>";
                    echo "<form action='proved.php' method='POST'>";
                    echo "<td><input type='text' name='nazev'/></td>";
                    echo "<td><input type='text' name='autor'/></td>";
                    echo "<td><input type='text' name='kategorie'/></td>";
                    echo "<td><input type='text' name='obsah'/></td>";
                    echo "<td><input type='date' name='datum_vydani'/></td>";
                    echo '<input type="hidden" name="insert2">';
                    echo "<td>".'<input type="submit" value="add">'."</td>";
                    echo "</form>";
                    echo 
                            "<td>".
                                '<form action="clanky-tabulka.php" method="POST">'.
                                    '<input type="submit" value="cancel">'.
                                '</form>'.
                            "</td>";
                      
                      
        }
        
        foreach( $clanky as $clanek ) {
            if(isset($_POST["update2"])){
                if($_POST["update2"]=="$clanek[id]"){
                echo "<tr>";
                    echo "<form action='proved.php' method='POST'>";
                    echo "<td><input type='text' name='nazev' value='".$clanek['nazev']."'/></td>";
                    echo "<td><input type='text' name='autor' value='".$clanek['autor']."'/></td>";
                    echo "<td><input type='text' name='kategorie' value='".$clanek['kategorie']."'/></td>";
                    echo "<td><input type='text' name='obsah' value='".$clanek['obsah']."'/></td>";
                    echo "<td><input type='date' name='datum_vydani' value='".$clanek['datum_vydani']."'/></td>";
                    echo '<input type="hidden" name="update2" value='.$clanek["id"].'>';
                    echo "<td>".'<input type="submit" value="save">'."</td>";
                      echo "</form>";
                      echo 
                            "<td>".
                                '<form action="clanky-tabulka.php" method="POST">'.
                                    '<input type="submit" value="cancel">'.
                                '</form>'.
                            "</td>";
                    echo "</tr>";
                }
                else {
                    echo "<tr>";
                        echo "<form action='clanky-tabulka.php' method='POST'>";
                            echo "<td>" .$clanek['nazev']."</td>";
                            echo "<td>" .$clanek['autor']."</td>";
                            echo "<td>" .$clanek['kategorie']."</td>";
                            echo "<td>" .$clanek['obsah']."</td>";
                            echo "<td>" .$clanek['datum_vydani']."</td>";
                            echo '<input type="hidden" name="update2" value='.$clanek["id"].'>';
                            echo "<td>".'<input type="submit" value="edit">'."</td>";
                            echo "</form>";
            
                        echo 
                            "<td>".
                                '<form action="proved.php" method="POST">'.
                                    '<input type="submit" value="delete">'.
                                    '<input type="hidden" name="delete2" value='.$clanek["id"].'>'.
                                '</form>'.
                            "</td>";
                    echo "</tr>";
                }
            }
            else {
                echo "<tr>";
                    echo "<form action='clanky-tabulka.php' method='POST'>";
                        echo "<td>" .$clanek['nazev']."</td>";
                        echo "<td>" .$clanek['autor']."</td>";
                        echo "<td>" .$clanek['kategorie']."</td>";
                        echo "<td>" .$clanek['obsah']."</td>";
                        echo "<td>" .$clanek['datum_vydani']."</td>";
                        echo '<input type="hidden" name="update2" value='.$clanek["id"].'>';
                        echo "<td>".'<input type="submit" value="edit">'."</td>";
                        echo "</form>";
            
                        echo 
                            "<td>".
                                '<form action="proved.php" method="POST">'.
                                    '<input type="submit" value="delete">'.
                                    '<input type="hidden" name="delete2" value='.$clanek["id"].'>'.
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
        header("hlavni-strana.php");
    }
    ?>
</body>
</html>