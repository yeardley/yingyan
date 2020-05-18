<h1 align="center">百度鹰眼web sdk</h1>

## 运行环境
- PHP 7.0+ 
- composer

### 1、终端管理

|  method   |   描述       |
| :-------: | :-------:   |
|  add      | 创建     |
|  update      | 更新 |
|  get      | 查询    |
|  delete      | 删除  |
|  search     | 根据关键字搜索  |
|  boundsearch     | 矩形范围搜索  |
|  aroundsearch     | 周边搜索  |
|  polygonsearch     | 多边形搜索  |
|  districtsearch    | 行政区搜索 | 


### 1、轨迹点

|  method   |   描述       |
| :-------: | :-------:   |
|  addpoint      | 上传单个轨迹点     |
|  addpoints      | 批量上传多个 entity 的多个轨迹点 |
|  getlatestpoint      | 查询某 entity 的实时位置，支持纠偏    |
|  getdistance      | 查询某 entity 一段时间内的轨迹里程，支持纠偏  |
|  gettrack      | 查询某 entity 一段时间内的轨迹点，支持纠偏  |


## 安装
```shell
composer require yeardley/yingyan -vvv
```

## 使用说明

## 轨迹点
```php
<?php

use Yeardley\Yingyan\Yingyan;

$ak = '';
$service_id = '';
$entity_name = '车牌号';
$entity_desc = '描述';

$config = [
    'ak' => $ak,
    'service_id' => $service_id,
    'entity_name' => $entity_name,
    'entity_desc' => $entity_desc,
];
Yingyan::entity($config)->add();

```


## 详细文档
[详细说明文档](http://lbsyun.baidu.com/index.php?title=yingyan/api/v3/all)


## LICENSE
MIT


