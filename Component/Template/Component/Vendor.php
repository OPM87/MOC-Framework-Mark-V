<?php
namespace MOC\V\Component\Template\Component;

use MOC\V\Component\Template\Component\Bridge\IBridgeInterface;

/**
 * Interface IVendorInterface
 *
 * @package MOC\V\Component\Template\Component
 */
interface IVendorInterface
{

    /**
     * @return IBridgeInterface
     */
    public function getBridgeInterface();

    /**
     * @param IBridgeInterface $BridgeInterface
     *
     * @return IVendorInterface
     */
    public function setBridgeInterface( IBridgeInterface $BridgeInterface );
}


/**
 * Class Vendor
 *
 * @package MOC\V\Component\Template\Component
 */
class Vendor implements IVendorInterface
{

    /** @var IBridgeInterface $BridgeInterface */
    private $BridgeInterface = null;

    /**
     * @param IBridgeInterface $BridgeInterface
     */
    function __construct( IBridgeInterface $BridgeInterface )
    {

        $this->setBridgeInterface( $BridgeInterface );
    }

    /**
     * @return IBridgeInterface
     */
    public function getBridgeInterface()
    {

        return $this->BridgeInterface;
    }

    /**
     * @param IBridgeInterface $BridgeInterface
     *
     * @return IVendorInterface
     */
    public function setBridgeInterface( IBridgeInterface $BridgeInterface )
    {

        $this->BridgeInterface = $BridgeInterface;
        return $this;
    }
}
