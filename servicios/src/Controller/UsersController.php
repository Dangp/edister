<?php
	namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;


class UsersController extends AppController{
	 public function initialize(){
        parent::initialize();
        $this->loadComponent('Flash');  
        
    }
    

	public function index(){
		$usuario=$this->Users->find('all');
		$this->set(compact('usuario'));

	}
	public function view($id )
    {
        $usuario = $this->Usuario->get($id);
        $this->set(compact('curso'));
    }


	public function add(){
		$usuario = $this->Users->newEntity();
		
		if ($this->request->is('post')) {
			$usuario = $this->Users->patchEntity($usuario, $this->request->data);
			
			if ($this->Users->save($usuario)) {
                $this->Flash->success(__('registro exitoso'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Imposible agregar Curso'));
		}
		$this->set(['usuario'=>$usuario]);
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
	
	// public function login()
    //{
      //  if ($this->request->is('post')) {
        //    $usuario = $this->Auth->identify();
          //  if ($usuario) {
            //    $this->Auth->setUser($usuario);
              //  return $this->redirect($this->Auth->redirectUrl());
            //}
            //$this->Flash->error(__('Invalid username or password, try again'));
       // }
   // }

    //public function logout()
   // {
     //   return $this->redirect($this->Auth->logout());
    //}
}