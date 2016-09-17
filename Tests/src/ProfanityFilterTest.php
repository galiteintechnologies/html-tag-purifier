<?php

namespace AbuseKeywordPurifier\Tests;

use AbuseKeywordPurifier\ProfanityFilter;

class ProfanityFilterTest extends \PHPUnit_Framework_TestCase {
    
    /**
     * @test
     */
    public function mediaFinderTest()
    {
        $profanityFilter = new ProfanityFilter();
        $content = "I hate that bitch. It's a abuser";

        $actualResult = $profanityFilter->filterProfanities($content);
        
        $expectedResult = "I hate that *****. It's a ******";
        
        $this->assertEquals($expectedResult, $actualResult);
    }
}
