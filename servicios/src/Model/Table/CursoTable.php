<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;



class CursoTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('nombre_curso')
            ->requirePresence('nombre_curso');
            

        return $validator;
    }
}
?>