<?php
    $couleur_bulle_classe = "bleu";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIEUX DE VIE</title>
    <link rel="stylesheet" href="lieuxdevie.css">
     <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/lieuxdevie.css"> 
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <main class="conteneur-principal">
<body>
    <div class="container">
        <div class="section">
            <div class="text">
                <h2>Lieux de vie</h2>
                <p>
                    Entre les cours, l'université et ses IUT proposent de nombreux lieux de convivialité ou d'idéation.
                    Divers et variés, ils permettent aux étudiants, de toute formation, de découvrir de nouveaux horizons
                    et surtout de rencontrer les étudiants d'autres BUT.
                </p>
            </div>
        </div>

        <div class="section">
            <div class="image">
                <img src="ressources/images/bu.jpg" alt="bibiliothèque"> 
            </div>
            <div class="text">
                <h2>Bibliothèque universitaire</h2>
                <p>
                    La bibliothèque universitaire est un atout indispensable à votre réussite. Elle<br> met à votre disposition
                    des collections (livres, revues, ressources numériques<br> accessibles sur place et à distance) ainsi que des
                    postes informatiques et des<br> espaces de travail.
                </p>
            </div>
        </div>

        <div class="section">
            <div class="text">
                <h2>Se restaurer</h2>
                <p>
                    Les restaurants du CROUS vous permettent de déjeuner pour un tarif social,<br> fixé au plus à 3,30€. Pour
                    bénéficier de ce tarif, il vous suffit de présenter <br>votre carte d'étudiant multiservices.
                </p>
                <br>
                <p><br><strong>Si vous êtes étudiant boursier, vous bénéficiez automatiquement lors de<br> votre passage en caisse du tarif à 1€ pour un repas complet.<br></strong></p>
            </div>
            <div class="image">
                <img src="ressources/images/cafet.jpg" alt="cafetaria"> 
            </div>
        </div>

        <div class="section">
            <div class="image">
                <img src="ressources/images/fablab.jpg" alt="fablab"> 
            </div>
            <div class="text">
                <h2>Réseau des fablabs de CY Cergy Paris Université</h2>
                <p>
                    Intégré au Centre d’appui aux enseignements, le réseau des fablabs de CY <br>Cergy Paris Université comprend
                    le fablab LaBoite de Cergy (Grand centre)<br>et le Fablab de Gennevilliers (site de l’université). Ce réseau
                    permet<br> d’expérimenter, tester et échanger dans des lieux collaboratifs, accueillants, <br>et ouverts à toutes et tous.
                </p>
            </div>
        </div>
    </div>
</body>            

        </main>
    </section>
    <?php require_once('./ressources/includes/footer.php');?>
</body>
</html>