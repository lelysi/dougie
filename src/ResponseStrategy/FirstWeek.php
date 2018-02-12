<?php
declare(strict_types=1);

namespace Dougie\ResponseStrategy;

use Dougie\ResponseStrategy;

class FirstWeek extends ResponseStrategy
{
	public function prepareResponse(array $requestWordList): string
	{
		return implode(' ', array_slice($requestWordList, count($requestWordList)-2));
	}
}