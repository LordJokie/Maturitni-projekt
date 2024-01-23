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
        if(isset($_POST["edit"])){
            require_once("dbconfig.php");
            $sql = "SELECT * FROM hraci where id = ".$_POST["edit"];
            $hraci = $conn->query($sql);
            echo "<table>";
                echo "<tr>";
                    echo "<th>"."Jméno"."</th>";
                    echo "<th>"."Kategorie"."</th>";
                    echo "<th>"."Věk"."</th>";
                    echo "<th>"."Země"."</th>";
                    echo "<th>"."Datum připojení"."</th>";
                echo "</tr>";
                foreach($hraci as $hrac){
                    $jmeno = $hrac['jmeno'];
                    $pozice = $hrac['pozice'];
                    $vek = $hrac['vek'];
                    $zeme = $hrac['zeme'];
                    $datum_pripojeni = $hrac['datum_pripojeni'];
                    echo "<tr>";
                        echo "<th>".$jmeno."</th>";
                        echo "<th>".$pozice."</th>";
                        echo "<th>".$vek."</th>";
                        echo "<th>".$zeme."</th>";
                        echo "<th>".$datum_pripojeni."</th>";
                    echo "</tr>";
                };
            echo "</table>";
    ?>
            <form action="proved.php" method="post">
                <label>Jméno</label>
                <input type="text" name="jmeno" value="<?php echo $jmeno ?>">
                <label>Kategorie</label>
                <input type="text" name="pozice" value="<?php echo $pozice ?>">
                <label>Věk</label>
                <input type="text" name="vek" value="<?php echo $vek ?>">
                <label>Země</label>
                <input type="text" name="zeme" value="<?php echo $zeme ?>">
                <label>Datum přidání</label>
                <input type="date" name="datum_pripojeni" value="<?php echo $datum_pripojeni ?>">
                <input type="hidden" name="id_edit" value="<?php echo $_POST["edit"] ?>">
                <input type="submit">
            </form>
    <?php
        }
    ?>




    <?php
if(isset($_POST["edit2"])){
            require_once("dbconfig.php");
            $mysql = "SELECT * FROM clanky where id = ".$_POST["edit2"];
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
                <input type="text" name="nazev" value="<?php echo $nazev ?>">
                <label>Autor</label>
                <input type="text" name="autor" value="<?php echo $autor ?>">
                <label>Kategorie</label>
                <input type="text" name="kategorie" value="<?php echo $kategorie ?>">
                <label>Obsah</label>
                <input type="text" name="obsah" value="<?php echo $obsah ?>">
                <label>Datum vydání</label>
                <input type="date" name="datum_vydani" value="<?php echo $datum_vydani ?>">
                <input type="hidden" name="id_edit2" value="<?php echo $_POST["edit2"] ?>">
                <input type="submit">
            </form>
    <?php
        }
    ?>
    

</body>
</html>