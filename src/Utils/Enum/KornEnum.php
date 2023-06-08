<?php

namespace KornyellowLib\Utils\Enum;

abstract class KornEnum implements KornEnumComparable {
	protected array $values;

	public function __construct(...$values) {
		$this->values = $values;
	}

	public static function create($value): KornEnum|null {
		$methodName = strtoupper($value);
		if (method_exists(self::class, $methodName))
			return call_user_func([self::class, $methodName]);

		return null;
	}

	public function compareTo(KornEnumComparable $subject): bool {
		return $this->__toString() === $subject->__toString();
	}

	public function __toString() {
		return $this->values[0] ?? "";
	}
}