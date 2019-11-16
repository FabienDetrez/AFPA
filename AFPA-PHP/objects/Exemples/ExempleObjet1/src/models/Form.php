<?php

	namespace App\models;

	class Form {

		/**
		 * Form constructor.
		 */
		public function __construct(  ) {}

		/**
		 * @param        $name
		 * @param        $type
		 * @param        $id
		 * @param        $label
		 * @param string $placeholder
		 *
		 * @return string
		 */
		public function getInputText($name, $type, $id,$label,$placeholder = ""){
			return '<div class="form-group">
    <label for="'.$id.'">'.$label.'</label>
    <input type="'.$type.'" class="form-control" id="'.$id.'" name="'.$name.'" placeholder="'.$placeholder.'">
        </div>';
		}

		/**
		 * @param        $type
		 * @param        $value
		 * @param        $class
		 * @param string $id
		 *
		 * @return string
		 */
		public function getButton($type, $value, $class, $id=""){
			return '<button type="'.$type.'" id="'.$id.'" class="'.$class.'">'.$value.'</button>';
		}
	}
