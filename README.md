# abuse-keyword-purifier
Replace or remove abuse keywords from content.

[![Latest Version](https://img.shields.io/packagist/v/nexuslinkservices/abuse-keyword-purifier.svg?style=flat-square)](https://packagist.org/packages/nexuslinkservices/abuse-keyword-purifier)
[![Software License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nexuslinkservices/abuse-keyword-purifier/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/abuse-keyword-purifier/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/nexuslinkservices/abuse-keyword-purifier/badges/build.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/abuse-keyword-purifier/build-status/master)

## Usage

Create configuration file with bad words list and character with which you want to replace bad words. For ex.

```
profanities:
    replace_with: '*'
    bad_words: ['abuser', 'bitch', 'bitcher']
```

If you want to remove bad words from content then just leave replace_with field with balnk value for ex. replace_with: ''

If you do not create configuration file then it will use provided by package which includes all the bad words list.


Example usage:

```
<?php
use AbuseKeywordPurifier\ProfanityFilter;

$profanityFilter = new ProfanityFilter();

$content = "I do not want to use such bad word like bastard. Another bad word I want to remove is bitch.";
$result = $profanityFilter->filterProfanities($content);
```

## Output on PHP

```
I do not want to use such bad word like *******. Another bad word I want to remove is *****.
```

## CONTRIBUTING:

Pull requests are always welcome.