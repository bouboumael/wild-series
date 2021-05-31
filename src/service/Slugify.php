<?php

namespace App\service;

class Slugify {

    public function generate(string $input) : string
    {
        return mb_strtolower(preg_replace('/\s/','-', $input));
    }
}
