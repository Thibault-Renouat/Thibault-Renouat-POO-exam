<h1>Toute les voitures</h1>
<hr><br>

<a href="index.php?controller=raviole&action=add">
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
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>automatique</td>
        <td>photo</td>
        <td>actions</td>
    </tr>

    <?php
    /* @var $car Cars */
    /* @var $carTable array */
    foreach ($carTable as $car ){

        echo    '<tr>
                    <td>'.$car->getId().'</td>
                    <td>'.$car->getMarque().'</td>
                    <td>'.$car->getModele().'</td>
                    <td>'.$car->getEnergie().'</td>
                    <td>'.$car->getAutomatique().'</td>
                    <td>'.$car->getImage().'</td>
                    <td><a href="index.php?controller=cars&action=detail&id='.$car->getId().'">Détail</a>
                        <a href="index.php?controller=cars&action=update&id='.$car->getId().'">Modifier</a>
                        <a href="index.php?controller=cars&action=delete&id='.$car->getId().'" style="color: red">Supprimer</a>
                    </td>
                </tr>';

    }
    ?>


    </tbody>
</table>
