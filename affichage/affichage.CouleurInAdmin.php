<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 

	$req = "SELECT * FROM couleur";
	$traitement  = $connect ->prepare($req);
	$traitement -> execute();
?>
	<div style="overflow-y: scroll; height: 30vw;">
	<table>
        <thead>
          <tr>
              <th>Nom</th>
              <th>Reférence</th>
              <th>Hexadecimal</th>
              <th>Activer</th>
          </tr>
        </thead>

        <tbody>
        	<?php
	        while($row = $traitement->fetch()) {
	        	if ($row['activer_couleur']) 	{$act = 'checked="checked"'; } else {$act = '';}

				echo '<tr>';
					// Nom
					echo '<td>
							<input value="'. $row['nom_couleur'] .'" type="text" class="validate" 
								   onblur="modifNomCouleur('. $row['id_couleur'] .', this.value);">
          				  </td>';

          			// Ref
					echo '<td>
							<input value="'. $row['ref_couleur'] .'" type="text" class="validate" 
								   onblur="modifRefCouleur('. $row['id_couleur'] .', this.value);">
          				  </td>';

          			// Hexa
					echo '<td>
							<input value="'. $row['couleurHexa'] .'" type="text" class="validate" 
								   onblur="modifHexaCouleur('. $row['id_couleur'] .', this.value);">
          				  </td>';

					// Activer ?
					echo '<td> 
							<p>
							      <label>
							        <input type="checkbox" '. $act .' onchange="modifActiverCouleur('. $row['id_couleur'] .', this.checked);"/>
							        <span>Activer</span>
							      </label>
							    </p>
						 </td>';
					// Del
					echo '<td>
							<i class="material-icons materialize-red-text" onclick="deleteSql('. $row['id_couleur'] .', \'couleur\')">delete</i>
					  	  </td>';
				echo '</tr>';
			}
	        ?>
        </tbody>
    	
      </table>
      </div>
<?php            

}