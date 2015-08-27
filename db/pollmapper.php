<?php
/**
 * ownCloud - News
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Alessandro Cosentino <cosenal@gmail.com>
 * @author Bernhard Posselt <dev@bernhard-posselt.com>
 * @copyright Alessandro Cosentino 2012
 * @copyright Bernhard Posselt 2012, 2014
 */

namespace OCA\Poodle\Db;

use OCP\AppFramework\Db\Mapper;
use OCP\IDBConnection;

class PollMapper extends Mapper {

	public function __construct(IDBConnection $db) {
		parent::__construct($db, 'poodle_polls', get_class(new Poll()));
	}

}
