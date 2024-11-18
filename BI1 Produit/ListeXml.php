<?xml version="1.0"?>
<produits>
<?php
    header("content-type:text/xml");
    $c = new PDO("mysql:host=localhost:3306;dbname=marketing","root","");
    $rq = "select * from produit";
    $r = $c->query($rq);
    $produits = $r->fetchAll(PDO::FETCH_ASSOC);
    foreach($produits as $produit){
?>
    <produit id="<?=$produit['id']?>">
        <prix><?=$produit['prix']?></prix>
        <lib><?=$produit['lib']?></lib>
        <?php
            $rq1 = "select * from categorie where idCateg =".$produit['idCatalog'];
            $r1 = $c->query($rq1);
            $categories = $r1->fetchAll(PDO::FETCH_ASSOC);
            foreach($categories as $cat){
        ?>
            <idCatalog><?=$cat['idCateg']?></idCatalog>
            <nomCateg><?=$cat['nomCateg']?></nomCateg>
        <?php
            }
        ?>
    </produit>
<?php
}
?>
</produits>