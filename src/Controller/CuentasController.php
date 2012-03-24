<?php
App::uses('AppController', 'Controller');
/**
 * Cuentas Controller
 *
 * @property Cuenta $Cuenta
 */
class CuentasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cuenta->recursive = 0;
		$this->set('cuentas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Cuenta->id = $id;
		if (!$this->Cuenta->exists()) {
			throw new NotFoundException(__('Invalid cuenta'));
		}
		$this->set('cuenta', $this->Cuenta->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cuenta->create();
			if ($this->Cuenta->save($this->request->data)) {
				$this->Session->setFlash(__('The cuenta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cuenta could not be saved. Please, try again.'));
			}
		}
		$roles = $this->Cuenta->Rol->find('list');
		$personas = $this->Cuenta->Persona->find('list');
		$this->set(compact('roles', 'personas'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Cuenta->id = $id;
		if (!$this->Cuenta->exists()) {
			throw new NotFoundException(__('Invalid cuenta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cuenta->save($this->request->data)) {
				$this->Session->setFlash(__('The cuenta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cuenta could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Cuenta->read(null, $id);
		}
		$roles = $this->Cuenta->Rol->find('list');
		$personas = $this->Cuenta->Persona->find('list');
		$this->set(compact('roles', 'personas'));
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
		$this->Cuenta->id = $id;
		if (!$this->Cuenta->exists()) {
			throw new NotFoundException(__('Invalid cuenta'));
		}
		if ($this->Cuenta->delete()) {
			$this->Session->setFlash(__('Cuenta deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cuenta was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Cuenta->recursive = 0;
		$this->set('cuentas', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Cuenta->id = $id;
		if (!$this->Cuenta->exists()) {
			throw new NotFoundException(__('Invalid cuenta'));
		}
		$this->set('cuenta', $this->Cuenta->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Cuenta->create();
			if ($this->Cuenta->save($this->request->data)) {
				$this->Session->setFlash(__('The cuenta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cuenta could not be saved. Please, try again.'));
			}
		}
		$roles = $this->Cuenta->Rol->find('list');
		$personas = $this->Cuenta->Persona->find('list');
		$this->set(compact('roles', 'personas'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Cuenta->id = $id;
		if (!$this->Cuenta->exists()) {
			throw new NotFoundException(__('Invalid cuenta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cuenta->save($this->request->data)) {
				$this->Session->setFlash(__('The cuenta has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cuenta could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Cuenta->read(null, $id);
		}
		$roles = $this->Cuenta->Rol->find('list');
		$personas = $this->Cuenta->Persona->find('list');
		$this->set(compact('roles', 'personas'));
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
		$this->Cuenta->id = $id;
		if (!$this->Cuenta->exists()) {
			throw new NotFoundException(__('Invalid cuenta'));
		}
		if ($this->Cuenta->delete()) {
			$this->Session->setFlash(__('Cuenta deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cuenta was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
