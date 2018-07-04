<?php

namespace csrui\SmashingPhpClient\Connectors;

use csrui\SmashingPhpClient\Client;

class Table extends Client {

    public function push(string $title, string $moreinfo, array $items = []) {

        $data = compact('title', 'moreinfo', 'items');
        return parent::send($data);
    }
}