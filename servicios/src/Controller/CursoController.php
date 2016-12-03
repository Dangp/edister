<?php
	
namespace App\Controller;
use App\Controller\AppController;


class CursoController extends AppController{
	 public function initialize(){
        parent::initialize();
        $this->loadComponent('Flash');  
        
    }

	public function index(){
		$cursos=$this->Curso->find('all');
		$this->set(compact('cursos'));

	}
	public function view($id )
    {
        $curso = $this->Curso->get($id);
        $this->set(compact('curso'));
    }


	public function add(){
		$curso = $this->Curso->newEntity();
		
		if ($this->request->is('post')) {
			$curso = $this->Curso->patchEntity($curso, $this->request->data);
			
			if ($this->Curso->save($curso)) {
                $this->Flash->success(__('tu curso se agrego'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Imposible agregar Curso'));
		}
		$this->set(['curso'=>$curso]);
	}



	public function edit($id=null){
		$curso=$this->Curso->get($id);
		if ($this->request->is(['post', 'put'])) {
        $this->Curso->patchEntity($curso, $this->request->data);
        if ($this->Curso->save($curso)) {
            $this->Flash->success(__('tu curso ha sido editado.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('imposible editar .'));
    }

    $this->set('curso', $curso);
	}
	public function delete($id)
	{
    $this->request->allowMethod(['post', 'delete']);

    $curso = $this->Curso->get($id);
    if ($this->Curso->delete($curso)) {
        $this->Flash->success(__('el curso ha sido eliminado', h($id)));
        return $this->redirect(['action' => 'index']);
    }
}

    public function materia(){
        $curso=$this->Curso->find();
        $curso->select([
                'Curso.nombre_curso',
                'Curso.descripcion_curso',
                'Curso.id_curso',
                'Status.status',
                'Status.id_status',
                
            ])
            ->join([
                    'UsuarioCurso'=>[
                        'table'=>'usuario_curso',
                        'join'=>'INNER',
                        'conditions'=>[
                            'Curso.id_curso=UsuarioCurso.id_curso'
                        ]
                        ],
                        'Status'=>[
                            'table'=>'status',
                            'join'=>'INNER',
                            'conditions'=>['Status.id_status=UsuarioCurso.id_status']],
                        'Usuario'=>[
                            'table'=>'usuario',
                            'join'=>'INNER',
                            'conditions'=>['Usuario.id_usuario=UsuarioCurso.id_usuario'] ]   

                ])
            ->where([
                ['Status.id_status'=>1] and ['Curso.id_curso'=>1]
                ]);
            $this->set(compact('curso'));

    }
}
?>