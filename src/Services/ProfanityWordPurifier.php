<?php

namespace AbuseKeywordPurifier\src\Services;

class ProfanityWordPurifier {

    /**
     * @param string $content
     * @param array $whiteList
     * @param string $replaceWith
     * 
     * @return string
     */
    public static function contentFilter($content, $whiteList, $replaceWith) {
        $replace = array();
        $replace['a'] = '(a|a\.|a\-|4|@|Á|á|À|Â|à|Â|â|Ä|ä|Ã|ã|Å|å|α|Δ|Λ|λ)';
        $replace['b'] = '(b|b\.|b\-|8|\|3|ß|Β|β)';
        $replace['c'] = '(c|c\.|c\-|Ç|ç|¢|€|<|\(|{|©)';
        $replace['d'] = '(d|d\.|d\-|&part;|\|\)|Þ|þ|Ð|ð)';
        $replace['e'] = '(e|e\.|e\-|3|€|È|è|É|é|Ê|ê|∑)';
        $replace['f'] = '(f|f\.|f\-|ƒ)';
        $replace['g'] = '(g|g\.|g\-|6|9)';
        $replace['h'] = '(h|h\.|h\-|Η)';
        $replace['i'] = '(i|i\.|i\-|!|\||\]\[|]|1|∫|Ì|Í|Î|Ï|ì|í|î|ï)';
        $replace['j'] = '(j|j\.|j\-)';
        $replace['k'] = '(k|k\.|k\-|Κ|κ)';
        $replace['l'] = '(l|1\.|l\-|!|\||\]\[|]|£|∫|Ì|Í|Î|Ï)';
        $replace['m'] = '(m|m\.|m\-)';
        $replace['n'] = '(n|n\.|n\-|η|Ν|Π)';
        $replace['o'] = '(o|o\.|o\-|0|Ο|ο|Φ|¤|°|ø)';
        $replace['p'] = '(p|p\.|p\-|ρ|Ρ|¶|þ)';
        $replace['q'] = '(q|q\.|q\-)';
        $replace['r'] = '(r|r\.|r\-|®)';
        $replace['s'] = '(s|s\.|s\-|5|\$|§)';
        $replace['t'] = '(t|t\.|t\-|Τ|τ)';
        $replace['u'] = '(u|u\.|u\-|υ|µ)';
        $replace['v'] = '(v|v\.|v\-|υ|ν)';
        $replace['w'] = '(w|w\.|w\-|ω|ψ|Ψ)';
        $replace['x'] = '(x|x\.|x\-|Χ|χ)';
        $replace['y'] = '(y|y\.|y\-|¥|γ|ÿ|ý|Ÿ|Ý)';
        $replace['z'] = '(z|z\.|z\-|Ζ)';
        
        for ($x = 0; $x < count($whiteList); $x++) {
            $replacement[$x] = str_repeat($replaceWith, strlen($whiteList[$x]));
            $whiteList[$x] = '/' . str_ireplace(array_keys($replace), array_values($replace), $whiteList[$x]) . '/i';
        }
        $cleanContent = preg_replace($whiteList, $replacement, $content);
        
        return $cleanContent;
    }
}
