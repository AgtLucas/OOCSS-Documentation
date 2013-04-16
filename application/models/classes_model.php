<?php

class Classes_model extends Model {

	function getAllClasses() {	
		$result = $this->query("SELECT classes.*, options.* FROM `classes` LEFT JOIN `options` ON `classes`.`id` = `options`.`o_class_id`");
		return $this->processArray($result);
	}

	function processArray($data) {
		$newArray = array();

		foreach($data as $key => $item) {

			$id = $item->id;
				
			if(!isset($newArray[$id])) {

				$newArray[$id] = array(
					'id' => $id, 
					'name' => $item->name,
					'class' => $item->class,
					'description' => $item->description,
					'added' => $item->added,
					'options' => array()
				);
				
			}

			$newArray[$id]['options'][] = array(
				'id' => $item->o_id,
				'class_id' => $item->o_class_id,
				'name' => $item->o_name,
				'class' => $item->o_class,
				'description' => $item->o_description
			);

		}

		return $newArray;
	}

}