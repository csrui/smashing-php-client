<?php

namespace csrui\SmashingPhpClient;

class Config {

    protected $api_key;

    protected $api_url;

    /**
     * Constructor receives the API base configuration
     *
     * @param string $api_url
     * @param string $api_key
     */
    public function __construct(string $api_url, string $api_key) {

        $this->api_key = $api_key;
        $this->api_url = $api_url;
    }

    public function apiKey() : string {
        return $this->api_key;
    }

    public function apiURL() : string {
        return $this->api_url;
    }
}