<?php

namespace csrui\SmashingPhpClient;

use csrui\SmashingPhpClient\Config;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Promise\Promise;

abstract class Client {

    /**
     * Undocumented variable
     *
     * @var string
     */
    protected $widget_id;

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
     * @param string       $widget_id
     */
    public function __construct(Config $config, string $widget_id) {

        $this->config    = $config;
        $this->widget_id = $widget_id;
    }

    /**
     * Send payload to API.
     *
     * @param array $data
     * @return GuzzleHttp\Promise\Promise
     */
    protected function send(array $data = []) : Promise {

        // Create a new Guzzle client instance.
        $client = new GuzzleClient([
            'base_uri' => $this->config->apiURL(),
        ]);

        // Sets the base payload with required Auth Token.
        $payload = [
            'auth_token' => $this->config->apiKey(),
        ];

        // Add the parameteres we want to send
        $payload = array_merge($data, $payload);

        return $client->postAsync('/widgets/' . $this->widget_id, [
            'json' => $payload,
        ]);
    }
}