# assets-finder
Extension to get array of media assets like MP3, MP4 and JPG.

[![Latest Version](https://img.shields.io/packagist/v/nexuslinkservices/assets-finder.svg?style=flat-square)](https://packagist.org/packages/nexuslinkservices/assets-finder)
[![Software License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nexuslinkservices/assets-finder/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/assets-finder/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/nexuslinkservices/assets-finder/badges/build.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/assets-finder/build-status/master)

## Usage

Define and set value of media parameters in configuration yml file like this.

```
media_options:
    mp3: true
    mp4: true
    jpg: true
```

You can enable or disable parse media options with true/false value.

If you do not set media options in your configuration file then it will take true values for all options by default.

Example usage:

```
<?php
use AssetsFinder\MediaParser;

$assetsFinder = new MediaParser;

$content = "First sample file http://www.mywebsite.com/firstsample.mp3 and second file is https://www.mywebsite.com/secondsample.mp4. This is the image link <img src='http://www.mywebsite.com/assets/images/sampleimage.jpg' alt='sample image' title='sample image'> and second image <img src='http://www.mywebsite.com/assets/images/sampleimage2.png' alt='test png image' title='test png image'>";
$result = $assetsFinder->FindMedia($content);
```

## Output on PHP

```
Array
(
    [mp3] => Array
        (
            [0] => http://www.mywebsite.com/firstsample.mp3
        )

    [mp4] => Array
        (
            [0] => https://www.mywebsite.com/secondsample.mp4
        )

    [jpg] => Array
        (
            [0] => http://www.mywebsite.com/assets/images/sampleimage.jpg
        )

)
```

## CONTRIBUTING:

Pull requests are always welcome.

