# **Ext-PHP**

## This package includes various utility functions for php.

&nbsp;

## Function: `isNull()`
This function returns the value from the built-in php function `is_null()`
```
if (! function_exists('isNull')) {
    function isNull(mixed $value)
    {
        return is_null($value);
    }
}
```
&nbsp;

## Function: `notNull()`
This function returns the inverse value from the built-in php function `is_null()`
```
if (! function_exists('notNull')) {
    function notNull(mixed $value)
    {
        return ! is_null($value);
    }
}
```
&nbsp;

## Function: `randomElements()`
This function returns a randomised element from an array of elements. The function will use the predefined array if no array parameter is supplied.
```
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
```
