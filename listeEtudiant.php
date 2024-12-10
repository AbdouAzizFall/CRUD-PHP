<?php

//$sql= "SELECT * FROM etudiant";
//$result= mysqli_query($connexion, $sql);
$stmt=$connexion->prepare("SELECT * FROM etudiant");
$stmt->execute();
$result=$stmt->get_result();

 ?>
    <a class="btn btn-success mt-3" href="?page=ajouter">Ajouter</a>
        <div class="col-md-8 offset-2 mt-5">
        <table class="table table spired">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Classe</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
                <?php while($ligne=mysqli_fetch_row($result)): ?>
                <tbody>
                    <tr>
                        <td><?= $ligne[0] ?></td>
                        <td><?= $ligne[1] ?></td>
                        <td><?= $ligne[2] ?></td>
                        <td><?= $ligne[3] ?></td>                      
                        <td>
                            <a class="btn btn-primary" href="?page=edit&id=<?= $ligne[0] ?>">Modifier</a>
                            <a class="btn btn-danger" href="?page=delete&id=<?= $ligne[0] ?>">Supprimer</a>
                        </td>                      
                    </tr>
                </tbody>
                <?php endwhile ?>
        </table>
        </div>
   