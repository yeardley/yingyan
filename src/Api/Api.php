<?php
/**
 * Package Yeardley\Yingyan\Api\Api
 * @Author yeardley
 * @Date 2020/5/12 10:20
 * @Email 510865496@qq.com
 */

namespace Yeardley\Yingyan\Api;


use GuzzleHttp\Client;
use Yeardley\Yingyan\Contracts\ApiApplicationInterface;
use Yeardley\Yingyan\Exceptions\InvalidApiException;
use Yeardley\Yingyan\Supports\Str;

/**
 * @method array add() 创建一个终端
 * @method array update() 终端字段更新
 * @method array delete() 删除终端
 * @method array get() 终端查询
 * @method array search() 根据关键字搜索终端
 * @method array addpoint() 上传单个轨迹点
 * @method array addpoints() 批量上传多个 entity 的多个轨迹点
 * @method array getlatestpoint() 查询某 entity 的实时位置，支持纠偏
 * @method array getdistance() 查询某 entity 一段时间内的轨迹里程，支持纠偏
 * @method array gettrack() 查询某 entity 一段时间内的轨迹点，支持纠偏
 */
class Api implements ApiApplicationInterface
{
    protected $method = 'post';

    protected $url;

    protected $response;

    protected $config;

    protected $path;

    protected $name;

    protected $baseUrl = 'http://yingyan.baidu.com/api/v3';

    protected $client;

    public function __construct(array $config, $path)
    {
        $this->path = $path;
        $this->config = $config;
        $this->client = new Client();
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function __call($name, $arguments)
    {
        $class = __NAMESPACE__ .'\\'. Str::studly($this->path) .'\\'. Str::studly($name);

        if (class_exists($class)) {
            return $this->makeRequest($class, $name);
        }

        throw new InvalidApiException("Api [{$this->path}->{$name}] not exists");
    }

    protected function makeRequest($class, $name)
    {
        $app = new $class($this->config, $this->path);

        $app->setName($name);

        if ($app instanceof ApiApplicationInterface) {
            return $app->request();
        }

        throw new InvalidApiException("Api [$class] not exists");
    }

    protected function request()
    {
        $url = $this->url ?: $this->baseUrl .'/'. strtolower($this->path) .'/'. strtolower($this->name);
        if ($this->method == 'post') {
            $options['form_params'] = $this->config;
        } else {
            $options['query'] = $this->config;
        }
        $response = $this->client->request($this->method, $url, $options);

        $data = json_decode($response->getBody(), true);

        return $data;
    }
}