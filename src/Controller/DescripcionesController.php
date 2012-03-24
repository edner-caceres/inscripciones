<?php
App::uses('AppController', 'Controller');
/**
 * Descripciones Controller
 *
 * @property Descripcion $Descripcion
 */
class DescripcionesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Descripcion->recursive = 0;
		$this->set('descripciones', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Descripcion->id = $id;
		if (!$this->Descripcion->exists()) {
			throw new NotFoundException(__('Invalid descripcion'));
		}
		$this->set('descripcion', $this->Descripcion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Descripcion->create();
			if ($this->Descripcion->save($this->request->data)) {
				$this->Session->setFlash(__('The descripcion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The descripcion could not be saved. Please, try again.'));
			}
		}
		$cursos = $this->Descripcion->Curso->find('list');
		$this->set(compact('cursos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Descripcion->id = $id;
		if (!$this->Descripcion->exists()) {
			throw new NotFoundException(__('Invalid descripcion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Descripcion->save($this->request->data)) {
				$this->Session->setFlash(__('The descripcion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The descripcion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Descripcion->read(null, $id);
		}
		$cursos = $this->Descripcion->Curso->find('list');
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
		$this->Descripcion->id = $id;
		if (!$this->Descripcion->exists()) {
			throw new NotFoundException(__('Invalid descripcion'));
		}
		if ($this->Descripcion->delete()) {
			$this->Session->setFlash(__('Descripcion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Descripcion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Descripcion->recursive = 0;
		$this->set('descripciones', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Descripcion->id = $id;
		if (!$this->Descripcion->exists()) {
			throw new NotFoundException(__('Invalid descripcion'));
		}
		$this->set('descripcion', $this->Descripcion->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Descripcion->create();
			if ($this->Descripcion->save($this->request->data)) {
				$this->Session->setFlash(__('The descripcion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The descripcion could not be saved. Please, try again.'));
			}
		}
		$cursos = $this->Descripcion->Curso->find('list');
		$this->set(compact('cursos'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Descripcion->id = $id;
		if (!$this->Descripcion->exists()) {
			throw new NotFoundException(__('Invalid descripcion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Descripcion->save($this->request->data)) {
				$this->Session->setFlash(__('The descripcion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The descripcion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Descripcion->read(null, $id);
		}
		$cursos = $this->Descripcion->Curso->find('list');
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
		$this->Descripcion->id = $id;
		if (!$this->Descripcion->exists()) {
			throw new NotFoundException(__('Invalid descripcion'));
		}
		if ($this->Descripcion->delete()) {
			$this->Session->setFlash(__('Descripcion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Descripcion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
