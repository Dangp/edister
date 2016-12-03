<h1>Editar Curso</h1>
<?php
    echo $this->Form->create($curso);
    echo $this->Form->input('nombre_curso');
    echo $this->Form->input('descripcion_curso', ['rows' => '3']);
    echo $this->Form->button(__('Guardar'),["class"=>"btn btn-success"]);
    echo $this->Form->end();
?>