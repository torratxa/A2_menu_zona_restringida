<?php
if (isset($_COOKIE["PHPSESSID"])){
    
    ?>
    <form name="num" method="post" action="">
    Num: <input type="number" name="numero" id="numero" value="">
    <input type="submit" />
    </form>

    

    <?php
$a = document.getElementById("numero");
echo "AAA: ".$a;
/**
    if ($numero%2==0){
        echo "el $numero es par";
    }else{
        echo "el $numero es impar";
    }

*/
}else{
    header('Location: sortir.php');
}