<?php
declare(strict_types=1);

namespace Test;

use Dougie\DougieMind;
use PHPUnit\Framework\TestCase;

class DougieMindTest extends TestCase
{
	/**
	 * @throws \Exception
	 */
	public function testGreetings(): void
	{
		$dougie = new DougieMind();
		$this->assertEquals(
			'Hello-o-o!',
			$dougie->greeting()
		);
	}


	/**
	 * @dataProvider requestDataProvider
	 *
	 * @param string $request
	 * @param string $response
	 * @throws \Exception
	 */
	public function testResponse(string $request, string $response): void
	{
		$dougie = new DougieMind();
		$this->assertEquals(
			$response,
			$dougie->response($request)
		);
	}


	public function requestDataProvider(): array
	{
		return [
			'coffee question'	=> ['Dougie, do you like coffee?', 'Like coffee'],
			'just question'		=> ['Did you prepare the report?', 'The report'],
			'not a question'	=> ['You look great today!', 'Great today'],
			'silence'			=> ['', ''],
		];
	}
}