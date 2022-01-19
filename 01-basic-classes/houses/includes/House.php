<?php

class House {
	protected $rooms;
	protected $area;
	protected $address;
	protected $bathrooms;

	public function __construct(int $_rooms, int $_area, string $_address, int $_bathrooms = 1) {
		$this->setRooms($_rooms);
		$this->setArea($_area);
		$this->setAddress($_address);
		$this->setBathrooms($_bathrooms);
	}

	protected function setRooms(int $_rooms) {
		if ($_rooms < 1) {
			throw new Error("Invalid number of rooms.");
		}

		$this->rooms = $_rooms;
	}

	protected function setArea(int $_area) {
		if ($_area < 1) {
			throw new Error("Invalid area.");
		}

		$this->area = $_area;
	}

	protected function setAddress(int $_address) {
		if (empty($_address)) {
			throw new Error("Invalid address.");
		}

		$this->address = $_address;
	}

	protected function setBathrooms(int $_bathrooms) {
		if ($_bathrooms < 1) {
			throw new Error("Invalid number of bathrooms.");
		}

		$this->bathrooms = $_bathrooms;
	}

	public function addRooms(int $roomsToAdd) {
		if ($roomsToAdd < 1) {
			throw new Error("Can't add less than 1 room.");
		}

		$this->setRooms($this->rooms + $roomsToAdd);
	}
}
