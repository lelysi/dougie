<?php
declare(strict_types=1);

namespace Dougie\ResponseStrategy;

use Dougie\ResponseStrategy;

class FirstDay extends ResponseStrategy
{
	public function prepareResponse(array $requestWordList): string
	{
		return '';
	}
}