<!DOCTYPE html>
<html>
    <head>
    <title>LOGIN</title>
    </head>

    <body>
    <?php
    // header("refresh: 3;");
   
?>

        <form method="POST" action="processa_login.php">
            <input type="text" name="usuari" placeholder="USUARI"><br/>
            <input type="password" name="contrasenya" placeholder="CONTRASENYA"><br/>
            <input type="submit" name="login" value="LOGIN"/>
        </form>

    </body>
</html>