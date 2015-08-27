<?php
/**
 * ownCloud - poodle
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Morris Jobke <hey@morrisjobke.de>
 * @copyright Morris Jobke 2015
 */

namespace OCA\Poodle\Db;

use OCP\AppFramework\Db\Entity;

/**
 * @method integer getId()
 * @method void setId(integer $value)
 * @method string getName()
 * @method void setName(string $value)
 * @method string getUserId()
 * @method void setUserId(string $value)
 */
class Poll extends Entity {

	protected $name;
	protected $userId;

}
