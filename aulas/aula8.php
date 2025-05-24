<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulários</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="nome" placeholder="Seu Nome" required>
        <input type="email" name="email" placeholder="Seu email">
        <input type="text" name="idade" placeholder="Sua idade">
        <input type="submit" name="enviar">
    </form>

    <?php
        if (isset($_POST['enviar'])) {
            if (strlen($_POST['nome']) > 3) {
                $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }
            
            if (!empty($_POST['email'])){
                $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            }
            
            if ($_POST['idade'] >= 18){
                $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
            }
            
            if (isset($nome) and isset($email) and isset($idade)){
                echo "<h2>Continua com o envio do Form</h2>";    
                echo"<p>Nome: $nome</p>";
                echo"<p>Email: $email</p>";
                echo"<p>Idade: $idade</p>";
            } else{
                echo "<p>Preencha os dados corretamente</p>";
            }
            
        }
    ?>
</body>
</html>