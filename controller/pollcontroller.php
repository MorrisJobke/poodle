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

namespace OCA\Poodle\Controller;

use OCA\Poodle\Db\Poll;
use OCA\Poodle\Db\PollMapper;
use OCP\IRequest;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\AppFramework\Http\DataResponse;
use OCP\AppFramework\Controller;

class PollController extends Controller {

	private $userId;
	/** @var  PollMapper */
	private $pollMapper;

	public function __construct($AppName, IRequest $request, $UserId, PollMapper $pollMapper){
		parent::__construct($AppName, $request);
		$this->userId = $UserId;
		$this->pollMapper = $pollMapper;
	}

	/**
	 * @param Poll[] $polls
	 */
	protected function serializePolls($polls) {
		$serializedPolls = array_map(function(Poll $poll) {
			return $poll->toArray();
		}, $polls);

		return $serializedPolls;
	}


	/**
	 * Get all polls
	 * @NoAdminRequired
	 */
	public function get() {
		/** @var Poll[] $polls */
		$polls = $this->pollMapper->findAllByUser($this->userId);

		return new DataResponse($this->serializePolls($polls));
	}

	/**
	 * Add a new poll
	 * @NoAdminRequired
	 */
	public function add($name) {
		$poll = new Poll();
		$poll->setName($name);
		$poll->setUserId($this->userId);

		/** @var Poll $poll */
		$poll = $this->pollMapper->insert($poll);

		return new DataResponse($poll->toArray());
	}



}
