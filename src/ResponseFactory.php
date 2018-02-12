<?php
declare(strict_types=1);

namespace Dougie;

use Dougie\ResponseStrategy\FirstDay;
use Dougie\ResponseStrategy\FirstWeek;

class ResponseFactory
{
	public function getResponse(int $dougieAge, string $request): string
	{
		$inputWordSet = explode(' ', str_replace(['?', '!'], '', $request));
		$preparePhrase = $this->getResponseStrategy($dougieAge)->prepareResponse($inputWordSet);
		return ucfirst($preparePhrase);
	}


	private function getResponseStrategy(int $dougieAge): ResponseStrategy
	{
		// frankly, we don't care if someone set age less than zero
		if ($dougieAge < 1)
			return new FirstDay();
		else
			return new FirstWeek();
	}
}