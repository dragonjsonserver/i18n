<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2014 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerI18n
 */

/**
 * @return array
 */
return [
    'dragonjsonserveri18n' => [
        'languages' => [],
        'fallback' => '',
    ],
	'service_manager' => [
		'invokables' => [
            '\DragonJsonServerI18n\Service\I18n' => '\DragonJsonServerI18n\Service\I18n',
		],
	],
];
