<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        margin-left: 32%;
        margin-top: 5%;
        padding: 20px;
        font-size: 25px;
        text-align: center;
    }
</style>
<?php
    $json = file_get_contents("http://localhost/BI1%20Produit/ListeJSON.php");
    $data = json_decode($json, true);
    $produits = $data['produits'];
    $categories = $data['categories'];
?>
<table>
    <tr>
        <th>id</th>
        <th>prix</th>
        <th>lib</th>
        <th>idCatalog</th>
    </tr>
    <?php foreach ($produits as $p): ?>
    <tr>
        <td><?= $p['id'] ?></td>
        <td><?= $p['prix'] ?></td>
        <td><?= $p['lib'] ?></td>
        <td><?= $p['idCatalog'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<table>
    <tr>
        <th>idCateg</th>
        <th>nomCateg</th>
    </tr>
    <?php foreach ($categories as $c): ?>
    <tr>
        <td><?= $c['idCateg'] ?></td>
        <td><?= $c['nomCateg'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
