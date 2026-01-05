<?php
    $couleur_bulle_classe = "jaune";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CONTACT </title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/contact.css">

    <a id="haut"></a> 
</head>

<body>
    <section class="conteneur-1280">
    <?php require_once('./ressources/includes/header.php')?>
        <main class="conteneur-principal">

            <div class="corps">
                <div class="premiere-partie">
                    <h1 class="titre-page">Plus d'infos sur la formation ? <br> Contactez-nous ! </h1>
                </div>

                <div class="texte-intro">
                    <p class="texte-base"> <span class="texte-gras">La formation s'ouvre à tous les bacheliers</span>,
                    pour rappel. Avoir des connaissances en programmation, design ou encore audiovisuel
                    n'est pas obligatoire mais reste un bon atout, car il faut aimer la 
                    curiosité dans cette formation pluridisciplinaire. <span class="texte-gras">Il est également 
                 possible de faire la formation après une reprise d'études ou une réorientation.</span></p>
                </div> 

                <div class="premier-contact">
                    <h1 class="titre-page">Nous contacter en ligne </h1>
                </div>
                <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialisation des variables
    $prenom = $nomdefamille = $courriel = $textarea = $status = "";
    $errors = [];

    // Vérification des champs obligatoires
    if (empty($_POST["prenom"])) {
        $errors[] = "Veuillez saisir votre prénom";
        foreach ($errors as $error) {
            echo "<p class='error'>$error</p>";
        }

    } else {
        $prenom = htmlspecialchars($_POST["prenom"]);
    }

    if (empty($_POST["nomdefamille"])) {
        $errors[] = "Veuillez saisir votre nom de famille";
        foreach ($errors as $error) {
            echo "<p class='error'>$error</p>";
        }
    } else {
        $nomdefamille = htmlspecialchars($_POST["nomdefamille"]);
    }

    if (empty($_POST["courriel"])) {
        $errors[] = "Veuillez saisir votre adresse mail ";
        foreach ($errors as $error) {
            echo "<p class='error'>$error</p>";
        }
    } else {
        $courriel = htmlspecialchars($_POST["courriel"]);
        // Vérification du format de l'adresse e-mail
        if (!filter_var($courriel, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "L'adresse e-mail saisie n'est pas valide.";
            foreach ($errors as $error) {
                echo "<p class='error'>$error</p>";
            }
        }
    }

    if (empty($_POST["textarea"])) {
        $errors[] = "Veuillez saisir votre message";
        foreach ($errors as $error) {
            echo "<p class='error'>$error</p>";
        }
    } else {
        $textarea = htmlspecialchars($_POST["textarea"]);
    }

    // Vérification du statut (optionnel)
    if (isset($_POST["status"])) {
        $status = htmlspecialchars($_POST["status"]);
    } else {
        $status = "Non précisé";
    }

    // Si aucune erreur, envoyer l'email
    if (empty($errors)) {
        // Sujet de l'email
        $sujet = "Confirmation de réception de votre message";

        // Message de l'email
        $message = "Bonjour $prenom $nomdefamille,\n\n";
        $message .= "Nous avons bien reçu votre message. Voici les détails :\n\n";
        $message .= "Nom : $prenom $nomdefamille\n";
        $message .= "Email : $courriel\n";
        $message .= "Message :\n$textarea\n\n";
        $message .= "Statut : $status\n\n";
        $message .= "Merci de nous avoir contacté. Nous vous répondrons dans les plus brefs délais.\n";
        $message .= "Cordialement,\nL'équipe de contact";

        // En-têtes de l'email
        $headers = "From: noreply+newsletter@cyu.fr\r\n";
        $headers .= "Reply-To: noreply+newsletter@cyu.fr\r\n";

        // Envoi de l'email
        if (mail($courriel, $sujet, $message, $headers)) {
            echo '<div style="height:4.438rem; max-width:95%; background-color: #D4EDDA; 
            color: #155724; padding: 0.625rem; border-radius: 0.313rem; 
            border: solid, 0.068rem, #C3E6CB; text-align:center;"> Message envoyé ! </div>';
        } else {
            echo '<div style="height:4.438rem; max-width:95%; background-color: #F8D7DA; 
            color: #721C24; padding: 0.625rem; border-radius: 0.313rem; 
            border: solid, 0.068rem, #F5C6CB; text-align:center;"> Il y a eu une erreur lors de l envoi de l email ! </div>';
        }
    } else {
            echo '<div style="height:4.438rem; max-width:95%; background-color: #F8D7DA; 
            color: #721C24; padding: 0.625rem; border-radius: 0.313rem; 
            border: solid, 0.068rem, #F5C6CB; text-align:center;"> Il manque une ou plusieurs informations dans le formulaire </div>';;
        }
    }
?>
 
                <form action="contact.php" method="post">
                <p><span class="error">* Champs obligatoires</span></p><br>

                    <div class="formulaire-boite">
                        <label class="label-form" for="prenom"> Prénom </label><span class="error">* </span><br> 
                        <input type="text" name="prenom" id="prenom">
                    </div> 

                    <div class="formulaire-boite">
                        <label class="label-form" for="nomdefamille"> Nom de famille </label><span class="error">* </span><br>
                        <input type="text" name="nomdefamille" id="nomdefamille">
                    </div> 
            
                    <div class="formulaire-boite"> 
                        <label class="label-form" for="courriel"> Adresse e-mail </label><span class="error">* </span><br>
                        <input type="email" name="courriel" id="courriel">
                    </div>

                    <div class="formulaire-boite"> 
                        <label class="label-form" for="textarea"> Message</label></textarea><span class="error">*</span><br>
                        <textarea id="textarea" name="textarea"></textarea>
                    </div> 

                    <label class="label-form">Je suis</label><br>
                    <div id="boutons">
                        <input type="radio" id="non-preciser" name="status" value="je préfère ne pas préciser">
                        <label for="non-preciser">Je ne souhaite pas le préciser</label><br>

                        <input type="radio" id="etudiant" name="status" value="étudiant">
                        <label for="etudiant">Étudiant/ Étudiante</label><br>

                        <input type="radio" id="parent" name="status" value="parent">
                        <label for="parent">Parent</label><br>

                        <input type="radio" id="autre" name="status" value="autre">
                        <label for="autre">Autre</label><br>
                    </div>

                    <input type="submit" id="envoyer">
                </form>

            
                <div class="deuxieme-contact"> 
                    <h1 class="titre-page">Nous contacter par courrier </h1>
                </div> 

                <div class="adresse"> 
                    <p class="texte-base"> IUT de Cergy-Pontoise,<br>
                    Département Métiers du Multimédia et de l’Internet (MMI) <br> 
                    34 Bis Boulevard Henri Bergson 95200 Sarcelles </p>
                </div>

                        </main>
                    </section>
                    <?php require_once('./ressources/includes/footer.php'); ?>
                </body>
                </html>

                