<?php
/**
 * Package Yeardley\Yingyan\Exceptions\InvalidApiException
 * @Author yeardley
 * @Date 2020/5/12 10:10
 * @Email 510865496@qq.com
 */

namespace Yeardley\Yingyan\Exceptions;


class InvalidApiException extends Exception
{

    public function __construct($message, $raw = [])
    {
        parent::__construct('INVALID_API: '.$message, $raw, self::INVALID_API);
    }
}