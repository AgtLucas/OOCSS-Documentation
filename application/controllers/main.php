<?php

class Main extends Controller {
	
	function index() {
		$model = $this->loadModel('classes_model');
		$classes = $model->getAllClasses();

		$template = $this->loadView('main_view');
		$template->set('classes', $classes);
		$template->render();
	}
    
}