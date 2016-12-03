
<table class="table table-stripped table-hover">
	<thead>
		<tr>
			<th>curso</th>
			
		</tr>
		
	</thead>
	<tbody>
		<?php foreach($curso as $cur){ ?>
			<tr>
				
				
				<td> <?php echo $cur->nombre_curso ?> </td>
			
         
			</tr>
		<?php }
		?>
	</tbody>


</table>