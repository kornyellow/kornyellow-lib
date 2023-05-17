<?php

namespace KornyellowLib\Server\Query\Builder;

class KornQueryRemove implements KornQueryBuilder {
	private string $table;
	private array $values = [];

	public function __construct(string $table) {
		$this->table = $table;
	}

	public function values(array $values): void {
		$this->values = $values;
	}

	public function build(): string {
		// TODO: Implemewnt Build Remove!
		return "";
	}
}
