<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin</title>
</head>
<body>
    <?php if (isset($_SESSION['ativa'])) { ?>
        <h1>Bem vindo!</h1>
        <h2>Bem vindo usuário <php echo $_SESSION['usuario']; ?>, esta é a área administrativa do seu sistema!</h2>

        <a href="logout.php"> Sair </a>
    <?php } ?>
</body>
</html>