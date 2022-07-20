<?php

if (! function_exists('isNull')) {
    function isNull(mixed $value)
    {
        return is_null($value);
    }
}

if (! function_exists('notNull')) {
    function notNull(mixed $value)
    {
        return ! is_null($value);
    }
}

if (! function_exists('randomElements')) {
    function randomElements(int $length, ?array $repository = null)
    {
        if (isNull($repository)) {
            $repository = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'M', 'N', 'P', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '2', '3', '4', '5', '6', '7', '8', '9'];
        }

        $randomElements = [];
        $max = count($repository) - 1;

        for ($x = 0; $x < $length; $x++) {
            $randomElements[] = $repository[random_int(0, $max)];
        }

        return $randomElements;
    }
}
