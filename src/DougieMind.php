<?php
declare(strict_types=1);

namespace Dougie;

class DougieMind
{
	private $age;


	public function __construct(int $age)
	{
		$this->age = $age;
	}


	public function greeting(): string
	{
		return 'Hello-o-o!';
	}


	public function response(string $request): string
	{
		return (new ResponseFactory())->getResponse($this->age, $request);
	}
}