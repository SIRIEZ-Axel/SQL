<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="read.php">Liste des données</a>
	<h1>Ajouter</h1>
	<?php
		try {
			$db = new PDO(
				'mysql:host=localhost;dbname=becode;charset=utf8',
				'root',
				''
			);
		} catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}

	$name = $_POST['name'];
	$difficulty = $_POST['difficulty'];
	$distance = $_POST['distance'];
	$duration = $_POST['duration'];
	$height_difference = $_POST['height_difference'];

    $sql = "SELECT * FROM hiking";
    $dbstatement = $db->prepare($sql);
    $dbstatement->execute();

    $dbstatement->closeCursor();
    header('refresh:./read.php');
	?>
	<form action="read.php" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value=<?php $name ?>>
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>
		
		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>

</body>
</html>
