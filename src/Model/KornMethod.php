<?php

namespace KornyellowLib\Model;

use KornyellowLib\Server\Query\KornQuery;

abstract class KornMethod {
	protected static string $table;

	abstract protected static function processObject(KornQuery $query, bool $isArray = false): KornInstance|array|null;

	abstract public static function browse(string $query, int $limit = 15, int $offset = 0): array;

	abstract public static function add(KornInstance $instance): int;
	abstract public static function remove(KornInstance $instance): void;

	abstract public static function get(int|null $id): KornInstance|null;
	abstract public static function getAll(): array|null;
}