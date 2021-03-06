<?php

/**
 * AppserverIo\Stomp\Interfaces\ProtocolHandlerInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author     Lars Roettig <lr@appserver.io>
 * @copyright  2016 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io/appserver
 * @link       https://github.com/stomp/stomp-spec/blob/master/src/stomp-specification-1.1.md
 */
namespace AppserverIo\Stomp\Interfaces;

use AppserverIo\Stomp\Frame;

/**
 * Interface for a stomp protocol handler class.
 *
 * @author     Lars Roettig <lr@appserver.io>
 * @copyright  2016 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io/appserver
 * @link       https://github.com/stomp/stomp-spec/blob/master/src/stomp-specification-1.1.md
 */
interface ProtocolHandlerInterface
{

    /**
     * Inits the protocolHandler handler
     *
     * @return void
     */
    public function init();

    /**
     * Handles a stomp frame.
     *
     * @param \AppserverIo\Stomp\Interfaces\FrameInterface $stompFrame the stomp frame to handle.
     *
     * @return void
     */
    public function handle(Frame $stompFrame);

    /**
     * Returns the response stomp frame.
     *
     * @return \AppserverIo\Stomp\Frame
     */
    public function getResponseStompFrame();

    /**
     * Sets the state from handler to error.
     *
     * @param string $message the message to set for the error frame.
     * @param array  $headers headers to set to error frame.
     *
     * @return mixed
     */
    public function setErrorState($message, $headers);

    /**
     * Returns must the parent handler the connection close
     *
     * @return bool
     */
    public function getMustConnectionClose();
}
