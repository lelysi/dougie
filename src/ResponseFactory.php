<?php
declare(strict_types=1);

namespace Dougie;

use Dougie\ResponseStrategy\FirstWeek;

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
		return new FirstWeek();
	}
}