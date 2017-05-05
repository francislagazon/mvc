<?php

class View {

	function __construct() {
		//echo 'this is the view';
	}

	public function render($name, $noInclude = false)
	{
		if ($noInclude == true) {
			require 'app/Views/' . $name . '.php';	
		}
		else {
			require 'app/Views/header.php';
			require 'app/Views/' . $name . '.php';
			require 'app/Views/footer.php';	
		}
	}

}