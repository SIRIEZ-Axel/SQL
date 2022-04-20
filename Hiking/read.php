<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Randonnées</title>
<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
    <h1>Liste des randonnées</h1>
    <table>
        <tr>
            <!-- Afficher la liste des randonnées -->
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
            
            $resultat = 'SELECT * FROM hiking';
            $dbstatement = $db->prepare($resultat);
            $dbstatement->execute();
            $donnees = $dbstatement->fetchAll();
            
            foreach ($donnees as $donnee){
                ?>
                <td> <?php echo $donnee['id'];?> </td> 
                <td> <?php echo $donnee['name'];?> </td> 
                <td> <?php echo $donnee['difficulty'];?> </td> 
                <td> <?php echo $donnee['distance']; ?> </td> 
                <td> <?php echo $donnee['duration']; ?> </td> 
                <td> <?php echo $donnee['height_difference'];?> </td>
            <?php 
                }
                
                $dbstatement->closeCursor();
            ?>
        </tr>
    </table>
</body>
</html>
