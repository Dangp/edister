<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

use Cake\Event\Event;

class StatusTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config); 
      $this->table('status'); 
      $this->displayField('status');
        $this->primaryKey('status_id'); 
    }

    public function validationDefault(Validator $validator)
    {

      
            
            
            
            

        
    }
}
?>