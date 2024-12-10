<?php 
if(isset($_POST['modifier'])){
    $id=$_POST['id'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $classe=$_POST['classe'];

    //$sql="UPDATE etudiant set nom='$nom', prenom='$prenom', classe='$classe' ";
    //mysqli_query($connexion,$sql);
    $stmt=$connexion->prepare("UPDATE etudiant set nom=?, prenom=?, classe=? WHERE id=? ");
    $stmt->bind_param("sssi",$nom,$prenom,$classe,$id);
    $stmt->execute();
    header('location: index.php');
}
?>
<div class="col-md-8 offset-2 mt-5">
    <form action="" method="POST">
        <input name="id" id="" class="form-control" value="<?= $ligne[0] ?>" hidden><br>
        <label for="">Nom</label>
        <input type="text" name="nom" id="" class="form-control" value="<?= $ligne[1] ?>"><br>
        <label for="">Prénom</label>
        <input type="text" name="prenom" id="" class="form-control" value="<?= $ligne[2] ?>"><br>
        <label for="">Classe</label>
        <input type="text" name="classe" id="" class="form-control" value="<?= $ligne[3] ?>"><br>
        <button type="submit" class="btn btn-success" name="modifier">Enregistrer</button>
        <button type="submit" class="btn btn-danger">Retour</button>
    </form>
</div>
