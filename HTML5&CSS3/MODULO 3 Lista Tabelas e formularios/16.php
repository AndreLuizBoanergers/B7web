<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
	<div class="formulario">
		<form method="post">
		   <fieldset>
		   <legend>Dados Pessoais</legend>	
				<label>
					Primeiro Nome: <br>
					<input type="text" name="name" placeholder="Nome" required>
				</label>

				<label><br>
					Sobrenome: <br>
					<input type="text" name="sobrenome" placeholder="Sobrenome" required>
				</label>
			</fieldset>
		    <fieldset>
		   	<legend>Dados Profissionais</legend>
				<label>
					Empresa: <br>
					<input type="text" name="empresa" placeholder="Empresa" required>
				</label><br>
				<label>
					cargo: <br>
					<input type="text" name="cargo" placeholder="Cargo" required>
				</label>
			</fieldset>
			<input type="submit" value="cadastrar" name="btn_cadastro">
		</form>
	</div>
</body>
</html>