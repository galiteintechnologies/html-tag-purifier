<?php

namespace HtmlTagPurifier\Tests;

use HtmlTagPurifier\HtmlTagFilter;

class HtmlTagFilterTest extends \PHPUnit_Framework_TestCase {
    
    /**
     * @test
     */
    public function purifyTest()
    {
        $htmlTagFilter = new HtmlTagFilter();
        
        $content = "<b>Wow</b>, Very nice weather outside. ";
        $content .= "<h4>Awsome<h4> Let's have a party with the <b>special</b> <span>friend</span>";
        $content .= "<p>Hey Thanks</p> For coming.";
        
        $tags = array("p", "b");
        
        $actualResult = $htmlTagFilter->purify($content, $tags);
        
        $expectedResult = "Wow, Very nice weather outside. <h4>Awsome<h4> Let's have a party with the special <span>friend</span>Hey Thanks For coming.";
        
        $this->assertEquals($expectedResult, $actualResult);
    }
}
