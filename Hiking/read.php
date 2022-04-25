<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
    <header>
        <h1>Liste des randonnées</h1>
    </header>
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Difficulty</th>
            <th>Distance</th>
            <th>Duration</th>
            <th>Height difference</th>
        </tr>
            <?php
            /*****************************************************************************/
            /* CONNEXION A LA DB */   
            /*****************************************************************************/
            try {
                $db = new PDO(
                    'mysql:host=localhost;dbname=becode;charset=utf8',
                    'root',
                    ''
                );
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
            
            /*****************************************************************************/
            /* AFFICHAGE DE LA DB */
            /******************************************************************************/
            $resultat = 'SELECT * FROM hiking';
            $dbstatement = $db->prepare($resultat);
            $dbstatement->execute();
            $donnees = $dbstatement->fetchAll();
            
            foreach ($donnees as $donnee){
                ?>
                <tr><td> <?php echo $donnee['id'];?> </td>
                <td> <a href="update.php"><?php echo $donnee['name'];?> </a></td> 
                <td> <?php echo $donnee['difficulty'];?> </td> 
                <td> <?php echo $donnee['distance']; ?> </td> 
                <td> <?php echo $donnee['duration']; ?> </td> 
                <td> <?php echo $donnee['height_difference'];?> </td></tr>
            <?php 
                }   
                $dbstatement->closeCursor();
            ?>
    </table>
    <div class="btn-container">
        <a href="create.php" class="btn-green">create.php</a>
        <a href="update.php" class="btn-blue">update.php</a>
        <a href="delete.php" class="btn-red">delete.php</a>
    </div>
</body>
</html>
