<?php
    $c = new PDO("mysql:host=localhost:3306;dbname=marketing", "root", "");

    $rq = "SELECT * FROM produit";
    $r = $c->query($rq);
    $produits = $r->fetchAll(PDO::FETCH_ASSOC);

    $rq1 = "SELECT * FROM categorie";
    $r1 = $c->query($rq1);
    $categories = $r1->fetchAll(PDO::FETCH_ASSOC);

    header("Content-Type: application/json");
    echo json_encode([
        "produits" => $produits,
        "categories" => $categories
    ]);
?>
