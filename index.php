<?php

    /**
     * Moves an array item to a new index .
     *
     * @param array $array
     * @param int $from
     * @param int $to
     * @return void
     */
    function array_move(array &$array, int $from, int $to)
    {
        $item = array_splice($array, $from, 1);
        array_splice($array, $to, 0, $item);
    }

    /**
     * Moves an associative array item to a new index.
     * 
     * @param array $array
     * @param string $key
     * @param int $to
     * @return void
     */
    function array_move_assoc(array &$array, string $key, int $to)
    {
        if (!array_key_exists($key, $array)) return;

        $keys = array_keys($array);
        $values = array_values($array);
        $from = array_search($key, $keys);

        array_move($keys, $from, $to);
        array_move($values, $from, $to);

        $array = [];
        foreach ($keys as $index => $key) {
            $array[$key] = $values[$index];
        }
    }
