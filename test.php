<?php

require('debug.php');
require('pdo.php');
$req = $pdo->query('select * from Plantes;');
$info = $req->fetchAll();?>

<?php foreach ($info as $plant): ?>
    <h2><?php echo htmlspecialchars($plant['Plante_nom'], ENT_QUOTES, 'UTF-8'); ?></h2>
<?php endforeach; ?>
