<?php

namespace KornyellowLib\Server\Query\Builder;

use KornyellowLib\Server\Connection\KornDatabaseConnection;
use KornyellowLib\Utils\KornDateTime;

class KornWhere {
	protected string $where = "";

	public function where(string $column, string|null $value): void {
		$connection = KornDatabaseConnection::getDatabase();
		$this->where .= "(";
		$this->where .= mysqli_real_escape_string($connection, $column);
		$this->where .= "=";
		$this->where .= is_null($value) ? "null" : "\"".mysqli_real_escape_string($connection, $value)."\"";
		$this->where .= ")";
	}
	public function whereOr(): void {
		$this->where .= " OR ";
	}
	public function whereAnd(): void {
		$this->where .= " AND ";
	}
	public function whereRaw(string $where): void {
		$this->where = $where;
	}

	public function whereDateInDay(string $column, KornDateTime $day): void {
		$connection = KornDatabaseConnection::getDatabase();
		$this->where .= "(";
		$this->where .= mysqli_real_escape_string($connection, $column);
		$this->where .= " BETWEEN ";
		$this->where .= "\"".$day->toMySQLDate()." 00:00:00\" AND \"".$day->toMySQLDate()." 23:59:59\"";
		$this->where .= ")";
	}
	public function whereDateInMonth(string $column, KornDateTime $month): void {
		$connection = KornDatabaseConnection::getDatabase();
		$this->where .= "(";
		$this->where .= mysqli_real_escape_string($connection, $column);
		$this->where .= " BETWEEN ";
		$this->where .= "\"".substr($month->toMySQLDate(), 0, 8)."01 00:00:00\" AND CONCAT(LAST_DAY(\"".substr($month->toMySQLDate(), 0, 8)."01\"), \" 23:59:59\")";
		$this->where .= ")";
	}
	public function whereDateInYear(string $column, KornDateTime $year): void {
		$connection = KornDatabaseConnection::getDatabase();
		$this->where .= "(";
		$this->where .= mysqli_real_escape_string($connection, $column);
		$this->where .= " BETWEEN ";
		$this->where .= "\"".substr($year->toMySQLDate(), 0, 5)."01-01 00:00:00\" AND CONCAT(LAST_DAY(\"".substr($year->toMySQLDate(), 0, 5)."12-01\"), \" 23:59:59\")";
		$this->where .= ")";
	}
}