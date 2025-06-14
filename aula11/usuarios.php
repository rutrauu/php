<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de usuários</title>
</head>
<body>
	<?php insertUser($conecta); ?>
	<form method="post">
		<input type="text" name="nome" 
		placeholder="Seu Nome" required>

		<input type="email" name="email" placeholder="Seu E-mail" required>

		<input type="password" name="senha" placeholder="Sua Senha">

		<button name="inserir">Cadastrar</button>
	</form>

	<table border="1">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Data</th>
			</tr>
		</thead>
		<tbody>
		<?php $usuarios = select($conecta); ?>
		<?php foreach ($usuarios as $usuario) : ?>
			<tr>
				<td><?php echo $usuario['id']; ?></td>
				<td><?php echo $usuario['nome']; ?></td>
				<td><?php echo $usuario['email']; ?></td>
				<td><?php echo $usuario['data']; ?></td>
				<td>
					<a href="deletar.php?id=<?php echo $usuario['id']; ?>&nome=<?php echo $usuario['nome']; ?>">
						Excluir
				</a>
				</td>
			</tr>
		<?php endforeach; ?>

		</tbody>
	</table>
</body>
</html>