<?php
declare(strict_types=1);

namespace Dougie;

class DougieMind 
{
	public function greeting(): string
	{
		return 'Hello-o-o!';
	}


	public function response(string $request): string
	{
		$inputWordSet = explode(' ', str_replace(['?', '!'], '', $request));
		$preparePhrase = implode(' ', array_slice($inputWordSet, count($inputWordSet)-2));
		return ucfirst($preparePhrase);
	}
}