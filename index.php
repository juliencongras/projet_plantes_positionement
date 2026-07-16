<?php

require('pdo.php');
$req = $pdo->query('select * from Plantes;');
$info = $req->fetchAll();


$resources = [
    'Arroser le matin ou en fin de journée pour éviter l’évaporation rapide.',
    'Vérifier toujours l’humidité du terreau avant d’arroser.',
    'Adapter la fréquence selon la saison et la lumière reçue.',
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantCare</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <header class="topbar">
        <div class="logo">PlantCare</div>
    </header>

    <main class="container">

        <h1>Mes plantes</h1>

        <section class="plants-section">
            <?php foreach ($info as $plant): ?>
            <!-- Carte plante Page d'accueil PlantCare -->
            <article class="plant-card">

                <div class="plant-image">
                    <img src="<?php echo htmlspecialchars($plant['Plante_image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($plant['Plante_nom'], ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <div class="plant-info">
                    <h2><?php echo htmlspecialchars($plant['Plante_nom'], ENT_QUOTES, 'UTF-8'); ?></h2>

                    <p>
                        <strong>Date d'achat:</strong>
                        <?php echo htmlspecialchars($plant['Date_achat'], ENT_QUOTES, 'UTF-8'); ?>
                    </p>

                    <p>
                        <strong>Arrosage:</strong>
                        <?php echo htmlspecialchars($plant['Frequence_arosage'], ENT_QUOTES, 'UTF-8'); ?>
                    </p>
                </div>

                <a href="#" class="more">
                    <span>Voir plus</span>
                    <span class="arrow">›</span>
                </a>

            </article>
            <?php endforeach; ?>

            <!-- Bouton ajouter -->
            <button class="add-plant">
                <span class="plus">+</span>
                <span>Ajouter une plante...</span>
            </button>

            <form action="add_plant.php" method="post" enctype="multipart/form-data">
                <p>Test fonction</p>
                <p>Nom : <input type="text" name="plant_name"></p>
                <p>Espece : <input type="text" name="species_name"></p>
                <p>Date d'achat : <input type="date" name="date_of_purchase" id=""></p>
                <p>Image : <input type="file" name="plant_image" id=""></p>
                <p>Quantitée d'eau : <input type="number" name="water_amount" id=""></p>
                <p>Fréquence d'arrosage : <input type="number" name="watering_frequency" id=""></p>
                <button>Ajouter plante</button>
            </form>

        </section>


        <section class="resources">

            <h2>Conseils et Ressources</h2>

            <div class="resource-box">
                <?php foreach ($resources as $resource): ?>
                    <p><?php echo htmlspecialchars($resource, ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endforeach; ?>
            </div>

        </section>

    </main>

</body>
</html>