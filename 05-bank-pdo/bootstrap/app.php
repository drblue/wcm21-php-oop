<?php

define('ROOT_PATH', realpath(dirname(__FILE__) . "/../"));

// app config
require(ROOT_PATH . '/config/app.php');

// helpful helpers
require(ROOT_PATH . '/includes/helpers.php');

// models
require(ROOT_PATH . '/app/Models/index.php');
