<style>
    table,th,td{
        border : 1px solid black;
        border-collapse : collapse;
        margin-left : 32%;
        margin-top : 10%;
        padding : 20px;
        font-size: 25px;
        text-align : center
    }
</style>
<?php
    $xml = file_get_contents("http://localhost/BI1%20Produit/ListeXml.php");
    $produit = new SimpleXMLElement($xml);
?>
<table>
    <tr>
        <th>id</th>
        <th>prix</th>
        <th>lib</th>
        <th>idCatalog</th>
    </tr>
    <?php
        foreach($produit as $p){
    ?>
    <tr>
        <td><?= $p["id"]?></td>
        <td><?= $p->prix?></td>
        <td><?= $p->lib?></td>
        <td><?= $p->idCatalog?></td>
    </tr>
    <?php
        }
    ?>
</table>