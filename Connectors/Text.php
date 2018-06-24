<?php

namespace csrui\SmashingPhpClient\Connectors;

use csrui\SmashingPhpClient\Client;

class Text extends Client {

    public function push(string $title, string $text, string $moreinfo) {

        $data = compact('title', 'text', 'moreinfo');
        return parent::send($data);
    }
}