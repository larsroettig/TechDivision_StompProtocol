<?php
/**
 * \TechDivision\StompProtocol\Utils\ServerCommands
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0;
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category  Library
 * @package   TechDivision_StompProtocol
 * @author    Lars Roettig <l.roettig@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0;
 * @link      https://github.com/techdivision/TechDivision_StompProtocol
 */

namespace TechDivision\StompProtocol\Utils;

/**
 * Holds the available stomp frame server commands.
 *
 * @category  Library
 * @package   TechDivision_StompProtocol
 * @author    Lars Roettig <l.roettig@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0;
 * @link      https://github.com/techdivision/TechDivision_StompProtocol
 *
 * @todo      add const documentation
 */
class ServerCommands
{
    /**
     *
     */
    const CONNECTED = "CONNECTED";

    /**
     *
     */
    const ERROR = "ERROR";

    /**
     *
     */
    const MESSAGE = "MESSAGE";

    /**
     *
     */
    const RECEIPT = "RECEIPT";
}