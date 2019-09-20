<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<h1>Nouveau client</h1>
		<form action="controller.php?page=add" method="post">
			<fieldset>
				<div class="field">
					<label for="firstName">Prénom</label>
					<input type="text" id="firstName" name="firstName" />
				</div>
				<div class="field">
					<label for="lastName">Nom</label>
					<input type="text" id="lastName" name="lastName" />
				</div>
				<div class="field">
					<label for="phone">Téléphone</label>
					<input type="tel" id="phone" name="phone" />
				</div>
				<div class="field">
					<label for="email">Email</label>
					<input type="email" id="email" name="email" />
				</div>
				<input type="submit" value="Ajouter" name="add" />
			</fieldset>
		</form>
		<a href="controller.php">Liste des clients</a>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>