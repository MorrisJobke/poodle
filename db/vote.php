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
 * @method integer getEntryId()
 * @method void setEntryId(integer $value)
 * @method string getVoter()
 * @method void setVoter(string $value)
 * @method integer getVote()
 * @method void setVote(integer $value)
 */
class Vote extends Entity {

	protected $entryId;
	protected $voter;
	protected $vote;

	public function __construct(){
		$this->addType('entryId', 'integer');
		$this->addType('vote', 'integer');
	}
}
