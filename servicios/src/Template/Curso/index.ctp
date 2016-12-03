<h2 class="" >Cursos</h2>
<?= $this->Html->link('Crear curso', ['action' => 'add'],['class'=>'btn btn-success']) ?>
<table class="table table-stripped table-hover">
	<thead>
		<tr>
			<th>id</th>
			<th>Curso</th>
			<th>Descrpcion Curso</th>
			<th>Edicion</th>
			<th>Borrar</th>
			<th>Imagen</th>
		</tr>
		
	</thead>
	<tbody>
		<?php foreach($cursos as $curso){ ?>
			<tr>
				
				<td> <?= $this->Html->link($curso->id_curso, ['action' => 'view', $curso->id_curso]) ?></td>
				<td> <?php echo $curso->nombre_curso ?> </td>
				<td> <?php echo $curso->descripcion_curso ?> </td>
				<td><?= $this->Html->link('Editar', ['action' => 'edit', $curso->id_curso],["class"=>"btn btn-primary"]) ?></td>
				<td><?= $this->Form->postLink(
                'Eliminar',
                ['action' => 'delete', $curso->id_curso],["class"=>"btn btn-danger"],
                ['confirm' => 'Are you sure?'])
            ?></td>
            <td> <?php echo $this->Html->image('cursoImg/1.png' . $curso->imagen_url,["class"=>"img-circle "]) ?> </td>
         
			</tr>
		<?php }
		?>
	</tbody>


</table>