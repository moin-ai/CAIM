<?php
/**
 * @package   akeebabackup
 * @copyright Copyright (c)2006-2023 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

namespace Akeeba\Component\AkeebaBackup\Administrator\Model\Exceptions;

// Protect from unauthorized access
defined('_JEXEC') || die();

use RuntimeException;

class TransferFatalError extends RuntimeException
{

}
