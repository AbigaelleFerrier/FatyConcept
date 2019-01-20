<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 

	$req = "SELECT * FROM type_produit";
	$traitement  = $connect ->prepare($req);
	$traitement -> execute();
?>
	<div style="overflow-y: scroll; height: 30vw;">
	<table>
        <thead>
          <tr>
              <th>Nom</th>
              <th>Nécessite couleur</th>
          </tr>
        </thead>

        <tbody>
        	<?php
	        while($row = $traitement->fetch()) {
	        	if ($row['necessite_couleur']) 	{$act = 'checked="checked"'; } else {$act = '';}

				echo '<tr>';
					// Nom
					echo '<td>
							<input value="'. $row['nom_type_produit'] .'" type="text" class="validate" 
								   onblur="modifNomTypeProd('. $row['id_type_prod'] .', this.value);">
          				  </td>';

					// couleur ?
					echo '<td> 
							<p>
							      <label>
							        <input type="checkbox" '. $act .' onchange="modifNecCouleurTypeProd('. $row['id_type_prod'] .', this.checked);"/>
							        <span>Activer</span>
							      </label>
							    </p>
						 </td>';
					// Del
					echo '<td>
							<i class="material-icons materialize-red-text" onclick="deleteSql('. $row['id_type_prod'] .', \'type_produit\')">delete</i>
					  	  </td>';
				echo '</tr>';
			}
	        ?>
        </tbody>
    	
      </table>
      </div>
<?php            

}