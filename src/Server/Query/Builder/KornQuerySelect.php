<?php

namespace KornyellowLib\Server\Query\Builder;

class KornQuerySelect extends KornWhere implements KornQueryBuilder {
	private string $table;

	private string|null $order = null;
	private bool $isDescending = false;
	private int|null $limit = null;
	private int|null $offset = null;

	public function __construct(string $table) {
		$this->table = $table;
	}

	public function sortByColumn(string $column): void {
		$this->order = $column;
	}
	public function sortDescending(bool $bool = true): void {
		$this->isDescending = $bool;
	}
	public function limit(int $limit): void {
		$this->limit = $limit;
	}
	public function offset(int $offset): void {
		$this->offset = $offset;
	}
	public function build(): string {
		$build = "SELECT * FROM `$this->table` ";

		if ($this->where)
			$build .= "WHERE $this->where ";

		if ($this->order)
			$build .= "ORDER BY $this->table.$this->order ";

		if ($this->isDescending)
			$build .= "DESC ";


		if ($this->limit > 0) {
			$build .= "LIMIT ";
			if ($this->offset == 0)
				$build .= $this->limit;
			else if ($this->offset > 0)
				$build .= "$this->offset, $this->limit";
		}

		return $build;
	}
}
