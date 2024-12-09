<?php

$sql= "SELECT * FROM etudiant";
$result= mysqli_query($connexion, $sql);

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
                        <td><?php echo $ligne[0] ?></td>
                        <td><?php echo $ligne[1] ?></td>
                        <td><?php echo $ligne[2] ?></td>
                        <td><?php echo $ligne[3] ?></td>                      
                        <td>
                            <a class="btn btn-primary" href="?page=edit&id=<?php echo $ligne[0] ?>">Modifier</a>
                            <a class="btn btn-danger" href="?page=delete&id=<?php echo $ligne[0] ?>">Supprimer</a>
                        </td>                      
                    </tr>
                </tbody>
                <?php endwhile ?>
        </table>
        </div>
   