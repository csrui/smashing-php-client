<?php

namespace csrui\SmashingPhpClient;

use csrui\SmashingPhpClient\Config;

class WidgetFactory {

    /**
     * Undocumented variable
     *
     * @var ClientConfig
     */
    protected $config;

    /**
     * Constructor receives the API base configuration
     *
     * @param ClientConfig $config
     */
    public function __construct(Config $config) {

        $this->config = $config;
    }

    /**
     * Instanciate a new Connector.
     *
     * @param string $widget_type
     * @param string $widget_id
     * @return mixed
     */
    public function create( string $widget_type, string $widget_id ) {

        return new $widget_type($this->config, $widget_id );
    }
}