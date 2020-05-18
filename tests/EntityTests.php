<?php
require '../vendor/autoload.php';

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


