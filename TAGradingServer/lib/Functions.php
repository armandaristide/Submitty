<?php
/**
 * Various utility functions
 */

namespace lib;

class Functions {
    /**
     * Defines a new default str_pad that's useful for things like parts of a datetime
     *
     * @param        $string
     * @param int    $pad_width  [optional]
     * @param string $pad_string [optional]
     * @param int    $pad_type   [optional]
     *
     * @return string
     */
    public static function pad($string, $pad_width=2, $pad_string='0', $pad_type = STR_PAD_LEFT) {
        return str_pad($string, $pad_width, $pad_string, $pad_type);
    }

    /**
     * Removes the trailing comma at the end of any JSON block. This means that if you had:
     * [ "element": { "a", "b", }, ]
     * this function would return:
     * [ "element": { "a", "b" } ]
     *
     * We do this as we have the potential of trailing commas in the JSON files that are generated by
     * the submission server
     *
     * @param $json
     *
     * @return mixed
     */
    public static function removeTrailingCommas($json){
        $json=preg_replace('/,\s*([\]}])/m', '$1', $json);
        return $json;
    }
}