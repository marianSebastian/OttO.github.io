<?php
if(!isset($_GET['vizualizare_categorii'])){
    if(!isset($_GET['vizualizare_subcategorii'])){  
        if(!isset($_GET['adaugare_produse'])){  
            if(!isset($_GET['vizualizare_produse'])){  
?> 

<div id="rightside">
<?php
if(isset($_GET['editare_categorie'])){
    include('edit_cat.php');
}

if(isset($_GET['editare_sub_categorie'])){
    include('edit_sub_cat.php');
}

if(isset($_GET['editare_produs'])){
    include('edit_product.php');
}
?>
</div><!--end of rightside-->

<?php
}
}
}
}
?>