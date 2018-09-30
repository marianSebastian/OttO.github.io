<div id="rightside">

    <h3>Vizualizare sub-categorii de produse</h3>
<form action=""  method="post" enctype="multipart/form-data">
<table>
    <tr>
        <th>
            Nr. crt.
        </th>
        <th>
        Sub-categorie produs
        </th>
        <th>
        Editare
        </th>
        <th>
        Stergere
        </th>
    </tr>

    <tr>
        <?php
        include("include/function.php");
        echo viewall_sub_cat();
        ?>
    </tr>
</table>
</form>

    <h3 id="add_cat">Adauga sub-categorie de produse</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Alege nume categorie: </td>
                <td>
                    <select name="main_cat" id="">
                        <?php
                        echo view_all_sub_cat();                                    
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nume sub-categorie: </td>
                <td><input type="text" name="sub_cat_name" required></td>
            </tr>
        </table>
        <center><button name="add_sub_cat">Adauga</button></center>
    </form>
</div>

<?php
    echo add_sub_cat();
?>
