<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<h1>La liste des clients</h1>
		<table cellspacing="0">
			<tr>
				<th>ID</th>
				<th>Non</th>
				<th>Prénom</th>
				<th>Téléphone</th>
				<th>Email</th>
				<th>Actions</th>
			</tr>
			<?php foreach( $clients as $client  ): ?>
				<tr>
					<td><?php echo $client[ 'id' ] ?></td>
					<td><?php echo $client[ 'nom' ] ?></td>
					<td><?php echo $client[ 'prenom' ] ?></td>
					<td><?php echo $client[ 'tel' ] ?></td>
					<td><?php echo $client[ 'email' ] ?></td>
					<td>
						<a href="controller.php?page=delete&clientID=<?php echo $client[ 'id' ] ?>" idClient="<?php echo $client[ 'id' ] ?>" class="delClient">Supprimer</a>
					</td>
				</tr>
			<?php endforeach ?>
		</table>
		<a href="controller.php?page=add">Ajouter un client</a>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>