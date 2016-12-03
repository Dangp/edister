<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

use Cake\Event\Event;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config); 
      $this->table('usuario');
       $this->displayField('nombre_usuario');
        $this->primaryKey('id_usuario');
        $this->belongsToMany(
            'curso',
            [
                'foreignKey'=>'id_usuario',
                'targetForeigKey'=>'id_curso',
                'joinTable'=>'usuario_curso'
            ]
            ); 
    }

    public function validationDefault(Validator $validator)
    {

        $validator
            ->notEmpty('nombre_usuario')
            ->requirePresence('nombre_usuario')
            ->notEmpty('apellido_paterno')
            ->requirePresence('apellido_paterno')
            ->notEmpty('correo')
            ->requirePresence('correo')
            ->notEmpty('passwd')
            ->requirePresence('passwd');
            //->add('role', 'inList', [
              //  'rule' => ['inList', ['correo', 'passwd']],
                //'message' => 'Please enter a valid role'
            //]);
            return $validator;
            
            
            

        
    }
}
?>