<?php
App::uses('AppController', 'Controller');
/**
 * Grupos Controller
 *
 * @property Grupo $Grupo
 */
class GruposController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Grupo->recursive = 0;
		$this->set('grupos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Grupo->id = $id;
		if (!$this->Grupo->exists()) {
			throw new NotFoundException(__('Invalid grupo'));
		}
		$this->set('grupo', $this->Grupo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Grupo->create();
			if ($this->Grupo->save($this->request->data)) {
				$this->Session->setFlash(__('The grupo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupo could not be saved. Please, try again.'));
			}
		}
		$cursos = $this->Grupo->Curso->find('list');
		$gestiones = $this->Grupo->Gestion->find('list');
		$personas = $this->Grupo->Persona->find('list');
		$this->set(compact('cursos', 'gestiones', 'personas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Grupo->id = $id;
		if (!$this->Grupo->exists()) {
			throw new NotFoundException(__('Invalid grupo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Grupo->save($this->request->data)) {
				$this->Session->setFlash(__('The grupo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Grupo->read(null, $id);
		}
		$cursos = $this->Grupo->Curso->find('list');
		$gestiones = $this->Grupo->Gestion->find('list');
		$personas = $this->Grupo->Persona->find('list');
		$this->set(compact('cursos', 'gestiones', 'personas'));
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
		$this->Grupo->id = $id;
		if (!$this->Grupo->exists()) {
			throw new NotFoundException(__('Invalid grupo'));
		}
		if ($this->Grupo->delete()) {
			$this->Session->setFlash(__('Grupo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Grupo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Grupo->recursive = 0;
		$this->set('grupos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Grupo->id = $id;
		if (!$this->Grupo->exists()) {
			throw new NotFoundException(__('Invalid grupo'));
		}
		$this->set('grupo', $this->Grupo->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Grupo->create();
			if ($this->Grupo->save($this->request->data)) {
				$this->Session->setFlash(__('The grupo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupo could not be saved. Please, try again.'));
			}
		}
		$cursos = $this->Grupo->Curso->find('list');
		$gestiones = $this->Grupo->Gestion->find('list');
		$personas = $this->Grupo->Persona->find('list');
		$this->set(compact('cursos', 'gestiones', 'personas'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Grupo->id = $id;
		if (!$this->Grupo->exists()) {
			throw new NotFoundException(__('Invalid grupo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Grupo->save($this->request->data)) {
				$this->Session->setFlash(__('The grupo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Grupo->read(null, $id);
		}
		$cursos = $this->Grupo->Curso->find('list');
		$gestiones = $this->Grupo->Gestion->find('list');
		$personas = $this->Grupo->Persona->find('list');
		$this->set(compact('cursos', 'gestiones', 'personas'));
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
		$this->Grupo->id = $id;
		if (!$this->Grupo->exists()) {
			throw new NotFoundException(__('Invalid grupo'));
		}
		if ($this->Grupo->delete()) {
			$this->Session->setFlash(__('Grupo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Grupo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
