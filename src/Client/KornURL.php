<?php

namespace KornyellowLib\Client;

class KornURL {
	public function __construct(
		private readonly string $baseUrl,
		private array           $queryParams = [],
	) {}
	public static function create(string $baseUrl): self {
		return new self($baseUrl);
	}
	public function __toString(): string {
		$url = $this->baseUrl;
		$queryString = http_build_query($this->queryParams);

		if (!empty($queryString))
			$url .= '?'.$queryString;

		return $url;
	}
	public function add(string $key, string|float|int $value): self {
		$this->queryParams[$key] = $value;

		return $this;
	}
}