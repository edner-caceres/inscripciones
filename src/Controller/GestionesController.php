<?php
App::uses('AppController', 'Controller');
/**
 * Gestiones Controller
 *
 * @property Gestion $Gestion
 */
class GestionesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Gestion->recursive = 0;
		$this->set('gestiones', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Gestion->id = $id;
		if (!$this->Gestion->exists()) {
			throw new NotFoundException(__('Invalid gestion'));
		}
		$this->set('gestion', $this->Gestion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Gestion->create();
			if ($this->Gestion->save($this->request->data)) {
				$this->Session->setFlash(__('The gestion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gestion could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Gestion->id = $id;
		if (!$this->Gestion->exists()) {
			throw new NotFoundException(__('Invalid gestion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Gestion->save($this->request->data)) {
				$this->Session->setFlash(__('The gestion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gestion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Gestion->read(null, $id);
		}
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
		$this->Gestion->id = $id;
		if (!$this->Gestion->exists()) {
			throw new NotFoundException(__('Invalid gestion'));
		}
		if ($this->Gestion->delete()) {
			$this->Session->setFlash(__('Gestion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Gestion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Gestion->recursive = 0;
		$this->set('gestiones', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Gestion->id = $id;
		if (!$this->Gestion->exists()) {
			throw new NotFoundException(__('Invalid gestion'));
		}
		$this->set('gestion', $this->Gestion->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Gestion->create();
			if ($this->Gestion->save($this->request->data)) {
				$this->Session->setFlash(__('The gestion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gestion could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Gestion->id = $id;
		if (!$this->Gestion->exists()) {
			throw new NotFoundException(__('Invalid gestion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Gestion->save($this->request->data)) {
				$this->Session->setFlash(__('The gestion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gestion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Gestion->read(null, $id);
		}
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
		$this->Gestion->id = $id;
		if (!$this->Gestion->exists()) {
			throw new NotFoundException(__('Invalid gestion'));
		}
		if ($this->Gestion->delete()) {
			$this->Session->setFlash(__('Gestion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Gestion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
