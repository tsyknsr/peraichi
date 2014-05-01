<?php
App::uses('AppController', 'Controller');

class StaticsController extends AppController {

	public $uses = array();


	public function index() {

	}

	public function render($view = null, $layout = null) {
		if (is_null($view)) {
			$view = $this->action;
		}
		return parent::render($view, $layout);
	}

	public function init() {
        $contents = file_get_contents('/share/app/webroot/middleman_init.sh');
        var_dump($contents);
        echo shell_exec($contents);
        // test
        $view = 'index';
		return parent::render($view);
        // return $this->redirect(array('action' => 'index'));
	}
}
