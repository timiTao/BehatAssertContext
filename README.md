
[![License](https://poser.pugx.org/timitao/behatassertcontext/license.svg)](https://packagist.org/packages/timitao/behatassertcontext)
[![Latest Stable Version](https://poser.pugx.org/timitao/behatassertcontext/v/stable.svg)](https://packagist.org/packages/timitao/behatassertcontext)
[![Latest Unstable Version](https://poser.pugx.org/timitao/behatassertcontext/v/unstable.svg)](https://packagist.org/packages/timitao/behatassertcontext) 
[![Total Downloads](https://poser.pugx.org/timitao/behatassertcontext/downloads.svg)](https://packagist.org/packages/timitao/behatassertcontext)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/f7fdff89-0a7a-474a-989b-984844fb439d/mini.png)](https://insight.sensiolabs.com/projects/f7fdff89-0a7a-474a-989b-984844fb439d)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/timitao/behatassertcontext/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/timitao/behatassertcontext/?branch=master)


BehatAssertContext
==================

Base context that with phpUnit assert functions.

Suggested to use with [Behat Clipboard](https://github.com/timiTao/BehatClipboard).

## Installing extension

The easiest way to install is by using [Composer](https://getcomposer.org):

```bash
$> curl -sS https://getcomposer.org/installer | php
$> php composer.phar require timitao/behatassertcontext='1.0.*'
```

or composer.json

    "require": {
        "timitao/behatassertcontext": "1.0.*"
    },
    
## Contexts

The are separated due functions

* ``Behat\Context\Assert\ArrayFeatureContext``
* ``Behat\Context\Assert\FileFeatureContext``
* ``Behat\Context\Assert\JsonFeatureContext``
* ``Behat\Context\Assert\ValueFeatureContext``

## Versioning
 
This repository will follow [Semantic Versioning v2.0.0](http://semver.org/spec/v2.0.0.html).

## Contributors

* Tomasz Kunicki [TimiTao](http://github.com/timiTao) [lead developer]
