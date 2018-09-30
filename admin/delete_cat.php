<?php
include('include/function.php');
if(isset($_GET['stergere_categorie'])){
    echo delete_cat();
}

if(isset($_GET['stergere_subcategorie'])){
    echo delete_sub_cat();
}

if(isset($_GET['stergere_produse'])){
    echo delete_product();
}
?>