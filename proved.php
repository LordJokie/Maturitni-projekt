<?php
require_once("dbconfig.php");
$key = array_keys($_POST);
foreach ($key as $klic){
    $replaced = str_replace(' ', ' ', $_POST["$klic"]);
    $_POST["$klic"] = $replaced;
}


if(isset($_POST['update'])){
    $prezdivka = $_POST['prezdivka'];
    $jmeno = $_POST['jmeno'];
    $kategorie = $_POST['kategorie'];
    $vek = $_POST['vek'];
    $zeme = $_POST['zeme'];
    $pozice = $_POST['pozice'];

    $sql = "UPDATE hraci SET prezdivka = '".$prezdivka."', jmeno = '".$jmeno."', kategorie = '".$kategorie."', vek = '".$vek."', zeme = '".$zeme."', pozice = '".$pozice."' WHERE id = ".$_POST['update']."";

    $conn->query($sql);
}
if(isset($_POST['delete'])){
    $sql = "DELETE FROM hraci WHERE id = ".$_POST['delete']."";
    $conn->query($sql);
}
if(isset($_POST['insert'])) {
    $prezdivka = $_POST['prezdivka'];
    $jmeno = $_POST['jmeno'];
    $kategorie = $_POST['kategorie'];
    $vek = $_POST['vek'];
    $zeme = $_POST['zeme'];
    $pozice = $_POST['pozice'];
    $sql = "INSERT INTO hraci SET prezdivka = '".$prezdivka."', jmeno = '".$jmeno."', kategorie = '".$kategorie."', vek = '".$vek."', zeme = '".$zeme."', pozice = '".$pozice."'";
    $conn->query($sql);
    
}





if(isset($_POST['id_update2'])){
    $nazev = $_POST['nazev'];
    $autor = $_POST['autor'];
    $kategorie = $_POST['kategorie'];
    $obsah = $_POST['obsah'];
    $datum_vydani = $_POST['datum_vydani'];

    $mysql = "UPDATE clanky SET nazev = '".$nazev."', autor = '".$autor."', kategorie = '".$kategorie."', obsah = '".$obsah."', datum_vydani = '".$datum_vydani."' WHERE id = ".$_POST['id_update2']."";

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