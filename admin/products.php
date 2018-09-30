<div id="rightside"  class="products">
    <h3>Adauga produse</h3>
    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <th>
                    Nr. crt.     
                </th>
                <th>Actualizare</th>
                <th>Stergere</th>
                <th>
                    Nume produs
                </th>
                <th>
                    Imagini produs
                </th>
                <th>
                    Titlu imagine1
                </th>
                <th>
                Titlu imagine2
                </th>
                <th>
                Titlu imagine3
                </th>
                <th>
                Titlu imagine4
                </th>
                <th>
                Titlu imagine5
                </th>
                <th>
                    Pret
                </th>
                <th>
                    Producator
                </th>
                <th>
                    Descriere
                </th>
                <th>
                    Cuvinte cheie
                </th>
            </tr>
            <?php
            include('include/function.php');
            echo view_all_products();
            ?>
        </table>
    </form>
</div>

<?php

?>
