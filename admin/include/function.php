<?php
function add_cat(){
    include('include/db.php');
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['add_cat'])){
    $cat_name = $_POST['cat_name'];
    $add_cat = $con->prepare("INSERT INTO main_cat(cat_name) VALUES('$cat_name')");
   if($add_cat->execute()){
       echo "<script>alert('Misiune indeplinita:)'); </script>";
       echo "<script>window.open('index.php?vizualizare_categorii', '_SELF'); </script>";
   }else{
    echo "<script>alert('Ceva nu ai facut bine, i-mi pare rau (:'); </script>";
   }
}
}

function add_product(){
    include('include/db.php');
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['add_product'])){
    $product_name = $_POST['product_name'];
    $cat_id = $_POST['cat_name'];
    $sub_cat_id = $_POST['sub_cat_name'];
    

    $product_image1 = $_FILES['product_image1']['name'];
    $product_image1_tmp =$_FILES['product_image1']['tmp_name'];

    $product_image2 = $_FILES['product_image2']['name'];
    $product_image2_tmp =$_FILES['product_image2']['tmp_name'];

    $product_image3 = $_FILES['product_image3']['name'];
    $product_image3_tmp =$_FILES['product_image3']['tmp_name'];

    $product_image4 = $_FILES['product_image4']['name'];
    $product_image4_tmp =$_FILES['product_image4']['tmp_name'];

    move_uploaded_file($product_image1_tmp, "../images/product_img/$product_image1");
    move_uploaded_file($product_image2_tmp, "../images/product_img/$product_image2");
    move_uploaded_file($product_image3_tmp, "../images/product_img/$product_image3");
    move_uploaded_file($product_image4_tmp, "../images/product_img/$product_image4");


    $product_title1 = $_POST['product_title1'];
    $product_title2 = $_POST['product_title2'];
    $product_title3 = $_POST['product_title3'];
    $product_title4 = $_POST['product_title4'];
    $product_title5 = $_POST['product_title5'];


    $product_price = $_POST['product_price'];
    $product_brand = $_POST['product_brand'];
    $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];

    $add_cat = $con->prepare("INSERT INTO products(product_name, cat_id, sub_cat_id, product_image1, product_image2,
     product_image3, product_image4, product_title1, product_title2, product_title3, product_title4, product_title5,
      product_price, product_brand, product_keywords, product_desc, product_add_date)
                                 VALUES('$product_name', '$cat_id', '$sub_cat_id', '$product_image1', '$product_image2', '$product_image3',
                                  '$product_image4', '$product_title1', '$product_title2', '$product_title3', '$product_title4',
                                   '$product_title5', '$product_price', '$product_brand', '$product_keywords', '$product_desc', NOW())");

   if($add_cat->execute()){
       echo "<script>alert('Misiune indeplinita:)'); </script>";
       echo "<script>window.open('index.php?vizualizare_produse', '_SELF'); </script>";
   }else{
    echo "<script>alert('Ceva nu ai facut bine, i-mi pare rau (:'); </script>";
   }
}

}

function add_sub_cat(){
    include('include/db.php');
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['add_sub_cat'])){
    $cat_id = $_POST['main_cat'];
    $sub_cat_name = $_POST['sub_cat_name'];
    $add_sub_cat = $con->prepare("INSERT INTO sub_cat(sub_cat_name, cat_id) VALUES('$sub_cat_name', '$cat_id')");
   if($add_sub_cat->execute()){
       echo "<script>alert('Misiune indeplinita:)'); </script>";
       echo "<script>window.open('index.php?vizualizare_subcategorii', '_SELF'); </script>";
   }else{
    echo "<script>alert('Ceva nu ai facut bine, i-mi pare rau (:'); </script>";
   }
}
}

function view_all_cat(){
    include('include/db.php');
                        $fetch_cat = $con->prepare("SELECT * FROM main_cat");
                        $fetch_cat-> setFetchMode(PDO:: FETCH_ASSOC);
                        $fetch_cat->execute();
                       
                        while($row = $fetch_cat->fetch()):
                            echo "<option value='".$row['cat_id']."'>".$row['cat_name']."</option>";     
                        endwhile;
}

function viewall_cat(){
    include('include/db.php');
                        $fetch_cat = $con->prepare("SELECT * FROM main_cat");
                        $fetch_cat-> setFetchMode(PDO:: FETCH_ASSOC);
                        $fetch_cat->execute();
                       $i = 1;
                        while($row = $fetch_cat->fetch()):
                            echo 
                            "<tr>
                            <td>".$i++."</td>                 
                            <td>
                            ".$row['cat_name']."
                            </td>  
                            <td><a href='index.php?editare_categorie=".$row['cat_id']."'>Editeaza</a></td>
                            <td><a href='delete_cat.php?stergere_categorie=".$row['cat_id']."' style='margin: 28%'>Sterge</a></td>
                            </tr>";     
                        endwhile;
}

function viewall_sub_cat(){
    include('include/db.php');
                        $fetch_cat = $con->prepare("SELECT * FROM sub_cat");
                        $fetch_cat-> setFetchMode(PDO:: FETCH_ASSOC);
                        $fetch_cat->execute();
                       $i = 1;
                        while($row = $fetch_cat->fetch()):
                            echo 
                            "<tr>
                            <td>".$i++."</td>                 
                            <td>
                            ".$row['sub_cat_name']."
                            </td>  
                            <td><a href='index.php?editare_sub_categorie=".$row['sub_cat_id']."'>Editeaza</a></td>
                            <td><a href='delete_cat.php?stergere_subcategorie=".$row['sub_cat_id']."' style='margin: 28%'>Sterge</a></td>
                            </tr>";     
                        endwhile;
}

function view_all_sub_cat(){
    include('include/db.php');
                        $fetch_sub_cat = $con->prepare("SELECT * FROM sub_cat");
                        $fetch_sub_cat-> setFetchMode(PDO:: FETCH_ASSOC);
                        $fetch_sub_cat->execute();
                       
                        while($row = $fetch_sub_cat->fetch()):
                            echo "<option value='".$row['cat_id']."'>".$row['sub_cat_name']."</option>";     
                        endwhile;
}

function view_all_products(){
    include('include/db.php');
                        $fetch_products = $con->prepare("SELECT * FROM products");
                        $fetch_products-> setFetchMode(PDO:: FETCH_ASSOC);
                        $fetch_products->execute();
                        $i = 1;    
                        while($row = $fetch_products->fetch()):
                            echo "<tr>
                <td style='min-height: 200px;'>".$i++."</td>
                <td><a href='index.php?editare_produs=".$row['product_id']."'>Editeaza</a></td>
                <td><a href='delete_cat.php?stergere_produse=".$row['product_id']."'>Sterge</a></td>   
                <td style='min-height: 200px;'>".$row['product_name']."</td>
                <td style='min-height: 200px;'>
                <img src='../images/product_img/".$row['product_image1']."' style='width: 30px; height: 30px'>
                <img src='../images/product_img/".$row['product_image2']."' style='width: 30px; height: 30px'>
                <img src='../images/product_img/".$row['product_image3']."' style='width: 30px; height: 30px'>
                <img src='../images/product_img/".$row['product_image4']."' style='width: 30px; height: 30px'>
                </td>
                <td>
                    ".$row['product_title1']."
                </td>
                <td>
                    ".$row['product_title2']."
                </td>
                <td>
                    ".$row['product_title3']."
                </td>
                <td>
                    ".$row['product_title4']."
                </td>
                <td>
                    ".$row['product_title5']."
                </td>
                <td>
                    ".$row['product_price']."
                </td>
                <td>
                    ".$row['product_brand']."
                </td>
                <td>
                    ".$row['product_desc']."
                </td>
                <td>
                    ".$row['product_keywords']."
                </td>
            </tr>";     
                        endwhile;
}

function edit_cat(){
    include('include/db.php');
    if(isset($_GET['editare_categorie'])){
        $cat_id = $_GET['editare_categorie'];
        $fetch_cat_name = $con->prepare("SELECT * FROM main_cat WHERE cat_id = '$cat_id'");
        $fetch_cat_name -> setFetchMode(PDO:: FETCH_ASSOC);
        $fetch_cat_name -> execute();
        $row = $fetch_cat_name -> fetch();

        echo "
        <form method='POST'>
        <table>
                <tr>
                    <td>Nume categorie: </td>
                    <td><input type='text' name='update_cat_name' value='".$row['cat_name']."' required></td>
                </tr>
        </table>
        <center><button name='update_cat'>Actualizeaza</button></center>
    </form>
        ";
        if(isset($_POST['update_cat'])){
            $update_cat_name = $_POST['update_cat_name'];

            $update_cat = $con ->prepare("UPDATE main_cat SET cat_name = '$update_cat_name' WHERE cat_id = '$cat_id'");
            if($update_cat -> execute()){
                echo "<script>
                        alert('Actualizare reusita:)');
                    </script>";

                echo "<script>
                    window.open('index.php?vizualizare_categorii', '_SELF');    
                </script>";
            }
        }
    }
}

function edit_sub_cat(){
    include('include/db.php');
    if(isset($_GET['editare_sub_categorie'])){
        $sub_cat_id = $_GET['editare_sub_categorie'];

        $fetch_sub_cat = $con -> prepare("SELECT * FROM sub_cat WHERE sub_cat_id = '$sub_cat_id'");
        $fetch_sub_cat -> setFetchMode(PDO:: FETCH_ASSOC);
        $fetch_sub_cat -> execute();
        $row = $fetch_sub_cat -> fetch();
        $cat_id = $row['cat_id'];

        $fetch_cat = $con -> prepare("SELECT * FROM main_cat WHERE cat_id = '$cat_id'");

        $fetch_cat -> setFetchMode(PDO:: FETCH_ASSOC);
        $fetch_cat -> execute();
        $row_cat = $fetch_cat -> fetch();



        echo "
        <form method = 'POST'>
        <table>
            <tr>
                <td>Alege nume pentru sub-categorie: </td>
                <td>
                    <select name = 'main_cat'>
                        <option value = '".$row_cat['cat_id']."'>
                            ".$row_cat['cat_name']."
                        </option>";
                        echo view_all_cat();
        echo "
                    </select>
                </td>
            </tr>

            <tr>
                <td>Actualizeaza nume pentru sub-categorie: </td>
                <td><input type = 'text' name = 'update_subcat' value = '".$row['sub_cat_name']."'></td>
            </tr>
        </table> 
        <center><button name='update_sub_cat'>Actualizeaza</button></center>   
        </form>
        ";

        if(isset($_POST['update_sub_cat'])){
            $cat_name = $_POST['main_cat'];
            $sub_cat_name = $_POST['update_subcat'];
            
            $update_cat = $con -> prepare("UPDATE sub_cat SET  sub_cat_name = '$sub_cat_name', cat_id = '$cat_name' WHERE sub_cat_id = '$sub_cat_id'");
     
        if($update_cat -> execute()){
            echo "
            <script>
                alert('Actualizare reusita :)');
            </script>
            ";

            echo "
            <script>
                window.open('index.php?vizualizare_subcategorii','_SELF');
            </script>
            ";
        }
    }
}
}

function edit_product(){
    include('include/db.php');
    if(isset($_GET['editare_produs'])){
        $product_id = $_GET['editare_produs'];
        $fetch_product = $con -> prepare("SELECT * FROM products WHERE product_id = '$product_id'");
        $fetch_product -> setFetchMode(PDO:: FETCH_ASSOC);
        $fetch_product -> execute();

        $row = $fetch_product -> fetch();
        $cat_id = $row['cat_id'];
        $sub_cat_id = $row['sub_cat_id'];

        $fetch_cat = $con -> prepare("SELECT * FROM main_cat WHERE cat_id = '$cat_id'");
        $fetch_cat -> setFetchMode(PDO:: FETCH_ASSOC);
        $fetch_cat -> execute();

        $row_cat = $fetch_cat -> fetch();
        $cat_name = $row_cat['cat_name'];

        $fetch_sub_cat = $con -> prepare("SELECT * FROM sub_cat WHERE sub_cat_id = '$sub_cat_id'");
        $fetch_cat -> setFetchMode(PDO:: FETCH_ASSOC);
        $fetch_sub_cat -> execute();

        $row_sub_cat = $fetch_sub_cat -> fetch();
        $sub_cat_name = $row_sub_cat['sub_cat_name'];

        echo "
        <form method='POST' enctype='multipart/form-data'>
        <table>
                <tr>
                    <td>Actualizare produs: </td>
                    <td><input type='text' name='product_name' value='".$row['product_name']."' required></td>
                </tr>

                <tr>
                    <td>Actualizare categorie produs: </td>
                    <td>
                        <select name='cat_name'>
                        <option value='".$row['cat_id']."'>".$cat_name."</option>";
                            echo view_all_cat();
                            echo "
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Actualizare sub-categorie produs: </td>
                    <td>
                    <select name='sub_cat_name'>
                        <option value='".$row['sub_cat_id']."'>".$sub_cat_name."</option>";
                            echo view_all_sub_cat();
                            echo "
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Actualizare imagine produs 1: </td>
                    <td>
                        <input type='file' name='product_image1' />
                        <img src='../images/product_img/".$row['product_image1']."' style='width: 60px; height: 60px;' />
                    </td>
                </tr>

                <tr>
                    <td>Actualizare imagine produs 2: </td>
                    <td>
                        <input type='file' name='product_image2' />
                        <img src='../images/product_img/".$row['product_image2']."' style='width: 60px; height: 60px;' />
                    </td>
                </tr>

                <tr>
                    <td> Actualizare imagine produs 3: </td>
                    <td>
                        <input type='file' name='product_image3' required />
                        <img src='../images/product_img/".$row['product_image3']."' style='width: 60px; height: 60px;' />
                    </td>
                </tr>

                <tr>
                    <td>Actualizare imagine produs 4: </td>
                    <td>
                        <input type='file' name='product_image4' required />
                        <img src='../images/product_img/".$row['product_image4']."' style='width: 60px; height: 60px;' />
                    </td>
                </tr>

                <tr>
                    <td> Actualizare titlu produs1: </td>
                    <td><input type='text' name='product_title1' value='".$row['product_title1']."' required></td>
                </tr>

                <tr>
                    <td> Actualizare titlu produs2: </td>
                    <td><input type='text' name='product_title2' value='".$row['product_title2']."' required></td>
                </tr>

                <tr>
                    <td>Actualizare titlu produs3: </td>
                    <td><input type='text' name='product_title3' value='".$row['product_title3']."' required></td>
                </tr>
                <tr>
                    <td>Actualizare titlu produs4: </td>
                    <td><input type='text' name='product_title4' value='".$row['product_title4']."' required></td>
                </tr>

                <tr>
                    <td>Actualizare titlu produs5: </td>
                    <td><input type='text' name='product_title5' value='".$row['product_title5']."' required></td>
                </tr>

                <tr>
                    <td>Actualizare pret: </td>
                    <td><input type='text' name='product_price' value='".$row['product_price']."' required></td>
                </tr>

                <tr>
                    <td>Actualizare producator: </td>
                    <td><input type='text' name='product_brand' value='".$row['product_brand']."' required></td>
                </tr>

                <tr>
                    <td>Actualizare descriere produs: </td>
                    <td><input type='text' name='product_desc' value='".$row['product_desc']."' required></td>
                </tr>

                <tr>
                    <td>Actualizare tag-uri: </td>
                    <td><input type='text' name='product_keywords' value='".$row['product_keywords']."' required></td>
                </tr>
        </table>
        <center><button name='update_product'>Actualizare</button></center>
    </form>
        ";

        if(isset($_POST['update_product'])){
            $product_name = $_POST['product_name'];
            $cat_id = $_POST['cat_name'];
            $sub_cat_id = $_POST['sub_cat_name'];
            
        
            $product_image1 = $_FILES['product_image1']['name'];
            $product_image1_tmp =$_FILES['product_image1']['tmp_name'];
        
            $product_image2 = $_FILES['product_image2']['name'];
            $product_image2_tmp =$_FILES['product_image2']['tmp_name'];
        
            $product_image3 = $_FILES['product_image3']['name'];
            $product_image3_tmp =$_FILES['product_image3']['tmp_name'];
        
            $product_image4 = $_FILES['product_image4']['name'];
            $product_image4_tmp =$_FILES['product_image4']['tmp_name'];
        
            move_uploaded_file($product_image1_tmp, "../images/product_img/$product_image1");
            move_uploaded_file($product_image2_tmp, "../images/product_img/$product_image2");
            move_uploaded_file($product_image3_tmp, "../images/product_img/$product_image3");
            move_uploaded_file($product_image4_tmp, "../images/product_img/$product_image4");
        
        
            $product_title1 = $_POST['product_title1'];
            $product_title2 = $_POST['product_title2'];
            $product_title3 = $_POST['product_title3'];
            $product_title4 = $_POST['product_title4'];
            $product_title5 = $_POST['product_title5'];
        
        
            $product_price = $_POST['product_price'];
            $product_brand = $_POST['product_brand'];
            $product_keywords = $_POST['product_keywords'];
            $product_desc = $_POST['product_desc'];

            $update_product = $con ->prepare("update products set product_name = '$product_name', cat_id = '$cat_id', sub_cat_id = '$sub_cat_id',
            product_image1 = '$product_image1', product_image2 = '$product_image2', product_image3 = '$product_image3', product_image4 = '$product_image4',
            product_title1 = '$product_title1', product_title2 = '$product_title2', product_title3 = '$product_title3', product_title4 = '$product_title4',
            product_title5 = '$product_title5', product_price = '$product_price', product_brand = '$product_brand', product_keywords = '$product_keywords', product_desc = '$product_desc'
                                                where product_id = '$product_id'");

            if($update_product -> execute()){
                echo"
                    <script>
                        alert('Actualizare executatta cu succes:)');
                    </script>";

                echo
                    "<script>
                        window.open('index.php?vizualizare_produse', '_SELF');
                    </script>";    

            }
        
        }
    }
}

function delete_cat(){
        include('include/db.php');
        $delete_cat = $_GET['stergere_categorie'];
        $delete_cat = $con -> prepare("DELETE FROM main_cat WHERE cat_id = '$delete_cat'");
        if($delete_cat -> execute()){
            echo"
            <script>
                alert('Misiune indeplinita!');
            </script>";
            echo"
            <script>
                window.open('index.php?vizualizare_categorii', '_SELF');
            </script>";
        }
    }

    function delete_sub_cat(){
        include('include/db.php');
        $delete_sub_cat = $_GET['stergere_subcategorie'];
        $delete_sub_cat = $con -> prepare("DELETE FROM sub_cat WHERE sub_cat_id = '$delete_sub_cat'");
        if($delete_sub_cat -> execute()){
            echo"
            <script>
                alert('Misiune indeplinita!');
            </script>";
            echo"
            <script>
                window.open('index.php?vizualizare_subcategorii', '_SELF');
            </script>";
        }

    }

    function delete_product(){
        include('include/db.php');
        $delete_product = $_GET['stergere_produse'];
        $delete_product = $con -> prepare("DELETE FROM products WHERE product_id = '$delete_product'");
        if($delete_product -> execute()){
            echo"
            <script>
                alert('Misiune indeplinita!');
            </script>";
            echo"
            <script>
                window.open('index.php?vizualizare_produse', '_SELF');
            </script>";
        }

    }
?>