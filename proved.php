<?php
require_once("dbconfig.php");
if(isset($_POST['id_edit'])){
    $jmeno = $_POST['jmeno'];
    $pozice = $_POST['pozice'];
    $vek = $_POST['vek'];
    $zeme = $_POST['zeme'];
    $datum_pripojeni = $_POST['datum_pripojeni'];

    $sql = "UPDATE hraci SET jmeno = '".$jmeno."', pozice = '".$pozice."', vek = '".$vek."', zeme = '".$zeme."', datum_pripojeni = '".$datum_pripojeni."' WHERE id = ".$_POST['id_edit']."";

    $conn->query($sql);
}
if(isset($_POST['delete'])){
    $sql = "DELETE FROM hraci WHERE id = ".$_POST['delete']."";
    $conn->query($sql);
}
if(isset($_POST['insert'])) {
    $jmeno = $_POST['jmeno'];
    $pozice = $_POST['pozice'];
    $vek = $_POST['vek'];
    $zeme = $_POST['zeme'];
    $datum_pripojeni = $_POST['datum_pripojeni'];
    $sql = "INSERT INTO hraci SET jmeno = '".$jmeno."', pozice = '".$pozice."', vek = '".$vek."', zeme = '".$zeme."', datum_pripojeni = '".$datum_pripojeni."'";
    $conn->query($sql);
}





if(isset($_POST['id_edit2'])){
    $nazev = $_POST['nazev'];
    $autor = $_POST['autor'];
    $kategorie = $_POST['kategorie'];
    $obsah = $_POST['obsah'];
    $datum_vydani = $_POST['datum_vydani'];

    $mysql = "UPDATE clanky SET nazev = '".$nazev."', autor = '".$autor."', kategorie = '".$kategorie."', obsah = '".$obsah."', datum_vydani = '".$datum_vydani."' WHERE id = ".$_POST['id_edit2']."";

    $conn->query($mysql);
}
if(isset($_POST['delete2'])){
    $mysql = "DELETE FROM clanky WHERE id = ".$_POST['delete2']."";
    $conn->query($mysql);
}
if(isset($_POST['insert2'])) {
    $nazev = $_POST['nazev'];
    $autor = $_POST['autor'];
    $kategorie = $_POST['kategorie'];
    $obsah = $_POST['obsah'];
    $datum_vydani = $_POST['datum_vydani'];

    $mysql = "INSERT INTO clanky SET nazev = '".$nazev."', autor = '".$autor."', kategorie = '".$kategorie."', obsah = '".$obsah."', datum_vydani = '".$datum_vydani."'";

    $conn->query($mysql);
}
header("Location: admin.php");
?>