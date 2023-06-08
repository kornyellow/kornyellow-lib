<?php

namespace KornyellowLib\Utils;

class KornString {
	public static function generateRandomString(int $length): string {
		$characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$charactersLength = strlen($characters);

		$randomString = "";
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}

		return $randomString;
	}
	public static function cleanStringNullable(string|null $input): string|null {
		if (is_null($input))
			return null;
		$cleanedInput = self::cleanString($input);

		return $cleanedInput === "" ? null : $cleanedInput;
	}
	public static function cleanString(string $input): string {
		$input = trim($input);
		$input = preg_replace("/\s+/", " ", $input);
		$input = htmlspecialchars($input, ENT_QUOTES | ENT_HTML5, "UTF-8");
		$input = str_replace("'", "''", $input);
		$input = str_replace("\\", "\\\\", $input);
		$input = preg_replace("/<script\b[^>]*>(.*?)<\/script>/is", "", $input);

		return preg_replace("/<[^>]*>/", "", $input);
	}

	public static function isValidUsername(string $input): bool {
		return preg_match('/^[a-zA-Z0-9_]+$/', $input) === 1;
	}
	public static function isDigits(string $input): bool {
		return ctype_digit($input);
	}

	public static function trim(string|null $input, int $length): string|null {
		if (is_null($input))
			return null;

		return mb_substr($input, 0, $length);
	}

	public static function onlyDigits(string|null $input): string|null {
		if (is_null($input))
			return null;

		return preg_replace('/\D/', '', $input);
	}
}