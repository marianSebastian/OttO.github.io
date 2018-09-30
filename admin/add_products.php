<div id="rightside">
    <h3>Adauga produse</h3>
    <form method="POST" enctype="multipart/form-data">
        <table>
                <tr>
                    <td>Nume produs: </td>
                    <td><input type="text" name="product_name" required></td>
                </tr>

                <tr>
                    <td>Alege categorie produs: </td>
                    <td>
                        <select name="cat_name" id="">
                        <?php
                        include("include/function.php");
                            echo view_all_cat();
                        ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Alege sub-categorie produs: </td>
                    <td>
                    <select name="sub_cat_name" id="">
                        <?php
                            echo view_all_sub_cat();
                        ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Imagine produs 1: </td>
                    <td><input type="file" name="product_image1" required></td>
                </tr>
                <tr>
                    <td>Imagine produs 2: </td>
                    <td><input type="file" name="product_image2" required></td>
                </tr>
                <tr>
                    <td>Imagine produs 3: </td>
                    <td><input type="file" name="product_image3" required></td>
                </tr>
                <tr>
                    <td>Imagine produs 4: </td>
                    <td><input type="file" name="product_image4" required></td>
                </tr>

                <tr>
                    <td>Titlu produs1: </td>
                    <td><input type="text" name="product_title1" required></td>
                </tr>
                <tr>
                    <td>Titlu produs2: </td>
                    <td><input type="text" name="product_title2" required></td>
                </tr>
                <tr>
                    <td>Titlu produs3: </td>
                    <td><input type="text" name="product_title3" required></td>
                </tr>
                <tr>
                    <td>Titlu produs4: </td>
                    <td><input type="text" name="product_title4" required></td>
                </tr>

                <tr>
                    <td>Titlu produs5: </td>
                    <td><input type="text" name="product_title5" required></td>
                </tr>

                <tr>
                    <td>Pret: </td>
                    <td><input type="text" name="product_price" required></td>
                </tr>

                <tr>
                    <td>Producator: </td>
                    <td><input type="text" name="product_brand" required></td>
                </tr>

                <tr>
                    <td>Descriere produs: </td>
                    <td><input type="text" name="product_desc" required></td>
                </tr>

                <tr>
                    <td>Tag-uri: </td>
                    <td><input type="text" name="product_keywords" required></td>
                </tr>
        </table>
        <center><button name="add_product">Adauga</button></center>
    </form>
</div>

<?php
 echo add_product();
?>
