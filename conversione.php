<?php
session_start();

if ( isset($_POST["latitudine"]) ) { //verifico se la variabile $_POST è stata inizializzata - ad isset va passato il nome della variabile o dell'elemento dell'array da analizzare
    $latitudine = $_POST["latitudine"];
    $longitudine = $_POST["longitudine"];
    echo "latitudine : " . $latitudine . "         longitudine : " . $longitudine . "<br>";
}

$latitudine= trim($latitudine);
$longitudine = trim($longitudine);

$latitudine= str_replace("," ,"." ,$latitudine);
$longitudine = str_replace("," ,"." ,$longitudine);

//Salvo i dati...
$_SESSION['latitudine'] = $latitudine;
$_SESSION['longitudine'] = $longitudine;

$prov = substr($latitudine, 0, 3 );
$incr = str_replace("-", "°", $prov);
    echo "prov : " . $prov . "         incr : " . $incr . "<br>";
$prov = substr($latitudine, 3, 3 );
$prov = str_replace("-", "'", $prov);
$incr = $incr . $prov;
    echo "prov : " . $prov . "         incr : " . $incr . "<br>";
$prov = substr($latitudine, 6, 6 );
$latitudine = $incr . $prov . "\"N";

$prov = substr($longitudine, 0, 3 );
$incr = str_replace("-", "°", $prov);
    echo "prov : " . $prov . "         incr : " . $incr . "<br>";
$prov = substr($longitudine, 3, 3 );
$prov = str_replace("-", "'", $prov);
$incr = $incr . $prov;
    echo "prov : " . $prov . "         incr : " . $incr . "<br>";
$prov = substr($longitudine, 6, 6 );
$longitudine = $incr . $prov . "\"E";

    echo "prov : " . $prov . "         incr : " . $incr . "<br>";
    echo "latitudine : " . $latitudine . "         longitudine : " . $longitudine . "<br>";

header("location: https://www.google.it/maps/place/" . $latitudine . "+" . $longitudine);
//https://www.google.it/maps/place/45°47'15.4"N+09°11'22.5"E
?>
