<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 

	$req = "SELECT * FROM `taille` ORDER BY `taille`.`id_typeTaille` ASC";
	$traitement  = $connect ->prepare($req);
	$traitement -> execute();
?>
	<div style="overflow-y: scroll; height: 30vw;">
	<table>
        <thead>
          <tr>
          	<th>Type dont il fait partie</th>
            <th>Nom</th>
            <th>Prix unitaire (en euro)</th>
            <th>Poid (en gramme)</th>
          </tr>
        </thead>

        <tbody>
        	<?php
	        while($row = $traitement->fetch()) {
	        	$req = "SELECT * FROM type_taille WHERE id_typeTaille = ?";
				$traitement2  = $connect ->prepare($req);
				$traitement2 -> bindParam(1, $row['id_typeTaille'] );
				$traitement2 -> execute();
				$row2 = $traitement2->fetch();

				echo '<tr>';
					// Type Taille
          			echo '<td> 
							<div class="input-field col s12">
								<select onchange="modifTypeTailleTaille('. $row['id_Taille'] .', this.value)">
									<option value="'. $row['id_typeTaille'] .'" selected>'. $row2['nom_typeTaille'] . '</option>';

									$req = "SELECT * FROM type_taille WHERE id_typeTaille <> ?";
									$traitement3  = $connect ->prepare($req);
									$traitement3 -> bindParam(1, $row['id_typeTaille'] );
									$traitement3 -> execute();
									
									while ($row3 = $traitement3->fetch()) {
										echo '<option value="'. $row3['id_typeTaille'] .'">'. $row3['nom_typeTaille'] .'</option>';
									}
					echo'			</select>
								<label>Type de produit</label>
							</div>
						  </td>';
					// Nom
					echo '<td>
							<input value="'. $row['Taille'] .'" type="text" class="validate" 
								   onblur="modifNomTaille('. $row['id_Taille'] .', this.value);">
          				  </td>';
          			// Prix
					echo '<td>
							<input value="'. $row['prix_taille'] .'" type="text" class="validate" 
								   onblur="modifPrixTaille('. $row['id_Taille'] .', this.value);">
          				  </td>';

          			echo '<td>
							<input value="'. $row['poid'] .'" type="text" class="validate" 
								   onblur="modifPoidTaille('. $row['id_Taille'] .', this.value);">
          				  </td>';

					// Del
					echo '<td>
							<i class="material-icons materialize-red-text" onclick="deleteSql('. $row['id_Taille'] .', \'taille\')">delete</i>
					  	  </td>';
				echo '</tr>';
			}
	        ?>
        </tbody>
    	
      </table>
      </div>
<?php            

}