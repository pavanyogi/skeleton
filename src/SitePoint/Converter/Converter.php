<?php

namespace SitePoint\Converter;

class Converter
{
    public function convertString(string $input): ?array
    {
        $output = json_decode($input, true);
        return $output;
    }

    public function add($a, $b)
    {
        return $a + $b;
    }
}