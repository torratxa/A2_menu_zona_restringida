<?php
if (isset($_COOKIE["PHPSESSID"])){
    
        unset($_COOKIE["PHPSESSID"]);
        setcookie("PHPSESSID", "", time()-3600);
        header('Location: formulari_login.php');


}else{
    header('Location: formulari_login.php');
}