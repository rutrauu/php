<?php
// Array de cursos disponíveis
$cursos = ["PHP", "HTML", "CSS", "JavaScript", "Jquery", "Python", "SQL", "Bootstrap", "Java", "C++", "Fluter"];

// Captura do valor digitado
$busca = isset($_GET['busca']) ? trim($_GET['busca']) : '';

// Verifica se a busca está presente no array (case insensitive)
$encontrado = false;
foreach ($cursos as $curso) {
    if (strcasecmp($busca, $curso) == 0) {
        $encontrado = true;
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Busca</title>
</head>
<body>
    <h1>Resultado da Busca</h1>

    <?php if ($encontrado): ?>
        <p>Temos o curso para a sua busca: <strong><?= htmlspecialchars($busca) ?></strong></p>
    <?php else: ?>
        <p>Desculpe, não encontramos o curso "<strong><?= htmlspecialchars($busca) ?></strong>".</p>
    <?php endif; ?>

    <a href="formulario.php">Voltar</a>
</body>
</html>
