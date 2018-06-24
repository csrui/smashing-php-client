<?php

namespace csrui\SmashingPhpClient\Connectors;

use csrui\SmashingPhpClient\Client;

class Meter extends Client {

    public function push(string $title, int $value, string $suffix) {

        $data = compact('title', 'value', 'suffix');
        $data['min'] = 0;
        $data['max'] = 100;
        return parent::send($data);
    }
}