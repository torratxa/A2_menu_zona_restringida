<?php
if (isset($_COOKIE["PHPSESSID"])){
    echo "BENVINGUT ".$_GET['usuari'];
    echo "<br/><a href='comprovar_divisors.php'>COMPROVAR DIVISORS</a>";
    echo "<br/><a href='sortir.php'>SORTIR</a>";

}else{
    header('Location: sortir.php');
}


