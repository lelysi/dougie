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
		$inputWordSet = explode(' ', $request);
		return implode(' ', array_slice($inputWordSet, 0, 2));
	}
}