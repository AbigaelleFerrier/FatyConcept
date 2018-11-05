<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 

	$req = "SELECT * FROM soustype";
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
							<input value="'. $row['nom_tag'] .'" type="text" class="validate" 
								   onblur="modifNomTag('. $row['id_sousType'] .', this.value);">
          				  </td>';
					// Del
					echo '<td>
							<i class="material-icons materialize-red-text" onclick="deleteTag('. $row['id_sousType'] .')">delete</i>
					  	  </td>';
				echo '</tr>';
			}
	        ?>
        </tbody>
    	
      </table>
      </div>
<?php            

}