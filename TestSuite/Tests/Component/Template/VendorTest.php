<?php
namespace MOC\V\TestSuite\Tests\Component\Template;

use MOC\V\Component\Template\Component\Vendor;

class VendorTest extends \PHPUnit_Framework_TestCase
{

    /** @runTestsInSeparateProcesses */
    public function testVendor()
    {

        /** @var \MOC\V\Component\Template\Component\Bridge\Bridge $MockBridge */
        $MockBridge = $this->getMockForAbstractClass( 'MOC\V\Component\Template\Component\Bridge\Bridge' );

        $Vendor = new Vendor( $MockBridge );

        $this->assertInstanceOf( 'MOC\V\Component\Template\Component\Bridge\IBridgeInterface',
            $Vendor->getBridgeInterface() );

        $this->assertInstanceOf( 'MOC\V\Component\Template\Component\IVendorInterface',
            $Vendor->setBridgeInterface( $MockBridge ) );
    }
}
