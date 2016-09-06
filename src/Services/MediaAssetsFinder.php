<?php

namespace AssetsFinder\src\Services;

class MediaAssetsFinder {

    /**
     * @param string $content
     * 
     * @return string
     */
    public static function assetsFilter($content, $ext) {                
        $Pattern = '/((https?:\/\/)?(\w+?\.)+?(\w+?\/)+\w+?.('.$ext.'))/im';
        preg_match_all($Pattern, $content, $Matches);
        
        return $Matches[0];
    }
}
