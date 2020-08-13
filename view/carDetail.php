<?php

/* @var $car Cars */

//        var_dump($car); die();

?>


<h1><?php echo $car->getMarque().' '.$car->getModele()  ?></h1>
<hr><br>


<table class="table">
    <thead>
    <tr>
        <th scope="col">Marque</th>
        <th scope="col">Modèle</th>
        <th scope="col">Energie</th>
        <th scope="col">Automatique</th>
        <th scope="col">Image</th>
    </tr>
    </thead>
    <tbody>

        <tr>
            <td><?php echo $car->getMarque() ?></td>
            <td><?php echo $car->getModele() ?></td>
            <td><?php echo $car->getEnergie() ?></td>
            <?php
            if ($car->getAutomatique()==1){

                echo'<td>Oui</td>';
            }else  echo'<td>Non</td>';

            ?>

<?php echo           '<td><img width="100 px" alt="photo de '.$car->getMarque().' '.$car->getModele().'"></td>'; ?>

        </tr>

    </tbody>
</table>
