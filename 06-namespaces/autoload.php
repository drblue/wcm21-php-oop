<?php

// register an autoloader
spl_autoload_register(function($class) {
	// this code will be executed every time a request for a class that isn't yet loaded is made
	echo "Want to load '{$class}'<br>";   // App\Content\Post
	$parts = explode("\\", $class);   // ['App', 'Content', 'Post']
	$classname = array_pop($parts);   // 'Post'        $parts = ['App', 'Content']

	$classpath = implode("/", $parts);   // "App/Content"

	switch ($classpath) {
		case "App/Content":
			require("includes/content/{$classname}.php");
			break;

		case "App/Users":
			require("includes/users/{$classname}.php");
			break;
	}
});
