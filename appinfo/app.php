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

namespace OCA\Poodle\AppInfo;

use OCP\AppFramework\App;
use OCP\IL10N;
use OCP\IURLGenerator;

$app = new App('poodle');
$container = $app->getContainer();

$container->query('OCP\INavigationManager')->add(function () use ($container) {
	/** @var IURLGenerator $urlGenerator */
	$urlGenerator = $container->query('OCP\IURLGenerator');
	/** @var IL10N $l10n */
	$l10n = $container->query('OCP\IL10N');
	return [
		// the string under which your app will be referenced in owncloud
		'id' => 'poodle',

		// sorting weight for the navigation. The higher the number, the higher
		// will it be listed in the navigation
		'order' => 10,

		// the route that will be shown on startup
		'href' => $urlGenerator->linkToRoute('poodle.page.index'),

		// the icon that will be shown in the navigation
		// this file needs to exist in img/
		'icon' => $urlGenerator->imagePath('poodle', 'app.svg'),

		// the title of your application. This will be used in the
		// navigation or on the settings page of your app
		'name' => $l10n->t('Poodle'),
	];
});
