<?php

use Illuminate\Support\Debug\Dumper;

if (!function_exists('xml_filter')) {
    function xml_filter($str)
    {
        return str_ireplace(['<', '>', '"', '\'', '&', '&', '«', '»'], '', $str);
    }
}

if (!function_exists('mf')) {
    function mf($number, $sect=0, $pref='$', $suff='')
    {
        return $pref . number_format((float)$number, $sect, ',', ' ') . $suff;
    }
}

if (!function_exists('pub_id')) {
    function pub_id($id)
    {
        return str_pad($id, 6, '0', 0);
    }
}

if (!function_exists('dnd')) {
    function dnd($str)
    {
        (new Dumper)->dump($str);
    }
}