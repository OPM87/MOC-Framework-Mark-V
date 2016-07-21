<?php
/**
 * This file is part of PHPWord - A pure PHP library for reading and writing
 * word processing documents.
 *
 * PHPWord is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/PHPOffice/PHPWord/contributors.
 *
 * @link        https://github.com/PHPOffice/PHPWord
 * @copyright   2010-2014 PHPWord contributors
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

namespace PhpOffice\PhpWord\Tests\Exception;

use PhpOffice\PhpWord\Exception\CopyFileException;

/**
 * @covers \PhpOffice\PhpWord\Exception\CopyFileException
 * @coversDefaultClass \PhpOffice\PhpWord\Exception\CopyFileException
 */
class CopyFileExceptionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * CopyFileException can be thrown.
     *
     * @covers            ::__construct()
     * @expectedException \PhpOffice\PhpWord\Exception\CopyFileException
     * @test
     */
    public function testCopyFileExceptionCanBeThrown()
    {

        throw new CopyFileException('C:\source\dummy.txt', 'C:\destination\dummy.txt');
    }
}