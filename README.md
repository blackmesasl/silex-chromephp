#SilexChromePhp

[![Latest Stable Version](https://poser.pugx.org/blackmesasl/silex-chromephp/v/stable.png)](https://packagist.org/packages/blackmesasl/silex-chromephp) [![Total Downloads](https://poser.pugx.org/blackmesasl/silex-chromephp/downloads.png)](https://packagist.org/packages/blackmesasl/silex-chromephp) [![Latest Unstable Version](https://poser.pugx.org/blackmesasl/silex-chromephp/v/unstable.png)](https://packagist.org/packages/blackmesasl/silex-chromephp) [![License](https://poser.pugx.org/blackmesasl/silex-chromephp/license.png)](https://packagist.org/packages/blackmesasl/silex-chromephp)

SilexChromePhp is a wrapper around `ccampbell/chromephp` (https://github.com/ccampbell/chromephp) library that allows to debug PHP applications with the Chrome Logger Google Chrome extension.

The ChromePhpServiceProvider easily integrate ChromePhp into Silex Micro Framework (http://silex.sensiolabs.org)

##Installation

###SilexChromePhp and ChromePhp

Add `blackmesasl/silex-chromephp` to your dependencies.

Via command line:

`php composer.phar require "blackmesasl/silex-chromephp":"dev-master"`

or adding the following line to your `composer.json` file:
 
`"blackmesasl/silex-chromephp": "dev-master"`

and running `php composer.phar update`

###Chrome Logger Extension

To be able to see the debug messages you send from your server side code you need to install the Chrome Logger Extension from the [Chrome Web Store](https://chrome.google.com/webstore/detail/chromephp/noaneddfkdjfnfdakjjmocngnfkfehhd).

Once you have the service provider on you Silex project and the extension installed on your Chrome Browser just enable the extension to start getting your debugging information on the _console_ panel of the Developer Tools.

For more information take a look of [Chrome Logger website](http://www.chromelogger.com).

##Usage

Import the namespace and register the ServiceProvider on your Silex application:

```php
use Blackmesa\SilexChromePhp\Provider\ChromePhpServiceProvider;

$app->register(new ChromePhpServiceProvider());
```
Now you can access to `$app['chromephp']` object and call it's methods.

###Available methods
- `info`
- `warn`
- `error`
- `log`
- `table`
- `group`
- `groupCollapsed`
- `groupEnd`

```php
$app->get('/myroute', function() use ($app) {
    try
    {
        $app['chromephp']->info('Let\'s render the view!'); 
        return $app['twig']->render('mytemplate.html.twig');
    }
    catch(Exception $e)
    {
        $app['chromephp']->error($e);
        throw $e;
    }
    $app['chromephp']->warn('This is impossible!!!');
});
```

The ChromePhpServiceProvder make use of `$app['debug']` flag to decide whether or not to send de info to the browser.

##See also

- [Silex Micro Framework](http://silex.sensiolabs.org)
- [Chrome Logger extension](http://www.chromelogger.com)
- [ChromePHP](https://github.com/ccampbell/chromephp)
