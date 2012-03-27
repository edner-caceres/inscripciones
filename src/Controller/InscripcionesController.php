<?php
App::uses('AppController', 'Controller');
/**
 * Inscripciones Controller
 *
 * @property Inscripcion $Inscripcion
 */
class InscripcionesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Inscripcion->recursive = 0;
		$this->set('inscripciones', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Inscripcion->id = $id;
		if (!$this->Inscripcion->exists()) {
			throw new NotFoundException(__('Invalid inscripcion'));
		}
		$this->set('inscripcion', $this->Inscripcion->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Inscripcion->create();
			if ($this->Inscripcion->save($this->request->data)) {
				$this->Session->setFlash(__('The inscripcion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscripcion could not be saved. Please, try again.'));
			}
		}
		$cuentas = $this->Inscripcion->Cuenta->find('list');
		$grupos = $this->Inscripcion->Grupo->find('list');
		$personas = $this->Inscripcion->Persona->find('list');
		$cursos = $this->Inscripcion->Curso->find('list');
		$this->set(compact('cuentas', 'grupos', 'personas', 'cursos'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Inscripcion->id = $id;
		if (!$this->Inscripcion->exists()) {
			throw new NotFoundException(__('Invalid inscripcion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Inscripcion->save($this->request->data)) {
				$this->Session->setFlash(__('The inscripcion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscripcion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Inscripcion->read(null, $id);
		}
		$cuentas = $this->Inscripcion->Cuenta->find('list');
		$grupos = $this->Inscripcion->Grupo->find('list');
		$personas = $this->Inscripcion->Persona->find('list');
		$cursos = $this->Inscripcion->Curso->find('list');
		$this->set(compact('cuentas', 'grupos', 'personas', 'cursos'));
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
		$this->Inscripcion->id = $id;
		if (!$this->Inscripcion->exists()) {
			throw new NotFoundException(__('Invalid inscripcion'));
		}
		if ($this->Inscripcion->delete()) {
			$this->Session->setFlash(__('Inscripcion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Inscripcion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Inscripcion->recursive = 0;
		$this->set('inscripciones', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Inscripcion->id = $id;
		if (!$this->Inscripcion->exists()) {
			throw new NotFoundException(__('Invalid inscripcion'));
		}
		$this->set('inscripcion', $this->Inscripcion->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Inscripcion->create();
			if ($this->Inscripcion->save($this->request->data)) {
				$this->Session->setFlash(__('The inscripcion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscripcion could not be saved. Please, try again.'));
			}
		}
		$cuentas = $this->Inscripcion->Cuenta->find('list');
		$grupos = $this->Inscripcion->Grupo->find('list');
		$personas = $this->Inscripcion->Persona->find('list');
		$cursos = $this->Inscripcion->Curso->find('list');
		$this->set(compact('cuentas', 'grupos', 'personas', 'cursos'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Inscripcion->id = $id;
		if (!$this->Inscripcion->exists()) {
			throw new NotFoundException(__('Invalid inscripcion'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Inscripcion->save($this->request->data)) {
				$this->Session->setFlash(__('The inscripcion has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscripcion could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Inscripcion->read(null, $id);
		}
		$cuentas = $this->Inscripcion->Cuenta->find('list');
		$grupos = $this->Inscripcion->Grupo->find('list');
		$personas = $this->Inscripcion->Persona->find('list');
		$cursos = $this->Inscripcion->Curso->find('list');
		$this->set(compact('cuentas', 'grupos', 'personas', 'cursos'));
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
		$this->Inscripcion->id = $id;
		if (!$this->Inscripcion->exists()) {
			throw new NotFoundException(__('Invalid inscripcion'));
		}
		if ($this->Inscripcion->delete()) {
			$this->Session->setFlash(__('Inscripcion deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Inscripcion was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function administration() {
		$this->layout='admin';
	}
}
