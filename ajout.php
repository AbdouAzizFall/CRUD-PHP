<?php 
if(isset($_POST['enregistrer'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $classe=$_POST['classe'];

    $sql="INSERT INTO etudiant VALUES (NULL,'$nom','$prenom','$classe')";
    mysqli_query($connexion,$sql);
    header('location: index.php');
}
?>
<div class="col-md-8 offset-2 mt-5">
    <form action="" method="POST">
        <label for="">Nom</label>
        <input type="text" name="nom" id="" class="form-control"><br>
        <label for="">Prénom</label>
        <input type="text" name="prenom" id="" class="form-control"><br>
        <label for="">Classe</label>
        <input type="text" name="classe" id="" class="form-control"><br>
        <button type="submit" class="btn btn-success" name="enregistrer">Enregistrer</button>
        <button type="submit" class="btn btn-danger">Retour</button>
    </form>
</div>