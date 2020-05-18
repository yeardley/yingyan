<?php
/**
 * Package Yeardley\Yingyan\Supports\Str
 * @Author yeardley
 * @Date 2020/5/12 10:01
 * @Email 510865496@qq.com
 */

namespace Yeardley\Yingyan\Supports;


class Str
{

    protected static $studlyCache = [];


    public static function studly($string)
    {
        $key = $string;

        if (isset(static::$studlyCache[$key])) {
            return static::$studlyCache[$key];
        }

        $value = ucwords(str_replace(['-', '_'], ' ', $string));

        return static::$studlyCache[$key] = str_replace(' ', '', $value);
    }
}