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
		$dougie = new DougieMind(7);
		$this->assertEquals(
			'Hello-o-o!',
			$dougie->greeting()
		);
	}


	/**
	 * @dataProvider requestDataProvider
	 *
	 * @param int $dougieAge
	 * @param string $request
	 * @param string $response
	 * @throws \Exception
	 */
	public function testResponse(int $dougieAge, string $request, string $response): void
	{
		$dougie = new DougieMind($dougieAge);
		$this->assertEquals(
			$response,
			$dougie->response($request)
		);
	}


	public function requestDataProvider(): array
	{
		return [
			'first day coffee question'	=> [0, 'Dougie, do you like coffee?', ''],
			'coffee question'			=> [3, 'Dougie, do you like coffee?', 'Like coffee'],
			'just question'				=> [4, 'Did you prepare the report?', 'The report'],
			'not a question'			=> [5, 'You look great today!', 'Great today'],
			'silence'					=> [6, '', ''],
		];
	}
}