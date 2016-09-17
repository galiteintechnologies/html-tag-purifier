<?php

namespace AbuseKeywordPurifier\Tests\src\Services;

use AbuseKeywordPurifier\src\Services\ProfanityWordPurifier;

class ProfanityWordPurifierTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function contentFilterTest() 
    {
        $whiteList = ['bitch', 'crap'];
        $replaceWith = '*';
        $content = "I hate that bitch. It's a crap";
        
        $actualResult = ProfanityWordPurifier::contentFilter($content, $whiteList, $replaceWith);
        $expectedResult = "I hate that *****. It's a ****";
        
        $this->assertEquals($expectedResult, $actualResult);
    }

}
