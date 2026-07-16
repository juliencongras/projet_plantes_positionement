<?php
$plants = [
    [
        'name' => 'Monstera Deliciosa',
        'image' => 'assets/images/monstera.jpg',
        'alt' => 'Monstera Deliciosa',
        'purchase_date' => '12/04/2025',
        'watering' => '1 fois par semaine',
    ],
    [
        'name' => 'Sanseveria',
        'image' => 'assets/images/sanseveria.jpg',
        'alt' => 'Sanseveria',
        'purchase_date' => '26/11/2023',
        'watering' => '1 fois par mois',
    ],
];

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
            <?php foreach ($plants as $plant): ?>
            <!-- Carte plante générée en PHP -->
            <article class="plant-card">

                <div class="plant-image">
                    <img src="<?php echo htmlspecialchars($plant['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($plant['alt'], ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <div class="plant-info">
                    <h2><?php echo htmlspecialchars($plant['name'], ENT_QUOTES, 'UTF-8'); ?></h2>

                    <p>
                        <strong>Date d'achat:</strong>
                        <?php echo htmlspecialchars($plant['purchase_date'], ENT_QUOTES, 'UTF-8'); ?>
                    </p>

                    <p>
                        <strong>Arrosage:</strong>
                        <?php echo htmlspecialchars($plant['watering'], ENT_QUOTES, 'UTF-8'); ?>
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