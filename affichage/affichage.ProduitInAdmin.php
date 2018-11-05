<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 

	$req = "SELECT * FROM produit ORDER BY id_prod DESC";
	$traitement  = $connect ->prepare($req);
	$traitement -> execute();
?>
	<div style="overflow-y: scroll; height: 30vw;">
	<table>
        <thead>
          <tr>
              <th></th>
              <th>Nom</th>
              <th>Description</th>
              <th>Mot Cle</th>
              <th>Type</th>
              <th>Taille</th>
              <th>Option Inverser</th>
              <th>Afficher a l'accueil</th>
              <th>Activer</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
        	<?php
	        while($row = $traitement->fetch()) {
	        	$req = "SELECT * FROM type_produit WHERE id_type_prod = ?";
				$traitement2  = $connect ->prepare($req);
				$traitement2 -> bindParam(1, $row['id_type_prod'] );
				$traitement2 -> execute();
				$row2 = $traitement2->fetch();
	
				if ($row['inverser']) 			{$inv = 'checked="checked"'; } else {$inv = '';}
				if ($row['affichageHome']) 		{$afH = 'checked="checked"'; } else {$afH = '';}
				if ($row['Activer']) 			{$act = 'checked="checked"'; } else {$act = '';}

				echo '<tr>';
					// Image
					echo '<td><img class="responsive-img" style="width: 2vw;" src="img/produit/'. $row['image_prod'] .'"></td>';
					// Nom
					echo '<td>
							<input value="'. $row['nom_prod'] .'" type="text" class="validate" 
								   onblur="modifNomProduit('. $row['id_prod'] .', this.value);">
          				  </td>';

          			// desc
					echo '<td>
							<input class="countChar" data-length="255" value="'. $row['desc_prod'] .'" type="text" class="validate" 
								   onblur="modifDescProduit('. $row['id_prod'] .', this.value);">
          				  </td>';

          			// Mot cle
					echo '<td>
							<input class="countChar"  data-length="255" value="'. $row['motcle'] .'" type="text" class="validate" 
								   onblur="modifMotCleProduit('. $row['id_prod'] .', this.value);">
          				  </td>';

					// Type de produit $row2['nom_type_produit'] 
					echo '<td> 
							<div class="input-field col s12">
								<select onchange="modifTypeProduit('. $row['id_prod'] .', this.value)">
									<option value="'. $row['id_type_prod'] .'" selected>'. $row2['nom_type_produit'] . '</option>';

									$req = "SELECT * FROM type_produit WHERE id_type_prod <> ?";
									$traitement3  = $connect ->prepare($req);
									$traitement3 -> bindParam(1, $row['id_type_prod'] );
									$traitement3 -> execute();
									
									while ($row3 = $traitement3->fetch()) {
										echo '<option value="'. $row3['id_type_prod'] .'">'. $row3['nom_type_produit'] .'</option>';
									}
					echo'			</select>
								<label>Type de produit</label>
							</div>
						  </td>';

					// Type Taille
			    	$req = "SELECT * FROM type_taille WHERE id_typeTaille = ?";
					$traitement5  = $connect ->prepare($req);
					$traitement5 -> bindParam(1, $row['id_typeTaille'] );
					$traitement5 -> execute();
					$row5 = $traitement5->fetch();

          			echo '<td> 
							<div class="input-field col s12">
								<select onchange="modifTypeTailleProduit('. $row['id_prod'] .', this.value)">
									<option value="'. $row5['id_typeTaille'] .'" selected>'. $row5['nom_typeTaille'] . '</option>';

									$req = "SELECT * FROM type_taille WHERE id_typeTaille <> ?";
									$traitement6  = $connect ->prepare($req);
									$traitement6 -> bindParam(1, $row['id_typeTaille'] );
									$traitement6 -> execute();
									
									while ($row6 = $traitement6->fetch()) {
										echo '<option value="'. $row6['id_typeTaille'] .'">'. $row6['nom_typeTaille'] .'</option>';
									}
					echo'			</select>
								<label>Type de produit</label>
							</div>
						  </td>';

					// Inverser ?
					echo '<td>
							<p>
							      <label>
							        <input type="checkbox" '. $inv .' onchange="modifInverProduit('. $row['id_prod'] .', this.checked);"/>
							        <span>Inverser</span>
							      </label>
							    </p>
						  </td>';
					// Afficher a l'accuil ?
					echo '<td> 
							<p>
							      <label>
							        <input type="checkbox" '. $afH .' onchange="modifAfficheHomeProduit('. $row['id_prod'] .', this.checked);"/>
							        <span>Accueil</span>
							      </label>
							    </p>
						 </td>';
					// Activer ?
					echo '<td> 
							<p>
							      <label>
							        <input type="checkbox" '. $act .' onchange="modifActiverProduit('. $row['id_prod'] .', this.checked);"/>
							        <span>Activer</span>
							      </label>
							    </p>
						 </td>';
					// Modifier
					echo '<td>
							<i class="material-icons materialize-red-text" onclick="deleteProduit('. $row['id_prod'] .')">delete</i>
					  	  </td>';
				echo '</tr>';
			}
	        ?>
        </tbody>
    	
      </table>
      </div>
<?php            

}