<?php

class Classes extends Controller {
	
	function index() {
		$model = $this->loadModel('classes_model');
		$classes = $model->getAllClasses();

		$template = $this->loadView('main_view');
		$template->set('classes', $classes);
		$template->render();
	}

	function c($id) {
		$model = $this->loadModel('classes_model');
		$class = $model->getClass($id);

		$template = $this->loadView('class_view');
		$template->set('class', $class);
		$template->render();
	}
    
}