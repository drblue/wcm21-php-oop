<?php

class User {
	public int $id;
	public string $first_name;
	public string $last_name;

	public static function getAll() {
		// establish connection to db
		$dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASSWORD);

		// prepare and execute query
		$query = $dbh->prepare("SELECT * FROM users");
		$query->execute();

		// get result as User-instances
		$res = $query->fetchAll(PDO::FETCH_CLASS, User::class);

		// return result
		return $res;
	}
}
