	<?php 
					

$result = mysql_query("select * FROM question ");
while($row = mysql_fetch_array($result)) 
	$idQuestion = $row['idQuestion'];
	$Description = $row['Description'];
	$Duree = $row['Duree'];
    $Ponderation = $row['Ponderation'];
	$type = $row['Type'];
     $idExamen = $row['idExamen']; 	
	 
	 $t='text';
						if($t=='text') {
						echo'<div class="panel">
						<table>
						<tr><td>'.$Description.'</td></tr>
						         <tr><td>'.$Ponderation.'</td></tr>
								 <tr><td>'.$Duree.'</td></tr>
								 
						<tr><td><input type="number" name="idexamen" class="form-control round-input" required > </td> </tr></table> </div>';
							
//affiche les questions selon les type



						
						}


			 
			 ?>