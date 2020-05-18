<?php
/**
 * Package Yeardley\Yingyan\Yingyan
 * @Author yeardley
 * @Date 2020/5/12 10:05
 * @Email 510865496@qq.com
 */

namespace Yeardley\Yingyan;


use Yeardley\Yingyan\Api\Api;
use Yeardley\Yingyan\Contracts\ApiApplicationInterface;
use Yeardley\Yingyan\Exceptions\InvalidApiException;
use Yeardley\Yingyan\Supports\Str;

/**
 * @method static Api entity($config)
 * @method static Api track($config)
 */
class Yingyan
{

    protected $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * @param string $method
     * @param array $params
     * @return ApiApplicationInterface
     * @throws InvalidApiException
     */
    public static function __callStatic($method, $params)
    {
        $app = new self(...$params);
        return $app->create($method);
    }

    /**
     * @param $method
     * @return ApiApplicationInterface
     * @throws InvalidApiException
     */
    protected function create($method): ApiApplicationInterface
    {
        $api = __NAMESPACE__.'\\Api\\Api';


        if (class_exists($api)) {
            return self::make($api, $method);
        }

        throw new InvalidApiException("Api [{$method}] Not Exists");
    }

    /**
     * @param $api
     * @param $method
     * @return ApiApplicationInterface
     * @throws InvalidApiException
     */
    protected function make($api, $method): ApiApplicationInterface
    {
        $app = new $api($this->config, $method);

        if ($app instanceof ApiApplicationInterface) {
            return $app;
        }

        throw new InvalidApiException("Api [{$api}] Must Be An Instance Of ApiApplicationInterface");
    }
}