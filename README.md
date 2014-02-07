SilexChromePhp
===============

[![Latest Stable Version](https://poser.pugx.org/blackmesasl/silex-chromephp/v/stable.png)](https://packagist.org/packages/blackmesasl/silex-chromephp) [![Total Downloads](https://poser.pugx.org/blackmesasl/silex-chromephp/downloads.png)](https://packagist.org/packages/blackmesasl/silex-chromephp) [![Latest Unstable Version](https://poser.pugx.org/blackmesasl/silex-chromephp/v/unstable.png)](https://packagist.org/packages/blackmesasl/silex-chromephp) [![License](https://poser.pugx.org/blackmesasl/silex-chromephp/license.png)](https://packagist.org/packages/blackmesasl/silex-chromephp)

SilexChromePhp is a wrapper around `ccampbell/chromephp` (https://github.com/ccampbell/chromephp) library that allows to debug PHP applications with the Chrome Logger Google Chrome extension.

The ChromePhpServiceProvider easily integrate ChromePhp into Silex Micro Framework (http://silex.sensiolabs.org)

##Installation

Add `blackmesasl/silex-chromephp` to your dependencies.

Via command line:
`php composer.phar require "blackmesasl/silex-chromephp":"dev-master"`

or adding the following line to your `composer.json` file:
 
`"blackmesasl/silex-chromephp": "dev-master"`

[REFERENCE TO CHROME EXTENSION]

##Usage

Import the namespace and register the ServiceProvider on your Silex application:

```php
use Blackmesa\SilexChromePhp\Provider\ChromePhpServiceProvider;

$app->register(new ChromePhpServiceProvider());
```

[LOGGING METHODS]

[ENABLED ONLY WHEN DEBUG]

##See also

Silex Micro Framework -> http://silex.sensiolabs.org
Chrome Logger extension -> http://www.chromelogger.com/
ChromePHP -> https://github.com/ccampbell/chromephp
