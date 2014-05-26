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
        'languages' => [
            'de' => 'Deutsch',
            'en' => 'English',
        ],
    ],
    'dragonjsonserver' => [
        'apiclasses' => [
            '\DragonJsonServerI18n\Api\I18n' => 'I18n',
        ],
    ],
	'service_manager' => [
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
	],
    'translator' => [
        'locale' => [null, 'en'],
        'translation_file_patterns' => [],
    ],
];
