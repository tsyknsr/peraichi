<?php
App::uses('AppController', 'Controller');
/**
 * LandingPages Controller
 *
 * @property LandingPage $LandingPage
 * @property PaginatorComponent $Paginator
 */
class LandingPagesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LandingPage->recursive = 0;
		$this->set('landingPages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LandingPage->exists($id)) {
			throw new NotFoundException(__('Invalid landing page'));
		}
		$options = array('conditions' => array('LandingPage.' . $this->LandingPage->primaryKey => $id));
		$this->set('landingPage', $this->LandingPage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LandingPage->create();
			if ($this->LandingPage->save($this->request->data)) {
				$this->Session->setFlash(__('The landing page has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The landing page could not be saved. Please, try again.'));
			}
		}
		$templates = $this->LandingPage->Template->find('list');
		$users = $this->LandingPage->User->find('list');
		$this->set(compact('templates', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LandingPage->exists($id)) {
			throw new NotFoundException(__('Invalid landing page'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LandingPage->save($this->request->data)) {
				$this->Session->setFlash(__('The landing page has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The landing page could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LandingPage.' . $this->LandingPage->primaryKey => $id));
			$this->request->data = $this->LandingPage->find('first', $options);
		}
		$templates = $this->LandingPage->Template->find('list');
		$users = $this->LandingPage->User->find('list');
		$this->set(compact('templates', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LandingPage->id = $id;
		if (!$this->LandingPage->exists()) {
			throw new NotFoundException(__('Invalid landing page'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LandingPage->delete()) {
			$this->Session->setFlash(__('The landing page has been deleted.'));
		} else {
			$this->Session->setFlash(__('The landing page could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
