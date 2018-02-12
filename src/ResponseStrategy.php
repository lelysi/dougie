<?php
declare(strict_types=1);

namespace Dougie;

abstract class ResponseStrategy
{
	abstract public function prepareResponse(array $requestWordList): string;
}