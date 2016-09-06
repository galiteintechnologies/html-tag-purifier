<?php

namespace AssetsFinder\Tests\src\Services;

use AssetsFinder\src\Services\MediaAssetsFinder;

class MediaAssetsFinderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function assetsMediaFilterTest() 
    {
        $content = "this is a example first file http://www.mywebsite.com/sample.mp3 and second file is https://www.mywebsite.com/sample.mp4. This is the image link <img src='http://www.mywebsite.com/assets/images/testimage.jpg' alt='test image' title='test image'> and second image <img src='http://www.mywebsite.com/assets/images/testimage2.png' alt='test png image' title='test png image'>";
        
        $actualResult = MediaAssetsFinder::assetsFilter($content, 'mp4');
        $expectedResult = array('mp4' => array('0' => 'https://www.mywebsite.com/sample.mp4'));
        
        $this->assertEquals($expectedResult, $actualResult);
    }

}
