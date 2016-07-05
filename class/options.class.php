<?php

class options extends global_class {

	protected $option_id;
	protected $option_name;
	protected $option_value;
	protected $autoload;

	public static function identifiant() {
		return "option_id";
	}
}
