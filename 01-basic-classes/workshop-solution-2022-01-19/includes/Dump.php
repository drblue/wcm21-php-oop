<?php

class Dump {
	public static function pre($var) {
		echo "<pre>";
		var_dump($var);
		echo "</pre>";
	}
}
