<?php
/**
 * ownCloud - myapp
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Justin <jlacerte@solutionsjl.net>
 * @copyright Justin 2018
 */

/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> OCA\MyApp\Controller\PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */


namespace OCA\ownnotes\AppInfo;


return [
    'routes' => [
	   ['name' => 'page#index', 'url' => '/', 'verb' => 'GET'],
	   ['name' => 'page#do_echo', 'url' => '/echo', 'verb' => 'POST'],
    ]
];
