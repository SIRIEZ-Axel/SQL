<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php - pdo</title>
</head>
<body>
    <form action="read.php" method="post" enctype="multipart/form">
            <input type="text" name="ville" placeholder="Ville">
            <br>
            <input type="text" name="haut" placeholder="Haut">
            <br>
            <input type="text" name="bas" placeholder="Bas">
            <br>
            <input type="submit" value="Submit" > 
    </form>

    <?php
    // **********************************************************
    // CONNEXION A LA DB
    // **********************************************************
    try {
        $db = new PDO(
            'mysql:host=localhost;dbname=weatherapp;charset=utf8',
            'root',
            ''
            );
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }     

    // **********************************************************
    // AJOUT DES DONNEES DANS LA DB
    // **********************************************************
    $ville = $_POST['ville'];
    $haut = $_POST['haut'];
    $bas = $_POST['bas'];

    $sql = "INSERT INTO météo (ville, haut, bas) VALUES ('$ville', '$haut', '$bas')";

    $dbstatement = $db->prepare($sql);
    $dbstatement->execute();

    $dbstatement->closeCursor();
    header('refresh:./read.php');

    // **********************************************************
    // AFFICHAGE DES DONNEES
    // **********************************************************
    $resultat = 'SELECT * FROM météo';
    $dbstatement2 = $db->prepare($resultat);
    $dbstatement2->execute();
    $donnees = $dbstatement2->fetchAll();
    
    foreach ($donnees as $donnee){
        echo '<pre>';
        print_r($donnee['ville']); ?> <input type="checkbox" name="delete" value="delete"><?php
        print_r($donnee['haut']); 
        print_r($donnee['bas']); 
        echo '</pre>';
    }


    ?>
    <input type="submit" value="del" name="del">
    <?php
    // **********************************************************
    // DELETE LES DONNEES VIA LA CHECKBOX
    // **********************************************************
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM members WHERE id=$id");
        $_SESSION['message'] = "Location deleted!";
    }
    ?>
</body>
</html>