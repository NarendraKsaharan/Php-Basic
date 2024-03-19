
<table width="400px" cellpadding="0" cellspacing="0" border="2px" align="center">
	<?php

for ($row=1; $row <=8 ; $row++) { 
	echo "<tr>";
	for ($col=1; $col <= 8; $col++) { 
		$sum = $row + $col;
		if ($sum % 2 == 0) {
			echo "<td width=25px height=25px bgcolor=gray></td>";
		}
		else{
			echo "<td width=25px height=25px bgcolor=lightgreen></td>";
		}
	}
	echo "</tr>";
}



	?>

</table>