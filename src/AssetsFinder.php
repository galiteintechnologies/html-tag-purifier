<?php

/*
 * This file is part of the External Link Purifier Package
 *
 * (c) Nexuslink Services
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AssetsFinder\src;

use Symfony\Component\Yaml\Yaml;
use AssetsFinder\src\Services\MediaAssetsFinder;

class AssetsFinder {

    private $pathToYml;

    public function __construct($pathToYml = '') {

        if (!empty($pathToYml)) {
            $this->pathToYml = $pathToYml;
        } else {
            $this->pathToYml = __DIR__ . "/../Resources/config/config.yml";
        }
    }

    /**
     * @param string $content
     * 
     * @return string
     */
    public function FindMedia($content) {
        
        $configArray = Yaml::parse(file_get_contents($this->pathToYml));

        if ($configArray['media_options']['mp3']) {
            $content = MediaAssetsFinder::assetsFilter($content);
        }
        if ($configArray['media_options']['mp4']) {
            $content = MediaAssetsFinder::assetsFilter($content);
        }
        if ($configArray['media_options']['jpg']) {
            $content = MediaAssetsFinder::assetsFilter($content);
        }
        return $content;
    }
    
}
