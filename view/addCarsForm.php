<h1>Ajouter une voiture</h1>
<hr><br>
<form action="index.php?controller=cars&action=addBdd" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="marque">Marque de la voiture</label>
        <input type="text" class="form-control" name="marque" id="marque" >
    </div>
    <div class="form-group">
        <label for="modele">Modèle de la voiture</label>
        <input type="text" class="form-control" name="modele" id="modele" >
    </div>
    <div class="form-group">
        <label for="energie">Sélectionnez l'énergie de la voiture</label>
        <select class="form-control" id="energie" name="energie">
            <option>Essence</option>
            <option>Diesel</option>
            <option>Electrique</option>
            <option>Hybride</option>
        </select><br>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <input type="checkbox" aria-label="Checkbox for following text input" name="automatique">
                </div>
            </div>
            <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Est Automatique">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" name="image" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01"></label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Soumettre</button>


    </div>


</form>

<?php

var_dump($_POST);
echo '<hr>';
var_dump($_FILES);