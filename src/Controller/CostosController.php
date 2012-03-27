<?php
App::uses('AppController', 'Controller');
/**
 * Costos Controller
 *
 * @property Costo $Costo
 */
class CostosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Costo->recursive = 0;
		$this->set('costos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Costo->id = $id;
		if (!$this->Costo->exists()) {
			throw new NotFoundException(__('Invalid costo'));
		}
		$this->set('costo', $this->Costo->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Costo->create();
			if ($this->Costo->save($this->request->data)) {
				$this->Session->setFlash(__('The costo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The costo could not be saved. Please, try again.'));
			}
		}
		$cursos = $this->Costo->Curso->find('list');
		$this->set(compact('cursos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Costo->id = $id;
		if (!$this->Costo->exists()) {
			throw new NotFoundException(__('Invalid costo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Costo->save($this->request->data)) {
				$this->Session->setFlash(__('The costo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The costo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Costo->read(null, $id);
		}
		$cursos = $this->Costo->Curso->find('list');
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
		$this->Costo->id = $id;
		if (!$this->Costo->exists()) {
			throw new NotFoundException(__('Invalid costo'));
		}
		if ($this->Costo->delete()) {
			$this->Session->setFlash(__('Costo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Costo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Costo->recursive = 0;
		$this->set('costos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Costo->id = $id;
		if (!$this->Costo->exists()) {
			throw new NotFoundException(__('Invalid costo'));
		}
		$this->set('costo', $this->Costo->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Costo->create();
			if ($this->Costo->save($this->request->data)) {
				$this->Session->setFlash(__('The costo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The costo could not be saved. Please, try again.'));
			}
		}
		$cursos = $this->Costo->Curso->find('list');
		$this->set(compact('cursos'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Costo->id = $id;
		if (!$this->Costo->exists()) {
			throw new NotFoundException(__('Invalid costo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Costo->save($this->request->data)) {
				$this->Session->setFlash(__('The costo has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The costo could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Costo->read(null, $id);
		}
		$cursos = $this->Costo->Curso->find('list');
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
		$this->Costo->id = $id;
		if (!$this->Costo->exists()) {
			throw new NotFoundException(__('Invalid costo'));
		}
		if ($this->Costo->delete()) {
			$this->Session->setFlash(__('Costo deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Costo was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
