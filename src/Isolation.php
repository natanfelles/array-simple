<?php declare(strict_types=1);
/*
 * This file is part of The Framework Helpers Library.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Framework\Helpers;

/**
 * Class Isolation.
 */
class Isolation
{
	/**
	 * Requires a file in a sub-isolated scope.
	 *
	 * @param string $__filename The file to be required
	 * @param array<int|string,mixed> $__data Data to be extracted as variables
	 *
	 * @return mixed The return of the require
	 */
	public static function require(string $__filename, array $__data = []) : mixed
	{
		if ($__data) {
			\extract($__data, \EXTR_SKIP);
		}
		return require $__filename;
	}
}