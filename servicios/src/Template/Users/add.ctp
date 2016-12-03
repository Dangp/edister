
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
    echo $this->Form->create($usuario);
    echo $this->Form->input('nombre_usuario');
    

    echo $this->Form->input('apellido_paterno');
    echo $this->Form->input('apellido_materno');
    echo $this->Form->input('correo');
    echo $this->Form->input('passwd');
    echo $this->Form->input('permiso');
    
    
    
    
    
    echo $this->Form->button(__('Guardar'),["class"=>"btn btn-success"]);
    echo $this->Form->end();
?>