<?php
/**
 * Package Yeardley\Yingyan\Api\Entity\Aroundsearch
 * @Author yeardley
 * @Date 2020/5/18 14:58
 * @Email 510865496@qq.com
 */

namespace Yeardley\Yingyan\Api\Entity;


use Yeardley\Yingyan\Api\Api;

class Aroundsearch extends Api
{

    protected $method = 'get';

    /**
     * @param ak	用户的AK，授权使用	string	必选
     *
     * @param service_id	service的ID，service 的唯一标识	int	必选	在轨迹管理台创建鹰眼服务时，系统返回的 service_id
     *
     * @param center	中心点经纬度	string	必选	格式为：纬度,经度 示例： 36.20,116.30
     *
     * @param radius	搜索半径	int	必选	单位：米，取值范围[1,5000] 示例： 1000
     *
     * @param filter 过滤条件 string 否 支持根据多个条件筛选，多个条件用竖线分隔（active_time 和 inactive_time 不可同时输入）
     *                                 规则：filter=key1:value1|key2:value2。
     *                                 示例："filter=entity_names:张三,李四|active_time:1471708800|team:北京"
     *                                 目前，支持的筛选字段为：
     *                                 1）entity_names: entity_name列表，多个entity用逗号分隔，精确筛选。示例："entity_names:张三,李四"
     *                                 2）active_time：unix时间戳，查询在此时间之后有定位信息上传的entity（loc_time>=active_time）。
     *                                    如查询2016-8-21 00:00:00之后仍活跃的entity，示例："active_time:1471708800"
     *                                 3）inactive_time：unix时间戳，查询在此时间之后无定位信息上传的entity（loc_time<inactive_time）。
     *                                    如查询2016-8-21 00:00:00之后不活跃的entity示例："inactive_time:1471708800"
     *                                 4）开发者自定义的可筛选的entity属性字段，示例："team:北京"
     *
     * @param sortby 排序方法 string 否 默认值：entity_name:asc（按 entity_name 升序排序） 只支持按一个字段排序，支持的排序字段如下：
     *                                          loc_time：entity 最新定位时间
     *                                          entity_name：entity 唯一标识
     *                                          entity_desc：entity描述信息
     *                                          <custom-key>：开发者自定义的 entity 属性字段
     *                                         【使用规则】 sortby=字段名:asc （升序） sortby=字段名:desc （降序）
     *                                         【示例】 按定位时间loc_time字段降序排序：sortby=loc_time:desc
     *                                                 按自定义的手机号字段phone_number  升序排序：sortby=phone_number:asc
     *
     * @param coord_type_input 请求参数 bounds 的坐标类型 string 否 默认值：bd09ll 该字段用于控制返回结果中坐标的类型。
     *                                                     可选值为： bd09ll：百度经纬度坐标 gcj02：国测局加密坐标
     *
     * @param coord_type_output 返回结果的坐标类型 string 否 默认值：bd09ll 该字段用于控制返回结果中坐标的类型。
     *                                                     可选值为： bd09ll：百度经纬度坐标 gcj02：国测局加密坐标
     *
     * @param page_index	分页索引	int(1到2^32-1)	可选 默认值为1。page_index与page_size一起计算从第几条结果返回，代表返回第几页。
     *
     * @param page_size	分页大小	int(1-1000)	可选 默认值为100。page_size与page_index一起计算从第几条结果返回，代表返回结果中每页有几条记录。
     *
     */
}