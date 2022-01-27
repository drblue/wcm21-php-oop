<?php

function dump($obj, $title = null) {
	echo "<pre>";
	if ($title) {
		echo "<h2>{$title}</h2>";
	}
	var_dump($obj);
	echo "</pre>";
	echo "<br>";
}
