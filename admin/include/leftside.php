<div id="leftside">
<h3>Administrare magazin</h3>
<ul>
    <li><a href="index.php?acasa">Acasa</a></li>
    <li><a href="index.php?vizualizare_categorii">Vizualizare categorii de produse</a></li>
    <li><a href="index.php?vizualizare_subcategorii">Vizualizare subcategorii de produse</a></li>
    <li><a href="index.php?adaugare_produse">Adaugare produse</a></li>
    <li><a href="index.php?vizualizare_produse">Vizualizare produse</a></li>
</ul>

</div><!--end of lefttside-->

<?php
if(isset($_GET['vizualizare_categorii'])){
    include('cat.php');
}

if(isset($_GET['vizualizare_subcategorii'])){
    include('sub_cat.php');
}

if(isset($_GET['adaugare_produse'])){
    include('add_products.php');
}

if(isset($_GET['vizualizare_produse'])){
    include('products.php');
}
?>