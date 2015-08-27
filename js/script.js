/**
 * ownCloud - poodle
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Morris Jobke <hey@morrisjobke.de>
 * @copyright Morris Jobke 2015
 */

(function ($, OC) {

	$(document).ready(function () {


		var templatePoll = Handlebars.compile($("#poll-template").html());
		var pollsUrl = OC.generateUrl('/apps/poodle/polls');

		$.get(pollsUrl).success(function (polls) {
			$('#app-navigation').find('ul')
				.append(
				templatePoll(polls)
			);
		});

		$('#add-poll').click(function () {
			$.post(
				pollsUrl,
				{
					'name': $('#new-poll-name').val()
				}
			).success(function (poll) {

				$('#app-navigation').find('ul')
					.append(
						templatePoll([poll])
					);
				$('#new-poll-name').val('');

			}).error(function () {

				console.log('Something bad happened');

			});
		});




	});

})(jQuery, OC);
