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


        if(isset($_POST['del'])){
            $chkarr = $_POST['checkbox'];
            foreach($chkarr as $id){
                mysqli_query($db, 'DELETE FROM météo WHERE ID='.$id);
            }
        header('Location:read.php');
        }
        mysqli_close($db);
?>