<?php

class Employee extends User {
	protected bool $external;

	public function isExternal(): bool {
		return $this->external;
	}
}
