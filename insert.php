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
                    echo "<th>"."jmeno"."</th>";
                    echo "<th>"."pozice"."</th>";
                    echo "<th>"."věk"."</th>";
                    echo "<th>"."země"."</th>";
                    echo "<th>"."datum připojení"."</th>";
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
                <label>Jmeno</label>
                <input type="text" name="jmeno">
                <label>Pozice</label>
                <input type="text" name="pozice">
                <label>Vek</label>
                <input type="text" name="vek">
                <label>Zeme</label>
                <input type="text" name="zeme">
                <label>Datum Pridani</label>
                <input type="date" name="datum_pripojeni">
                <input type="hidden" name="insert">
                <input type="submit">
            </form>
    <?php
        }
    ?>

</body>
</html>