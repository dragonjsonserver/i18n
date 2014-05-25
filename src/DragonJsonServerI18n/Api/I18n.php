<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2014 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerI18n
 */

namespace DragonJsonServerI18n\Api;

/**
 * API Klasse zur Ermittlung der verfügbaren Sprachen des Servers
 */
class I18n
{
    use \DragonJsonServer\ServiceManagerTrait;

    /**
     * Methode zur Rückgabe der verfügbaren Sprachen des Servers
     * @return array
     */
    public function getLanguages()
    {
        return $this->getServiceManager()->get('Config')['dragonjsonserveri18n']['languages'];
    }
}
