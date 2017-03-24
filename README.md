# HTML Tag Purifier
Remove specific html tags from content.

[![Latest Version](https://img.shields.io/packagist/v/nexuslinkservices/html-tag-purifier.svg?style=flat-square)](https://packagist.org/packages/nexuslinkservices/html-tag-purifier)
[![Software License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nexuslinkservices/html-tag-purifier/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/html-tag-purifier/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/nexuslinkservices/html-tag-purifier/badges/build.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/html-tag-purifier/build-status/master)

## Installation

If you use composer, you can add this package by running 

````
composer require galiteintechnologies/html-tag-purifier
````

## Usage

```
<?php

use HtmlTagPurifier\HtmlTagFilter;

$htmlTagFilter = new HtmlTagFilter();
        
$content = "<p>Thanks for coming.</p><br/><p>I have a special plan for picnic</p>. <b>Super <i>Excited!!</i></b>";
$tags = array("i", "p");

$result = $htmlTagFilter->purify($content, $tags);
```

## Output

```
Thanks for coming.<br/>I have a special plan for picnic. <b>Super Excited!!</b>
```

## CONTRIBUTING:

Pull requests are always welcome.
