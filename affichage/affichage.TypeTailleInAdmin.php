<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 

	$req = "SELECT * FROM type_taille";
	$traitement  = $connect ->prepare($req);
	$traitement -> execute();
?>
	<div style="overflow-y: scroll; height: 30vw;">
	<table>
        <thead>
          <tr>
              <th>Nom</th>
          </tr>
        </thead>

        <tbody>
        	<?php
	        while($row = $traitement->fetch()) {
				echo '<tr>';
					// Nom
					echo '<td>
							<input value="'. $row['nom_typeTaille'] .'" type="text" class="validate" 
								   onblur="modifNomTypeTaille('. $row['id_typeTaille'] .', this.value);">
          				  </td>';
					// Del
					echo '<td>
							<i class="material-icons materialize-red-text" onclick="deleteSql('. $row['id_typeTaille'] .', \'type_taille\')">delete</i>
					  	  </td>';
				echo '</tr>';
			}
	        ?>
        </tbody>
    	
      </table>
      </div>
<?php            

}