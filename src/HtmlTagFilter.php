<?php

/*
 * This file is part of the Html Tag Purifier
 *
 * (c) Nexuslink Services
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HtmlTagPurifier;

class HtmlTagFilter {    

    /**
     * @param string $content     
     * @param array  $tags
     * 
     * @return string
     */
    public function purify($content, $tags) {

        if(!empty($tags)) {
            foreach($tags as $tag)
            {
                $content = preg_replace("/<\\/?" . $tag . "(.|\\s)*?>/", '', $content);
            }    
        }
        
        return $content;
    }
    
}