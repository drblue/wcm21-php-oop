<?php

define('ROOT_PATH', realpath(dirname(__FILE__) . "/../"));

// app config
require(ROOT_PATH . '/config/app.php');

// helpful helpers
require(ROOT_PATH . '/includes/helpers.php');

// autoload
require(ROOT_PATH . '/vendor/autoload.php');
