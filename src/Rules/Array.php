<?php

namespace Violin\Rules;

class Array
{
    /**
     * Run the validation
     *
     * @param  string $name
     * @param  mixed $value
     * @return bool
     */
    public function run($name, $value)
    {
        return is_array($value);
    }
}
