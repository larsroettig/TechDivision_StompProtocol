<?php
/**
 * AppserverIo\Appserver\Stomp\Interfaces\StompProtocolHandlerInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   AppserverIo
 * @package    Appserver
 * @subpackage Stomp
 * @author     Lars Roettig <l.roettig@techdivision.com>
 * @copyright  2014 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io/appserver
 * @link       https://github.com/stomp/stomp-spec/blob/master/src/stomp-specification-1.1.md
 */
namespace AppserverIo\Appserver\Stomp\Interfaces;

use AppserverIo\Appserver\Stomp\StompFrame;

/**
 * Interface for a stomp protocol handler class.
 *
 * @category   AppserverIo
 * @package    Appserver
 * @subpackage Stomp
 * @author     Lars Roettig <l.roettig@techdivision.com>
 * @copyright  2014 TechDivision GmbH <info@techdivision.com>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io/appserver
 * @link       https://github.com/stomp/stomp-spec/blob/master/src/stomp-specification-1.1.md
 */
interface StompProtocolHandlerInterface
{

    /**
     * Handles a stomp frame.
     *
     * @param \AppserverIo\Appserver\Stomp\StompFrame $stompFrame
     *
     * @return void
     */
    public function handle(StompFrame $stompFrame);


    /**
     * Returns the response stomp frame.
     *
     * @return \AppserverIo\Appserver\Stomp\StompFrame
     */
    public function getResponseStompFrame();

    /**
     * Sets the state from handler to error.
     *
     * @param string $message
     * @param array  $headers
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