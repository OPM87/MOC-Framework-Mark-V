<?php
namespace MOC\V\TestSuite\Tests\Component\Template;

use MOC\V\Component\Template\Component\Parameter\Repository\FileParameter;
use MOC\V\TestSuite\AbstractTestCase;

/**
 * Class ParameterTest
 *
 * @package MOC\V\TestSuite\Tests\Component\Template
 */
class ParameterTest extends AbstractTestCase
{

    public function testAbstractParameter()
    {

        /** @var \MOC\V\Component\Template\Component\Parameter\Parameter $MockParameter */
        $MockParameter = $this->getMockForAbstractClass('MOC\V\Component\Template\Component\Parameter\Parameter');

        $Parameter = new $MockParameter();
        $this->assertInstanceOf('MOC\V\Component\Template\Component\Parameter\Parameter', $Parameter);

    }

    public function testFileParameter()
    {

        try {
            new FileParameter(null);
        } catch (\Exception $E) {
            $this->assertInstanceOf('MOC\V\Component\Template\Component\Exception\Repository\EmptyFileException', $E);
        }

        $Parameter = new FileParameter(__FILE__);
        $this->assertEquals(__FILE__, $Parameter->getFile());

        try {
            $Parameter->setFile(__DIR__);
        } catch (\Exception $E) {
            $this->assertInstanceOf('MOC\V\Component\Template\Component\Exception\Repository\TypeFileException', $E);
        }

    }

}
