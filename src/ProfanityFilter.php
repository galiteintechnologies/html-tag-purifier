<?php

/*
 * This file is part of the Assets Finder Package
 *
 * (c) Nexuslink Services
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AbuseKeywordPurifier;

use Symfony\Component\Yaml\Yaml;
use AbuseKeywordPurifier\src\Services\ProfanityWordPurifier;

class ProfanityFilter {

    private $pathToYml;

    public function __construct($pathToYml = '') {

        if (!empty($pathToYml)) {
            $this->pathToYml = $pathToYml;
        } else {
            $this->pathToYml = __DIR__."/../Resources/config/config.yml";
        }
    }

    /**
     * @param string $content
     * 
     * @return string
     */
    public function filterProfanities($content) {
        
        $configArray = Yaml::parse(file_get_contents($this->pathToYml));
        $whiteList = $configArray['profanities']['bad_words'];
        $replaceWith = $configArray['profanities']['replace_with'];
        
        if(!empty($content) && !empty($whiteList)) {
            $content = ProfanityWordPurifier::contentFilter($content, $whiteList, $replaceWith);
        }
        
        return $content;
    }
    
}
