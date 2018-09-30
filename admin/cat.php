<div id="rightside">
<h3>Vizualizare categorii de produse</h3>
<form action=""  method="post" enctype="multipart/form-data">
<table>
    <tr>
        <th>
            Nr. crt.
        </th>
        <th>
           Categorie produs
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
        echo viewall_cat();
        ?>
    </tr>
</table>
</form>
    <h3 id="add_cat">Adauga categorie de produse</h3>
    <form method="POST">
        <table>
                <tr>
                    <td>Nume categorie: </td>
                    <td><input type="text" name="cat_name" required></td>
                </tr>
        </table>
        <center><button name="add_cat">Adauga</button></center>
    </form>
</div>

<?php
    echo add_cat();
?>
