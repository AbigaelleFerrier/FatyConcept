        <article>
            <h2><?php echo $titre;?></h2>
            <p><?php echo $soustitre;?></p>
            <p>
            <table class="case_orange">
            <?php
                $cpt=0;
                echo "<tr>";
                foreach ($donnees as $produit) {
                    echo "<td width='30%'>";
                        echo img('prod/'.$produit->refProd.'.jpg','height="150" width="150"');
                        echo "<br>";
                        echo $produit->nomProd;
                        echo "<br>";
                        echo "<b>".$produit->qteStock."</b> <i>en stock</i>";
                    echo "</td>";
                    $cpt++;
                    if ($cpt%3==0) {
                        echo "</tr><tr>";
                    }
                }
                echo "</tr>";
            ?>
            </table>
            </p>
        </article>
