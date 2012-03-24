<?php
App::uses('AppController', 'Controller');
/**
 * Temas Controller
 *
 * @property Tema $Tema
 */
class TemasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tema->recursive = 0;
		$this->set('temas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Tema->id = $id;
		if (!$this->Tema->exists()) {
			throw new NotFoundException(__('Invalid tema'));
		}
		$this->set('tema', $this->Tema->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tema->create();
			if ($this->Tema->save($this->request->data)) {
				$this->Session->setFlash(__('The tema has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tema could not be saved. Please, try again.'));
			}
		}
		$cursos = $this->Tema->Curso->find('list');
		$this->set(compact('cursos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Tema->id = $id;
		if (!$this->Tema->exists()) {
			throw new NotFoundException(__('Invalid tema'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tema->save($this->request->data)) {
				$this->Session->setFlash(__('The tema has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tema could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Tema->read(null, $id);
		}
		$cursos = $this->Tema->Curso->find('list');
		$this->set(compact('cursos'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Tema->id = $id;
		if (!$this->Tema->exists()) {
			throw new NotFoundException(__('Invalid tema'));
		}
		if ($this->Tema->delete()) {
			$this->Session->setFlash(__('Tema deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tema was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Tema->recursive = 0;
		$this->set('temas', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Tema->id = $id;
		if (!$this->Tema->exists()) {
			throw new NotFoundException(__('Invalid tema'));
		}
		$this->set('tema', $this->Tema->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Tema->create();
			if ($this->Tema->save($this->request->data)) {
				$this->Session->setFlash(__('The tema has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tema could not be saved. Please, try again.'));
			}
		}
		$cursos = $this->Tema->Curso->find('list');
		$this->set(compact('cursos'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Tema->id = $id;
		if (!$this->Tema->exists()) {
			throw new NotFoundException(__('Invalid tema'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tema->save($this->request->data)) {
				$this->Session->setFlash(__('The tema has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tema could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Tema->read(null, $id);
		}
		$cursos = $this->Tema->Curso->find('list');
		$this->set(compact('cursos'));
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Tema->id = $id;
		if (!$this->Tema->exists()) {
			throw new NotFoundException(__('Invalid tema'));
		}
		if ($this->Tema->delete()) {
			$this->Session->setFlash(__('Tema deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tema was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
