<?php
/**
 * Package Yeardley\Yingyan\Api\Entity\Add
 * @Author yeardley
 * @Date 2020/5/12 10:22
 * @Email 510865496@qq.com
 */

namespace Yeardley\Yingyan\Api\Entity;


use Yeardley\Yingyan\Api\Api;

class Add extends Api
{

    /**
     * @param ak 用户的AK，授权使用 string 是
     *
     * @param service_id service的ID，service 的唯一标识	int	是 在轨迹管理台创建鹰眼服务时，系统返回的 service_id
     *
     * @param entity_name entity名称，作为其唯一标识	string(128)	是	同一service服务中entity_name不可重复。一旦创建entity_name 不可更新。
     *
     * @param entity_desc entity 的可读性描述 string(128)	否
     *
     * @param column-key 开发者自定义字段 string(128)	否
     */
}