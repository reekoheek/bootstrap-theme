<?php

namespace ROH\Theme;

// use \ROH\Util\Inflector;
use \Bono\Theme\Theme;

class BootstrapTheme extends Theme
{
    public $options;

    public function __construct($config)
    {
        $this->options = @$config['options'] ?: array();

        parent::__construct($config);

        $app = \Bono\App::getInstance();

        $d = explode(DIRECTORY_SEPARATOR.'src', __DIR__);
        $this->addBaseDirectory($d[0], 5);

        $this->resolveAssetPath('vendor/bootstrap');


        $appConfig = $app->config('application');
    }
}
