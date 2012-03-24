<?php
App::uses('AppController', 'Controller');
/**
 * Devoluciones Controller
 *
 * @property Devolucion $Devolucion
 */
class DevolucionesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Devolucion->recursive = 0;
		$this->set('devoluciones', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Devolucion->id = $id;
		if (!$this->Devolucion->exists()) {
			throw new NotFoundException(__('Invalid devolucion'));
		}
		$this->set('devolucion', $this->Devolucion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Devolucion->create();
			if ($this->Devolucion->save($this->request->data)) {
				$this->Session->setFlash(__('The devolucion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The devolucion could not be saved. Please, try again.'));
			}
		}
		$inscripciones = $this->Devolucion->Inscripcion->find('list');
		$this->set(compact('inscripciones'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Devolucion->id = $id;
		if (!$this->Devolucion->exists()) {
			throw new NotFoundException(__('Invalid devolucion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Devolucion->save($this->request->data)) {
				$this->Session->setFlash(__('The devolucion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The devolucion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Devolucion->read(null, $id);
		}
		$inscripciones = $this->Devolucion->Inscripcion->find('list');
		$this->set(compact('inscripciones'));
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
		$this->Devolucion->id = $id;
		if (!$this->Devolucion->exists()) {
			throw new NotFoundException(__('Invalid devolucion'));
		}
		if ($this->Devolucion->delete()) {
			$this->Session->setFlash(__('Devolucion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Devolucion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Devolucion->recursive = 0;
		$this->set('devoluciones', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Devolucion->id = $id;
		if (!$this->Devolucion->exists()) {
			throw new NotFoundException(__('Invalid devolucion'));
		}
		$this->set('devolucion', $this->Devolucion->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Devolucion->create();
			if ($this->Devolucion->save($this->request->data)) {
				$this->Session->setFlash(__('The devolucion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The devolucion could not be saved. Please, try again.'));
			}
		}
		$inscripciones = $this->Devolucion->Inscripcion->find('list');
		$this->set(compact('inscripciones'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Devolucion->id = $id;
		if (!$this->Devolucion->exists()) {
			throw new NotFoundException(__('Invalid devolucion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Devolucion->save($this->request->data)) {
				$this->Session->setFlash(__('The devolucion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The devolucion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Devolucion->read(null, $id);
		}
		$inscripciones = $this->Devolucion->Inscripcion->find('list');
		$this->set(compact('inscripciones'));
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
		$this->Devolucion->id = $id;
		if (!$this->Devolucion->exists()) {
			throw new NotFoundException(__('Invalid devolucion'));
		}
		if ($this->Devolucion->delete()) {
			$this->Session->setFlash(__('Devolucion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Devolucion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
