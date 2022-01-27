<?php

class Employee extends User {
	protected $external;

	public function isExternal() {
		return $this->external == 1;
	}
}
