<?php

class House {
	protected $rooms;
	protected $area;
	protected $address;
	protected $bathrooms;

	public function __construct(int $_rooms, int $_area, string $_address, int $_bathrooms = 1) {
		if ($_rooms > 0) {
			$this->rooms = $_rooms;
		} else {
			throw new Error("Invalid number of rooms.");
		}

		$this->area = $_area;
		$this->address = $_address;
		$this->bathrooms = $_bathrooms;
	}
}
