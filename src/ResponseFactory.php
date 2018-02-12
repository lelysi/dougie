<?php
declare(strict_types=1);

namespace Dougie;

use Dougie\ResponseStrategy\FirstDay;
use Dougie\ResponseStrategy\FirstWeek;
use PHLAK\Config\Config;
use PHLAK\Config\Exceptions\InvalidContextException;

class ResponseFactory
{
	public function getResponse(string $request): string
	{
		$inputWordSet = explode(' ', str_replace(['?', '!'], '', $request));
		$preparePhrase = $this->getResponseStrategy()->prepareResponse($inputWordSet);
		return ucfirst($preparePhrase);
	}


	private function getResponseStrategy(): ResponseStrategy
	{
		// frankly, we don't care if someone set age less than zero
		if ($this->getDougieAge() < 1)
			return new FirstDay();
		else
			return new FirstWeek();
	}


	private function getDougieAge(): int
	{
		$configFile = __DIR__ . '/../config/main.yaml';
		try {
			$config = new Config($configFile);
			return $config->get('dougie_age', 0);
		} catch (InvalidContextException $e) {
			return 0;
		}
	}
}