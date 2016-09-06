<?php

/*
 * This file is part of the Assets Finder Package
 *
 * (c) Nexuslink Services
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AssetsFinder;

use Symfony\Component\Yaml\Yaml;
use AssetsFinder\src\Services\MediaAssetsFinder;

class MediaParser {

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
    public function FindMedia($content) {
        
        $configArray = Yaml::parse(file_get_contents($this->pathToYml));
        $mediaList = array();

        if ($configArray['media_options']['mp3']) {
            $mediaList['mp3'] = MediaAssetsFinder::assetsFilter($content, 'mp3');
        }
        if ($configArray['media_options']['mp4']) {
            $mediaList['mp4'] = MediaAssetsFinder::assetsFilter($content, 'mp4');
        }
        if ($configArray['media_options']['jpg']) {
            $mediaList['jpg'] = MediaAssetsFinder::assetsFilter($content, 'jpg');
        }
        
        return $mediaList;
    }
    
}
