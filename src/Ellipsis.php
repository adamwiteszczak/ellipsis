<?php

namespace Whitesnake\Ellipsis;

/**
 * Class Ellipsis
 *
 * @package Ellipsis
 * @author Adam Witeszczak <adam@witeszczak.com>
 */
class Ellipsis
{
    /**
     * Apply an ellipsis to a given text
     *
     * @param  string   $text       the text to have the ellipsis applied to it
     * @param  int      $max_length the max length of the string, after which the ellipsis is applied
     * @param  string   $marker     the characters you wish to use for the ellipsis e.g. '...', '>>>', etc.
     *
     * @return string
     */
    public static function apply(string $text, int $max_length, string $marker = '...'): string
    {
        if (strlen($text) <= $max_length) {
            return $text;
        }

        $text = substr($text, 0, $max_length);

        return $text . $marker;
    }
}