<?php

// init dbh (database handle)
function db_init() {
	$dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASSWORD);
	return $dbh;
}
