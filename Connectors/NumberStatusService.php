<?php

namespace csrui\SmashingPhpClient\Connectors;

use csrui\SmashingPhpClient\Client;

class NumberStatusService extends Client {

    public function push(string $title, int $result, string $prefix, float $current, string $suffix, float $last, string $moreinfo) {

        $data = compact('title', 'result', 'prefix', 'suffix', 'current', 'last', 'moreinfo');
        return parent::send($data);
    }
}