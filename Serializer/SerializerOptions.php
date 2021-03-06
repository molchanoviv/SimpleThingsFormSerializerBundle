<?php
/**
 * SimpleThings FormSerializerBundle
 *
 * LICENSE
 *
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to kontakt@beberlei.de so I can send you a copy immediately.
 */

namespace SimpleThings\FormSerializerBundle\Serializer;

use SimpleThings\FormSerializerBundle\Serializer\NamingStrategy\CamelCaseStrategy;
use SimpleThings\FormSerializerBundle\Serializer\NamingStrategy\NamingStrategy;

class SerializerOptions
{
    /**
     * @var bool
     */
    private $includeRootInJson = false;

    /**
     * @var string
     */
    private $applicationXmlRootName;

    /**
     * @var NamingStrategy
     */
    private $namingStrategy;

    /**
     * @return bool
     */
    public function getIncludeRootInJson()
    {
        return $this->includeRootInJson;
    }

    /**
     * @param boolean $includeRootInJson
     */
    public function setIncludeRootInJson($includeRootInJson)
    {
        $this->includeRootInJson = $includeRootInJson;
    }

    /**
     * @return string
     */
    public function getApplicationXmlRootName()
    {
        return $this->applicationXmlRootName;
    }

    /**
     * @param $applicationXmlRootName
     */
    public function setApplicationXmlRootName($applicationXmlRootName)
    {
        $this->applicationXmlRootName = $applicationXmlRootName;
    }

    /**
     * @return CamelCaseStrategy|NamingStrategy
     */
    public function getNamingStrategy()
    {
        if ($this->namingStrategy === null) {
            $this->namingStrategy = new CamelCaseStrategy();
        }
        return $this->namingStrategy;
    }

    /**
     * @param NamingStrategy $namingStrategy
     */
    public function setNamingStrategy(NamingStrategy $namingStrategy)
    {
        $this->namingStrategy = $namingStrategy;
    }
}



