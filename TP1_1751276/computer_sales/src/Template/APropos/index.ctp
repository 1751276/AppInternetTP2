<!DOCTYPE html>
<html>
    <head>
        <title>À propos</title>
    </head>
    <body>
        <p>
            <h1>À propos</h1>
            <br>
            <h3>Ioana Grecu</h3>
            <h3>Applications Internet (4205B7MO - Automne 2019)</h3>
            <h3>Automne 2018, Collège Montmorency.</h3>
        </p>
        <br>
        <hr noshade >
        <p>
            <h4>BD SQLite : </h4>
            L'application marche avec un bd sqlite.
            <br><br>
        </p>    
        <p>
            <h4>Lecture et suppression en Ajax : </h4>
            Lecture et suppression en Ajax marche pour la table Places. La page doit être rafraichie manuellement pour voir les modifications.
            <br><br>
        </p>    
        <p>
            <h4>Ajout et modification en Ajax : </h4>
            Ajout en Ajax marche avec la table Places. Les mofications en Ajax n'est pas fonctionnel. La page doit être rafraichie manuellement pour voir les modifications.
            <br><br>
        </p>
        <p>
            <h4>Listes liées par Ajax : </h4>
           Les listes liées par Ajax sont fonctionnel avec les tables Electronies, Categories et Subcategories. 
           Aller voir dans add et dans edit Electronies.
            <br><br>
        </p>
        <p>
            <h4>JQuery-ui Autocomplete : </h4>
            L'autocomlete est fonctionnel dans la table Users pour le champ Name pour le add et le edit.
            <br><br>
        </p>
        <p>
            <h4>Interface avec préfixe de routage "Admin" : </h4>
            Interface avec préfixe de routage "Admin" est fontionnel seulement pour la table Places. Pour aller dans le routage admin, il faut aller dans dans Sales et cliquer sur le lien a droite "Section Admin pour Places" 
            <br><br>
        </p>
        <p>
            <h4>Interface adaptative Bootstrap </h4>
            Interface adaptative Bootstrap dans Layourt/default. 
            <br><br>
        </p>
        <p>
            <h4>affichage en document pdf : </h4>
            L'affchage en document pdf est fonctionnel pour la table Product. Il faut cliquer sur pdf dans la section action pour le le document se télécharge.
            <br><br>
        </p>
        <p>
            <h4>Démonstration à l'événement Portes ouvertes : </h4>
                J'ai démontrer 2 nouvelles fonctionnalités lors des portes ouvertes (Listes liées par Ajax et JQuery-ui Autocomplete)
            <br><br>
        </p>
        <p><h3><a href="http://www.databaseanswers.org/data_models/dell_computer_sales/index.htm">Lien BD</a></h3></p>
        <img src="webroot/img/bd.jpg" width="600" height="600">
        <br>
        <br>
        <br>
        <p><h3><?php echo $this->Html->link('Back', ['controller' => 'products']); ?></h3></p>
        <br>
        <br>
        <br>

    </body>
</html>
