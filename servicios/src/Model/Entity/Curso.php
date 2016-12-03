<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Curso extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id_curso' => false
    ];

    public function _getCursoImg() {
        return '1.jpg';
    }
}