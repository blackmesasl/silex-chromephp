<?php

namespace Blackmesa\SilexChromePhp\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Blackmesa\SilexChromePhp\ChromePhp;

/**
 * ChromePhpServiceProvider
 *
 * @author Blackmesa <info@blackmesa.es>
 */
class ChromePhpServiceProvider implements ServiceProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function register(Application $app)
    {
        $app['chromephp'] = $app->share(function () use ($app) {
            return new ChromePhp(
                $app['debug'],
                isset($app['monolog'])?$app['monolog']:null
            );
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(Application $app)
    {
    }
}
