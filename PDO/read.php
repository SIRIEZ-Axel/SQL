<?php   
try {
$mysqlConnection = new PDO(
    'mysql:host=localhost;dbname=becode;charset=utf8',
    'root',
    ''
    );
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$resultat = 'SELECT * FROM students';
$dbstatement = $mysqlConnection->prepare($resultat);
$dbstatement->execute();
$donnees = $dbstatement->fetchAll();

foreach ($donnees as $donnee){
    ?>
    <p> <?php echo $donnee['idstudent']; ?></p>
    <p> <?php echo $donnee['name']; ?></p>
    <p> <?php echo $donnee['firstname']; ?></p>
    <p> <?php echo $donnee['birthdate']; ?></p>
    <p> <?php echo $donnee['gender']; ?></p>
    <p> <?php echo $donnee['school']; ?></p>
<?php
}

    $dbstatement->closeCursor();
?>
