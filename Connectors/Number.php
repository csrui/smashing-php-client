<?php

namespace csrui\SmashingPhpClient\Connectors;

use csrui\SmashingPhpClient\Client;

class Number extends Client {

    public function push(string $title, string $prefix, int $current, string $suffix, int $last, string $moreinfo) {

        $data = compact('title', 'prefix', 'suffix', 'current', 'last', 'moreinfo');
        return parent::send($data);
    }
}