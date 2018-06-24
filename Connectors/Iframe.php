<?php

namespace csrui\SmashingPhpClient\Connectors;

use csrui\SmashingPhpClient\Client;

class Iframe extends Client {

    public function push(string $url) {

        $data = compact('url');
        return parent::send($data);
    }
}