<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des etudiants</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <?php 
    require_once('connexion.php');
    require_once('header.php');
    
    if(isset($_GET['page'])){
        switch ($_GET['page']) {
            case 'delete':
                $id=$_GET['id'];
                $sql="DELETE FROM etudiant where id=$id";
                mysqli_query($connexion,$sql);
                header('location: index.php');
                break;
            case 'ajouter':
                require_once('ajout.php');
                break;
            case 'edit':
                $id=$_GET['id'];
                $sql="SELECT * FROM etudiant WHERE id=$id";
                $result=mysqli_query($connexion,$sql);
                $ligne=mysqli_fetch_row($result);
                require_once('edit.php');
                break;
        }

    }else{
        require_once('listeEtudiant.php');
    }
    ?>
</body>
</html>