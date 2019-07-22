<?php
$regNom = "/^[a-z-A-Z--- -]+/";
$regPre = "/^[a-z-A-Z--- -]+/";
$regBirth = "/^[0-9]+\/[0-9]+\/[0-9]+$/";
$regPos = "/^[\d]{5}$/"; // Obligé de saisir 5 chiffre pour le Code Postal.
$regEmail = "/^([a-z0-9._-]+)@([a-z0-9._-]+)\.([a-z]{2,10})$/";



if (empty($_POST["name"])) {        // si le nom posté est vide :
    echo "Le Nom doit être renseigné.<br><br>";     // ça affichera le message d'erreur suivant :
// sinon s'il n'y a pas(!) validation de la regex(preg_match), en comparant la définition($regNom) avec ce qui est posté($_post["name"]) :
} elseif(!preg_match($regNom, $_POST["name"])) {       // ça affichera le message d'erreur suivant :
    echo "Le Nom ne peut comporter que des caractères français.<br><br>";
}

if (empty($_POST["fname"])) {        // si le Prénom posté est vide :
    echo "Le Prénom doit être renseigné.<br><br>";     // ça affichera le message d'erreur suivant :
    // sinon s'il n'y a pas(!) validation de la regex(preg_match), en comparant la définition($regPre) avec ce qui est posté($_post["name"]) :
} elseif(!preg_match($regPre, $_POST["fname"])) {       // ça affichera le message d'erreur suivant :
    echo "Le Prénom ne peut comporter que des caractères français";
}

if (empty($_POST["birthdate"])) {        // si le nom posté est vide :
    echo "La Date de naissance doit être renseigné.<br><br>";     // ça affichera le message d'erreur suivant :
    // sinon s'il n'y a pas(!) validation de la regex(preg_match), en comparant la définition($regNom) avec ce qui est posté($_post["name"]) :
} elseif(!preg_match($regBirth, $_POST["birthdate"])) {       // ça affichera le message d'erreur suivant :
    echo "Veuillez remplir avec une Date de naissance valide.<br><br>";
}

if (empty($_POST["zipCode"])) {        // si le nom posté est vide :
    echo "Le Code postale doit être renseigné.<br><br>";     // ça affichera le message d'erreur suivant :
    // sinon s'il n'y a pas(!) validation de la regex(preg_match), en comparant la définition($regNom) avec ce qui est posté($_post["name"]) :
} elseif(!preg_match($regPos, $_POST["zipCode"])) {       // ça affichera le message d'erreur suivant :
    echo "Veuillez remplir avec un Code postale valide.<br><br>";
}

if (empty($_POST["email"])) {        // si le nom posté est vide :
    echo "L'email doit être renseigné.<br><br>";     // ça affichera le message d'erreur suivant :
    // sinon s'il n'y a pas(!) validation de la regex(preg_match), en comparant la définition($regNom) avec ce qui est posté($_post["name"]) :
} elseif(!preg_match($regEmail, $_POST["email"])) {       // ça affichera le message d'erreur suivant :
    echo "Veuillez remplir avec un Email valide.<br><br>";
}

?>

<?php 

    echo "Vous avez inséré : <br>";
    echo "Nom : ".($_POST["name"])."<br>";
    echo "Prénom : ".($_POST["fname"])."<br>";
    echo "Date de Naissance : ".($_POST["birthdate"])."<br>";
    echo "Votre adresse : ".($_POST["adress"])."<br>";
    echo "E-mail : ".($_POST["email"])."<br>";
    echo "Le Sexe : ".($_POST["gender"])."<br>";
    echo "Le métier : ".($_POST["metier"])."<br>";
    echo "Ce que vous avez Préciser en Autres : ".($_POST["precise"])."<br>";
    echo "Le Salaire : ".($_POST["salaire"])."<br>";
    echo "Année de Stage a AFPA : ".($_POST["annee"])."<br>";
    echo "Commentaire : ".($_POST["commentaire"])."<br>";

?>