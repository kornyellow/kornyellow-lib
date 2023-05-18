<?php

namespace KornyellowLib\Server\Query\Builder;

class KornQueryDelete extends KornWhere implements KornQueryBuilder {
	private string $table;

	public function __construct(string $table) {
		$this->table = $table;
	}

	public function build(): string {
		$build = "DELETE FROM `$this->table` ";

		if ($this->where)
			$build .= "WHERE $this->where ";

		return $build;
	}
}
