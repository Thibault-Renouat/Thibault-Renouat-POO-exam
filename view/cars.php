<h1>Toute les voitures</h1>
<hr><br>

<a href="index.php?controller=cars&action=add">
    <button type="button" class="btn btn-success">Ajouter une voiture</button>
</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Marque</th>
        <th scope="col">Modèle</th>
        <th scope="col">Energie</th>
        <th scope="col">Automatique</th>
        <th scope="col">Image</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>

    <?php
    /* @var $car Cars */
    /* @var $carTable array */
    foreach ($carTable as $car ){

        echo    '<tr>
                    <td>'.$car->getId().'</td>
                    <td>'.$car->getMarque().'</td>
                    <td>'.$car->getModele().'</td>
                    <td>'.$car->getEnergie().'</td>'; ?>

        <?php
        if ($car->getAutomatique()==1){

            echo'<td>Oui</td>';
        }else  echo'<td>Non</td>';

        ?>

        <?php echo           '<td><img src="" alt="photo de '.$car->getMarque().' '.$car->getModele().'"></td>
                    <td><a href="index.php?controller=cars&action=detail&id='.$car->getId().'">Détail</a>
                        <a href="index.php?controller=cars&action=delete&id='.$car->getId().'" style="color: red">Supprimer</a>
                    </td>
                </tr>';

    }
    ?>


    </tbody>
</table>
