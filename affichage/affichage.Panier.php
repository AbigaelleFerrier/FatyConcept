<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Quantiter</th>
            <th>Prix</th>
            <th>Taille</th>
            <th>Couleur</th>
            <th>Option</th>
        </tr>
    </thead>

    <tbody>
        <?php
            if (isset($_SESSION['pannier'])) {
                foreach ($_SESSION['pannier']['idP'] as $key => $row) {
                    echo "<tr>";

                        $req = "SELECT * FROM produit WHERE id_prod = ?";
                        $traitementAffPanP = $connect ->prepare($req);
                        $traitementAffPanP -> bindParam(1, $row);
                        $traitementAffPanP -> execute();
                        if ($rowAffPanP = $traitementAffPanP->fetch()) {}
                        else {$rowAffPanP='Err10 : Nom';}

                        $req = "SELECT * FROM Taille WHERE id_Taille = ?";
                        $traitementAffPanTllPrix = $connect ->prepare($req);
                        $traitementAffPanTllPrix -> bindParam(1, $_SESSION['pannier']['taille'][$key]);
                        $traitementAffPanTllPrix -> execute();

                        
                        if ($rowAffPanT = $traitementAffPanTllPrix->fetch()) {
                            $rowAffPanT['prix_taille'] *= $_SESSION['pannier']['qte'][$key];
                            if (isset($_SESSION['pannier']['option'][$key]) && $_SESSION['pannier']['option'][$key] == 'RV') {
                                $rowAffPanT['prix_taille'] *= 2;   
                            }
                            $rowAffPanT['prix_taille'] .= " €";
                        }
                        
                        
                        echo '<td>'. $rowAffPanP['nom_prod'] .'</td>';
                        
                        echo '<td>'. $_SESSION['pannier']['qte'][$key] .'</td>';

                        echo '<td>'. $rowAffPanT['prix_taille'] .'</td>';

                        
                        echo '<td>'. $rowAffPanT['Taille'] .'</td>';

                        if ($_SESSION['pannier']['couleur'][$key] != 'E124Zuqx') {
                            $reqCoul = "SELECT * FROM couleur WHERE id_couleur = ?";
                            $traitementCoul = $connect ->prepare($reqCoul);
                            $traitementCoul -> bindParam(1, $_SESSION['pannier']['couleur'][$key] );
                            $traitementCoul -> execute();

                            if ($rowCoul = $traitementCoul->fetch()) {
                               echo '<td>'. $rowCoul['nom_couleur'] .'</td>';
                            }
                            else {
                                echo "nA";
                            }
                            
                        }
                        else {
                            echo '<td>nA</td>';
                        }

                        if ($_SESSION['pannier']['option'][$key] != 'E124Zuqx') {
                            echo '<td>'. $_SESSION['pannier']['option'][$key] .'</td>';
                        }
                        else {
                            echo '<td>nA</td>';
                        }
                        
                        
                    echo "</tr>";
                }
            }
            else {
                echo "<tr><h5>Vous n'avez rien dans votre pannier</h5></tr>";
            }

                
        ?>
            
    </tbody>
</table>


<!-- 
<tr>
<td>Jonathan</td>
<td>Lollipop</td>
<td>$7.00</td>
</tr>
 -->