<?php
App::uses('AppController', 'Controller');
/**
 * TemplateCategories Controller
 *
 * @property TemplateCategory $TemplateCategory
 * @property PaginatorComponent $Paginator
 */
class TemplateCategoriesController extends AppController {

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
		$this->TemplateCategory->recursive = 0;
		$this->set('templateCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TemplateCategory->exists($id)) {
			throw new NotFoundException(__('Invalid template category'));
		}
		$options = array('conditions' => array('TemplateCategory.' . $this->TemplateCategory->primaryKey => $id));
		$this->set('templateCategory', $this->TemplateCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TemplateCategory->create();
			if ($this->TemplateCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The template category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The template category could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TemplateCategory->exists($id)) {
			throw new NotFoundException(__('Invalid template category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TemplateCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The template category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The template category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TemplateCategory.' . $this->TemplateCategory->primaryKey => $id));
			$this->request->data = $this->TemplateCategory->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TemplateCategory->id = $id;
		if (!$this->TemplateCategory->exists()) {
			throw new NotFoundException(__('Invalid template category'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TemplateCategory->delete()) {
			$this->Session->setFlash(__('The template category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The template category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
