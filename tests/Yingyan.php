<?php
/**
 * @Author yeardley
 * @Date 2020/5/18 11:29
 * @Email 510865496@qq.com
 */

require '../vendor/autoload.php';

$ak = '';

$service_id = '';

$config = [
    'ak' => $ak,
    'service_id' => $service_id,
    'entity_name' => '贵A12312',
    'entity_desc' => '车牌号',
];

\Yeardley\Yingyan\Yingyan::entity($config)->add();