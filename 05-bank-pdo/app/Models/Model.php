<?php

class Model {
	public static $dbh;
	public static $table;

	public static function getDbh() {
		if (!static::$dbh) {
			// establish connection to db
			static::$dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASSWORD);
		}

		return static::$dbh;
	}

	public static function getAll() {
		$dbh = static::getDbh(); // first time, a new connection will be established and saved in static::$dbh

		// prepare and execute query
		$table = static::$table;
		$query = $dbh->prepare("SELECT * FROM {$table}");
		$query->execute();

		// get result
		$res = $query->fetchAll(PDO::FETCH_CLASS, static::class);

		// return result
		return $res;
	}

	public static function get($id) {
		$dbh = static::getDbh();

		// prepare and execute query
		$table = static::$table;
		$query = $dbh->prepare("SELECT * FROM {$table} WHERE id = :id");
		$query->bindParam('id', $id);
		$query->execute();

		// get result
		$res = $query->fetchObject(static::class);

		// return result
		return $res;
	}
}
