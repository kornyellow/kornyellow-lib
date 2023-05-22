<?php

namespace KornyellowLib\Model;

abstract class KornInstance {
	protected int|null $id;

	public function getID(): int|null {
		return $this->id;
	}
	public function setID(int|null $id): KornInstance {
		$this->id = $id;

		return $this;
	}
}