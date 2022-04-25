<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="sun.svg" alt="sun" rel="icon">
    <title>Météo</title>
</head>
<body>
    <header>
        <img src="sun.svg" alt="sun" width=40>
        <h1>Formulaire Météo</h1>
    </header>
    <div class="form-container">
        <form action="read.php" method="post" enctype="multipart/form">
            <input class="input-text" type="text" name="ville" placeholder="Ville">
            <br>
            <input class="input-text" type="text" name="haut" placeholder="Haut">
            <br>
            <input class="input-text" type="text" name="bas" placeholder="Bas">
            <br>
            <input class="input-sub" type="submit" value="Soumettre ces données" > 
        </form>
    </div>
        
<?php
    // **********************************************************************************************
    // CONNEXION A LA DB
    // **********************************************************************************************

    try {
        $db = new PDO(
            'mysql:host=localhost;dbname=weatherapp;charset=utf8',
            'root',
            ''
            );
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }     

    // **********************************************************************************************
    // AJOUT DES DONNEES DANS LA DB
    // **********************************************************************************************
    $ville = $_POST['ville'];
    $haut = $_POST['haut'];
    $bas = $_POST['bas'];

    $sql = "INSERT INTO météo (ville, haut, bas) VALUES ('$ville', '$haut', '$bas')";

    $dbstatement = $db->prepare($sql);
    $dbstatement->execute();

    $dbstatement->closeCursor();
    header('refresh:./read.php');
    
    // ************************************************************************************************
    // DELETE DATA
    // ************************************************************************************************
    

    // **********************************************************************************************
    // AFFICHAGE DES DONNEES
    // **********************************************************************************************
    // Select Data
    $resultat = 'SELECT * FROM météo';
    // Prepare Statement
    $dbstatement2 = $db->prepare($resultat);
    // Execute prepared Statement
    $dbstatement2->execute();
    $donnees = $dbstatement2->fetchAll();
    ?>
    <div class="tb-container">
        <table>
            <tr>
                <th></th>
                <th>Ville</th>
                <th>Température maximum</th>
                <th>Température minimum</th>
            </tr>
            <?php
    foreach ($donnees as $donnee){
        ?>
        <tr><td> <input type="checkbox" name="checkbox"> </td>
        <td><?php echo $donnee['ville'] ; ?> </td>
        <td> <?php echo $donnee['haut'] ; ?>°C</td> 
        <td> <?php echo $donnee['bas']; ?>°C</td></tr> <?php
    }
    ?>
        </table>
    </div>
        <form action="read.php" method="post">
            <span class="del-container">
                <input class="input-del" type="submit" name="del" value="Delete">
            </span>
        </form>

</body>
</html>