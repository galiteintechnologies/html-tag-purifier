<?php

namespace AssetsFinder\Tests;

use AssetsFinder\MediaParser;

class MediaParserTest extends \PHPUnit_Framework_TestCase {
    
    /**
     * @test
     */
    public function mediaFinderTest()
    {
        $mediaParser = new MediaParser();
        $content = "this is a example first file http://www.mywebsite.com/sample.mp3 and second file is https://www.mywebsite.com/sample.mp4. This is the image link <img src='http://www.mywebsite.com/assets/images/testimage.jpg' alt='test image' title='test image'> and second image <img src='http://www.mywebsite.com/assets/images/testimage2.png' alt='test png image' title='test png image'>";
        $content .= "this is a example first file http://www.mywebsite.com/sample33.mp3 and second file is https://www.mywebsite.com/sample324.mp4. This is the image link <img src='http://www.mywebsite.com/assets/images/testimage234234.jpg' alt='test image' title='test image'>";

        $actualResult = $mediaParser->FindMedia($content);
        
        $expectedResult = array('mp3' => array(
            '0' => 'http://www.mywebsite.com/sample.mp3',
            '1' => 'http://www.mywebsite.com/sample33.mp3'
        ),
        'mp4' => array(
            '0' => 'https://www.mywebsite.com/sample.mp4',
            '1' => 'https://www.mywebsite.com/sample324.mp4'
        ),
        'jpg' => array(
            '0' => 'http://www.mywebsite.com/assets/images/testimage.jpg',
            '1' => 'http://www.mywebsite.com/assets/images/testimage234234.jpg'
        ));
        
        $this->assertEquals($expectedResult, $actualResult);
    }
}
