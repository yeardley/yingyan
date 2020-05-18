<?php
/**
 * Package Yeardley\Yingyan\Exceptions\Exception
 * @Author yeardley
 * @Date 2020/5/12 10:11
 * @Email 510865496@qq.com
 */

namespace Yeardley\Yingyan\Exceptions;


class Exception extends \Exception
{
    const UNKNOWN_ERROR = 9999;

    const INVALID_API = 1;

    const INVALID_CONFIG = 2;

    const INVALID_ARGUMENT = 3;

    const ERROR_API = 4;

    const ERROR_BUSINESS = 6;

    public $raw;

    public function __construct($message = '', $raw = [], $code = self::UNKNOWN_ERROR)
    {
        $message = $message === '' ? 'Unknown Error' : $message;
        $this->raw = is_array($raw) ? $raw : [$raw];

        parent::__construct($message, intval($code));
    }
}