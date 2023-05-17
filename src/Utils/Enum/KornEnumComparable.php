<?php

namespace KornyellowLib\Utils\Enum;

interface KornEnumComparable {
	public function compareTo(self $subject);
}