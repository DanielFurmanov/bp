<?php

namespace App\Models;

/**
 * @property int $id
 * @property string $name
 */
class Publisher extends BaseModel {
	public $timestamps = false;


	public function getId(): int {
		return $this->id;
	}

	public function getName(): string {
		return $this->name;
	}

	public function setName(string $name) {
		$this->name = $name;
	}
}
