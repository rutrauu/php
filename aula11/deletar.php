<?php
require_once "functions.php";

if (isset($_GET['id'])) {
    echo "Você tem certeza que deseja deletar o usuário de id $_GET[id]?";

    if (isset($_POST['id'])) {
        delete($conecta, $_POST['id']);
    }
}
?>

<form method="post" style="margin-top: 10px;">
    <input type="hidden" name="id" value="<?php echo $_GET['nome']; ?>" required>

    <button name="deletar"> Excluir </button>
</form>