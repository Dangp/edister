<h2 class="" >Usuarios</h2>
<br>
<div class="pull-right"> <?= $this->Html->link('Nuevo Usuario', ['action' => 'add'],['class'=>'btn btn-success']) ?></div>
<table class="table table-stripped table-hover">
	<thead>
		<tr>
			<th>id</th>
			<th>Nombre</th>
			<th>Apellido Pate</th>
			<th>Apellido ma</th>
			<th>correo</th>
			<th>passwd</th>
		</tr>
		
	</thead>
	<tbody>
		<?php foreach($usuario as $usua){ ?>
			<tr>
				
				
				<td> <?php echo $usua->id_usuario ?> </td>
				<td> <?php echo $usua->nombre_usuario ?> </td>
				<td> <?php echo $usua->apellido_paterno ?> </td>
				<td> <?php echo $usua->apellido_paterno ?> </td>
			</tr>
		<?php }
		?>
	</tbody>


</table>