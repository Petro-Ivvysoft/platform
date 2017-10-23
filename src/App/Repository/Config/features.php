<?php

/**
 * Features Config
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Application\Config
 * @copyright  2014 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

return [
	// Determines which features are available in a deployment

	// Post views
	'views' => [
        'data' => true,
		'map' => true,
		'list' => true,
		'chart' => true,
		'timeline' => true,
		'activity' => true,
        'plan' => false,
	],

	// Data sources
	'data-providers' => [
		'smssync' => true,
		'twitter' => true,
		'frontlinesms' => true,
		'email' => true,
		'twilio' => true,
		'nexmo' => true,
	],

	// Client limits
	// Where TRUE is infinite and an integer defines a limit
	'limits' => [
		'posts' => true,
		'forms' => true,
		'admin_users' => true,
	],

	// Private deployments
	'private' => [
		'enabled' => true,
	],

	// Roles
	'roles' => [
		'enabled' => true,
	],

	// Webhooks
	'webhooks' => [
		'enabled' => true,
	],

	// Data import
	'data-import' => [
		'enabled' => true,
	],

	// Post locking
	'post-locking' => [
		'enabled' => TRUE,
	],

	// Post locking
	// Defaults to False, tests will fail if set to TRUE 
	// without complete Redis setup
	// see TODO <docs link>
	'redis' => [
		'enabled' => FALSE,
	],
];