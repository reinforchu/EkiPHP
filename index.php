<?php
include_once('./ini_set.php');
$Eki = new index();

class index {
	function __construct() {
		include_once('./Eki.php');
		include('./View.php');
	}
}