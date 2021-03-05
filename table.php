<table border="1" cellpadding="20">
	<tbody>
	<?php
	$start = 1;
	$end = 21;

		for ($i=0; $i < ceil($end/3) ; $i++) { 
			
	?>
	<tr>
		<?php
			for ($x=0; $x < 3 ; $x++) { 
				
		?>
			<td>
				<?php
					if ($start < $end) {
						echo $start++;
					}
				?>
			</td>
		<?php
			}

		?>
	</tr>
	<?php
		}
	?>
	</tbody>
</table>