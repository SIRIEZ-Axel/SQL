<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="read.php" method="post" enctype="multipart/form">
            <input type="text" name="ville" placeholder="Ville">
            <input type="text" name="haut" placeholder="Haut">
            <input type="text" name="bas" placeholder="Bas">
            <input type="submit" value="submit" >
    </form>

    <?php
        try {
            $db = new PDO(
                'mysql:host=localhost;dbname=weatherapp;charset=utf8',
                'root',
                ''
                );
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
        
        $resultat = 'SELECT * FROM météo';
        $dbstatement = $db->prepare($resultat);
        $dbstatement->execute();
        $donnees = $dbstatement->fetchAll();
        
        foreach ($donnees as $donnee){
            echo $donnee['id']; ?><br><?php
            echo $donnee['ville']; ?><br><?php
            echo $donnee['haut']; ?><br><?php
            echo $donnee['bas']; ?><br><?php
        }
            $dbstatement->closeCursor();
    ?>
</body>
</html>