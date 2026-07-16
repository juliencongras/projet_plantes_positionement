<?php
    require('pdo.php');
    $req = $pdo->query('select * from Plantes;');
    $info = $req->fetchAll();
?>