<?php 

if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'ok') { 

	$req = "SELECT * FROM typo";
	$traitement  = $connect ->prepare($req);
	$traitement -> execute();
?>
	<div style="overflow-y: scroll; height: 30vw;">
	<table>
        <thead>
          <tr>
              <th>Nom afficher</th>
              <th>Lien Google Font</th>
              <th>CSS</th>
              <th></th>
          </tr>
        </thead>

        <tbody>
        	<?php
	        while($row = $traitement->fetch()) {
	        	if ($row['activer_typo']) 	{$act = 'checked="checked"'; } else {$act = '';}

				echo '<tr>';
					// Nom
					echo '<td>
							<input value="'. $row['nom_typo'] .'" type="text" class="validate" 
								   onblur="modifNomTypo('. $row['id_Typo'] .', this.value);"></textarea>
          				  </td>';

          			// Link
					echo '<td>
							<textarea class="materialize-textarea" type="text" class="validate" onblur="modifLinkTypo('. $row['id_Typo'] .', this.value);">'. $row['link_typo'] .'</textarea>
          				  </td>';

          			// CSS
					echo '<td>
							<input value="'. $row['class_typo'] .'" type="text" class="validate" 
								   onblur="modifCssTypo('. $row['id_Typo'] .', this.value);">
          				  </td>';

					// // Activer ?
					// echo '<td> 
					// 		<p>
					// 		      <label>
					// 		        <input type="checkbox" '. $act .' onchange="modifActiverTypo('. $row['id_Typo'] .', this.checked);"/>
					// 		        <span>Activer</span>
					// 		      </label>
					// 		    </p>
					// 	 </td>';
					// Del
					echo '<td>
							<i class="material-icons materialize-red-text" onclick="deleteSql('. $row['id_Typo'] .', \'typo\')">delete</i>
					  	  </td>';
				echo '</tr>';
			}
	        ?>
        </tbody>
    	
      </table>
      </div>
<?php            

}