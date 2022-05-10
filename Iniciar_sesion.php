<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>

    <link rel="stylesheet" href="css/main.css">
    <br><center><h3>Carrito de compras</h3>

</head>
<body>

    <form action="" method="POST">
        <?php
            if(isset($errorLogin)){
                echo $errorLogin;
            }
        ?>
       <br> <center><p>Usuario: <br>
        <input type="text" name="username" required autocomplete="off"></p>
        <p>Contraseña: <br>
        <input type="password" name="password" required autocomplete="off"></p>
        <input type="checkbox" name="terminos" required autocomplete="off"> Acepto los terminos y condiciones</p>
        <p class="center"><input type="submit" value="Iniciar sesión"></p> </center>
    </form>

</body>
</html>