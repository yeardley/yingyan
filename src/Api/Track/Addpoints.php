<?php
/**
 * Package Yeardley\Yingyan\Api\Track\Addpoints
 * @Author yeardley
 * @Date 2020/5/18 14:12
 * @Email 510865496@qq.com
 */

namespace Yeardley\Yingyan\Api\Track;


use Yeardley\Yingyan\Api\Api;

class Addpoints extends Api
{

    /**
     * @param ak 用户的AK，授权使用 string 是
     *
     * @param service_id service的ID，service 的唯一标识	int	是 在轨迹管理台创建鹰眼服务时，系统返回的 service_id
     *
     * @param point_list	轨迹点列表	string(1-10000)	是	轨迹点总数不超过100个，json 格式。
     *        轨迹点字段描述参见 addpoint 接口，其中 entity_name,latitude,longitude,loc_time,coord_type_input5个字段必填，其他字段可选
     *
     */
}