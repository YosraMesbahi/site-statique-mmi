<?php
    $couleur_bulle_classe = "rose";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGE D'ACCEUIL</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-accueil.css">
    <link rel="stylesheet" href="ressources/css/index.css"> 
</head>

<body>
    <section class="conteneur-1280">
    <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
            <h1 class="titre-page">Articles sur le BUT MMI</h1>

            <section class="colonne">
                <section class="liste-articles">

                    <div class="case">
                        <img class="image" src="ressources/images/dev-web.jpg" alt="image développeur assis a son bureau en train de coder">
                        <h2>Développement web</h2>
                        <p class="marge"> Le parcours Développement Web du BUT MMI forme les étudiants aux compétences techniques 
                        nécessaires pour créer des sites et applications web. Au programme : programmation en HTML, CSS, JavaScript, PHP, 
                        ainsi que la gestion de bases de données avec SQL, le développement front-end et back-end, et l'ergonomie web, 
                        avec un fort accent sur la créativité et l'innovation numérique.</p>
                    </div>
                    <div class="case">
                        <img class="image" src="ressources/images/crea.jpg" alt="artiste sur sa tablette graphique">
                        <h2>Création numérique</h2>
                        <p class="marge"> Le parcours Création Numérique du BUT MMI  prépare les étudiants à concevoir des contenus 
                            interactifs et visuels pour le web. Ils y apprennent à maîtriser des outils de design graphique, 
                            de motion design, ainsi que la production de vidéos et d’animations. Ce programme combine créativité, 
                            technologie et gestion de projets numériques pour répondre aux besoins actuels du secteur.</p>
                    </div>
                    <div class="case">
                        <img class="image" src="ressources/images/strat-com.jpg" alt="illustration réseaux sociaux">
                        <h2>Stratégie de communication</h2>
                        <p class="marge">Le parcours Stratégie de Communication du BUT MMI forme les étudiants à concevoir et déployer
                        des stratégies de communication digitale. Ils apprennent à analyser les besoins des cibles, gérer des campagnes 
                        sur les réseaux sociaux, optimiser la visibilité en ligne et maîtriser les outils de marketing digital pour 
                        atteindre efficacement les objectifs de communication.</p>
                    </div>
                </section>

                <a class="jpo-banniere" title="Ouverture dans un nouvel onglet" href="https://www.cyu.fr/salons-journee-portes-ouvertes">
                    <img src="ressources/images/logo-cyu-blanc.png" width="200" class="logo" alt="">
                    
                    <section class="textes">
                        <p class="txt-petit">Journée portes ouvertes</p>
                        <p class="txt-grand">
                            27/01/2024, <br />
                            de 10h à 17h
                        </p>
                        <p class="en-savoir-plus">EN SAVOIR PLUS</p>
                    </section>
                </a>
            </section>
        </main>

    </section>
    <?php require_once('./ressources/includes/footer.php'); ?>
</body>
</html>