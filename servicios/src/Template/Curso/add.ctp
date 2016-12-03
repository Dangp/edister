









<div class="row">
	<br>
	<br>
	<br>
	
	<?php
	echo $this->Form->create($curso);

    echo $this->Form->input('nombre_curso');
    echo $this->Form->input('descripcion_curso');
    
    echo $this->Form->button(__('Crear Curso'),["class"=>"btn btn-success"]);
    
    echo $this->Form->end();

?>

<br>
<div class="pull-center"> <?= $this->Html->link('Cancelar', ['action' => 'index'],['class'=>'btn btn-danger']) ?></div>	




</div>

