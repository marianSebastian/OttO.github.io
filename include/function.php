<?php
function accesorii(){
    include('include/db.php');
    $fetch_cat = $con -> prepare("SELECT * FROM main_cat WHERE cat_id = '8'");
    $fetch_cat -> setFetchMode(PDO:: FETCH_ASSOC);
    $fetch_cat -> execute();

    $row_cat = $fetch_cat -> fetch();
    $cat_id = $row_cat['cat_id'];
    echo "<h3>".$row_cat['cat_name']."</h3>";

    $fetch_product = $con -> prepare("SELECT * FROM products WHERE cat_id = '$cat_id'");
    $fetch_product -> setFetchMode(PDO:: FETCH_ASSOC);
    $fetch_product -> execute();

while($row_product = $fetch_product -> fetch()):
        echo "<li>
                    <a href='product_view.php?product_id=".$row_product['product_id']."'>
                    <h4>".$row_product['product_name']."</h4>
                    <img src='images/product_img/".$row_product['product_image1']."'>
                    <center>
                        <button id='product_btn'><a href='product_view.php?product_id=".$row_product['product_id']."'>Vizualizare</a></button>
                        <button id='product_btn'><a href='#'>Comanda</a></button>
                        <button id='product_btn'><a href='#'>Preferat</a></button>
                    </center>
                </a>
            </li>";
    endwhile;
}

function pal(){
    include('include/db.php');
    $fetch_cat = $con -> prepare("SELECT * FROM main_cat WHERE cat_id = '19'");
    $fetch_cat -> setFetchMode(PDO:: FETCH_ASSOC);
    $fetch_cat -> execute();

    $row_cat = $fetch_cat -> fetch();
    $cat_id = $row_cat['cat_id'];
    echo "<h3>".$row_cat['cat_name']."</h3>";

    $fetch_product = $con -> prepare("SELECT * FROM products WHERE cat_id = '$cat_id'");
    $fetch_product -> setFetchMode(PDO:: FETCH_ASSOC);
    $fetch_product -> execute();

while($row_product = $fetch_product -> fetch()):
        echo "<li>
                <a href='product_view.php?product_id=".$row_product['product_id']."'>
                    <h4>".$row_product['product_name']."</h4>
                    <img src='images/product_img/".$row_product['product_image1']."'>
                    <center>
                        <button id='product_btn'><a href='product_view.php?product_id=".$row_product['product_id']."'>Vizualizare</a></button>
                        <button id='product_btn'><a href='#'>Comanda</a></button>
                        <button id='product_btn'><a href='#'>Preferat</a></button>
                    </center>
                </a>
            </li>";
    endwhile;
}

function scule(){
    include('include/db.php');
    $fetch_cat = $con -> prepare("SELECT * FROM main_cat WHERE cat_id = '11'");
    $fetch_cat -> setFetchMode(PDO:: FETCH_ASSOC);
    $fetch_cat -> execute();

    $row_cat = $fetch_cat -> fetch();
    $cat_id = $row_cat['cat_id'];
    echo "<h3>".$row_cat['cat_name']."</h3>";

    $fetch_product = $con -> prepare("SELECT * FROM products WHERE cat_id = '$cat_id'");
    $fetch_product -> setFetchMode(PDO:: FETCH_ASSOC);
    $fetch_product -> execute();

while($row_product = $fetch_product -> fetch()):
        echo "<li>
                <a href='product_view.php?product_id=".$row_product['product_id']."'>
                    <h4>".$row_product['product_name']."</h4>
                    <img src='images/product_img/".$row_product['product_image1']."'>
                    <center>
                        <button id='product_btn'><a href='product_view.php?product_id=".$row_product['product_id']."'>Vizualizare</a></button>
                        <button id='product_btn'><a href='#'>Comanda</a></button>
                        <button id='product_btn'><a href='#'>Preferat</a></button>
                    </center>
                </a>
            </li>";
    endwhile;
}

function product_details(){
    include('include/db.php');

    if(isset($_GET['product_id'])){
        $product_id = $_GET['product_id'];
    
        $fetch_product = $con -> prepare("SELECT * FROM products WHERE product_id = '$product_id'");
        $fetch_product -> setFetchMode(PDO:: FETCH_ASSOC);
        $fetch_product -> execute();

        $row_product = $fetch_product -> fetch();

        echo "
        <div id = 'product_title'>
        <h3>".$row_product['product_name']."</h3><hr />
        <ul>
            <li>
           ".$row_product['product_title1']."
            </li>
            <li>
            ".$row_product['product_title2']."
            </li>
            <li>
            ".$row_product['product_title3']."
            </li>
            <li>
            ".$row_product['product_title4']."
            </li>
            <li>
            ".$row_product['product_title5']."
            </li>
        </ul>
        <ul>
            <li>
            Producator: ".$row_product['product_brand']."
            </li>
            <li>
           Descriere produs: ".$row_product['product_desc']."
            </li>
        </ul><br clear = 'all'>
        <center><h4> Pret: ".$row_product['product_price']." Ron/Buc</center></h4>
        </div>
        <div id = 'product_image'>
        <img src='images/product_img/".$row_product['product_image1']."'>
        <ul>
            <li>
            <img src='images/product_img/".$row_product['product_image1']."'>
            </li>
            <li>
            <img src='images/product_img/".$row_product['product_image2']."'>
            </li>
            <li>
            <img src='images/product_img/".$row_product['product_image3']."'>
            </li>
            <li>
            <img src='images/product_img/".$row_product['product_image4']."'>
            </li>
        </ul>
        </div>";
    }
}
?>