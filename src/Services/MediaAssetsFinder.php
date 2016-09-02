<?php

namespace AssetsFinder\src\Services;

class MediaAssetsFinder {

    /**
     * @param string $content
     * 
     * @return string
     */
    public static function assetsFilter($content, $ext) {
        //$content = "this is a example first file http://www.mywebsite.com/sample.mp3 and second file is https://www.mydomain.com/sample.mp4. This is the image link <img src='http://www.mywebsite.com/assets/images/testimage.jpg' alt='test image' title='test image'>";
        $Pattern = '/((https?:\/\/)?(\w+?\.)+?(\w+?\/)+\w+?.('. $ext .'))/im';
        preg_match_all($Pattern,$content,$Matches);
        
        return $Matches[0];
    }
}
