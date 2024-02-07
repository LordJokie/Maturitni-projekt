<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table, th, td {
    border:1px solid black;
    }
    </style>
</head>
<body>
    <?php
        session_start();
        if(isset($_POST["insert"])){
            require_once("dbconfig.php");
            $sql = "SELECT * FROM hraci";
            $hraci = $conn->query($sql);
            echo "<table>";
                echo "<tr>";
                    echo "<th>"."Jméno"."</th>";
                    echo "<th>"."Kategorie"."</th>";
                    echo "<th>"."Věk"."</th>";
                    echo "<th>"."Země"."</th>";
                    echo "<th>"."Pozice"."</th>";
                echo "</tr>";
                foreach($hraci as $hrac){
                    $jmeno = $hrac['jmeno'];
                    $kategorie = $hrac['kategorie'];
                    $vek = $hrac['vek'];
                    $zeme = $hrac['zeme'];
                    $pozice = $hrac['pozice'];
                    echo "<tr>";
                        echo "<th>".$jmeno."</th>";
                        echo "<th>".$kategorie."</th>";
                        echo "<th>".$vek."</th>";
                        echo "<th>".$zeme."</th>";
                        echo "<th>".$pozice."</th>";
                    echo "</tr>";
                };
            echo "</table>";
    ?>
            <form action="proved.php" method="post">
                <label>Jméno</label>
                <input type="text" name="jmeno">
                <label>Kategorie</label>
                <input type="text" name="kategorie">
                <label>Věk</label>
                <input type="text" name="vek">
                <label>Země</label>
                <input type="text" name="zeme">
                <label>Pozice</label>
                <input type="text" name="pozice">
                <input type="hidden" name="insert">
                <input type="submit">
            </form>
    <?php
        }
    ?>

<?php
if(isset($_POST["insert2"])){
            require_once("dbconfig.php");
            $mysql = "SELECT * FROM clanky";
            $clanky = $conn->query($mysql);
            echo "<table>";
                echo "<tr>";
                    echo "<th>"."Název"."</th>";
                    echo "<th>"."Autor"."</th>";
                    echo "<th>"."Kategorie"."</th>";
                    echo "<th>"."Obsah"."</th>";
                    echo "<th>"."Datum vydání"."</th>";
                echo "</tr>";
                foreach($clanky as $clanek){
                    $nazev = $clanek['nazev'];
                    $autor = $clanek['autor'];
                    $kategorie = $clanek['kategorie'];
                    $obsah = $clanek['obsah'];
                    $datum_vydani = $clanek['datum_vydani'];
                    echo "<tr>";
                        echo "<th>".$nazev."</th>";
                        echo "<th>".$autor."</th>";
                        echo "<th>".$kategorie."</th>";
                        echo "<th>".$obsah."</th>";
                        echo "<th>".$datum_vydani."</th>";
                    echo "</tr>";
                };
            echo "</table>";
    ?>
            <form action="proved.php" method="post">
                <label>Název</label>
                <input type="text" name="nazev">
                <label>Autor</label>
                <input type="text" name="autor">
                <label>Kategorie</label>
                <input type="text" name="kategorie">
                <label>Obsah</label>
                <input type="text" name="obsah">
                <label>Datum vydání</label>
                <input type="date" name="datum_vydani">
                <input type="hidden" name="insert2">
                <input type="submit">
            </form>
    <?php
        }
    ?>
</body>
</html>