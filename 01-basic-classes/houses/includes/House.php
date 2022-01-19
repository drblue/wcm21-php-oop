<?php

class House {
	protected $rooms;
	protected $area;
	protected $address;
	protected $bathrooms;

	public function __construct($rooms, $area, $address, $bathrooms = 1) {
		$this->rooms = $rooms;
		$this->area = $area;
		$this->address = $address;
		$this->bathrooms = $bathrooms;
	}
}
