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
		return (new ResponseFactory())->getResponse($request);
	}
}