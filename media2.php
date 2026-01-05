<?php
    $couleur_bulle_classe = "rouge";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUR LES MÉDIAS</title>
    <link rel="stylesheet" href="media2.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/media2.css"> 
</head>

<body>
    <section class="conteneur-1280">
    <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
            <h2>Les actualités et les évènements importants <br>du BUT et de l'IUT CY Paris Université dans <br>les médias</h2>
            <div class="video-grid">
                <div class="video-grid-1">
                    <p>La nouvelle réforme : le BUT MMI</p>
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/oiEbQF7qfBU" allowfullscreen></iframe>
                </div>
                <div class="video-grid-2">
                    <p>Pourquoi étudier a l'IUT CYU ?</p>
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/SyjF4h2Zb7Q" allowfullscreen></iframe>
                </div>
                <div class="video-grid-3">
                    <p>Job interview en anglais au département MMI</p>
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/t72pdxpNjyc" allowfullscreen></iframe>
                </div>
                <div class="video-grid-4">
                    <p>L'importance de l'IUT dans les études supérieures</p>
                    <iframe width="100%" height="200" src="https://www.youtube.com/embed/xD4wshE0hEg" allowfullscreen></iframe>
                </div>
            </div>

            <!-- à continuer ici. Mettre le code respectif de chaque page ici -->
        </main>
    </section>
    <?php require_once('./ressources/includes/footer.php'); ?>
</body>
</html>
