<?php
/**
 * Package Yeardley\Yingyan\Api\Track\Getlatestpoint
 * @Author yeardley
 * @Date 2020/5/18 14:14
 * @Email 510865496@qq.com
 */

namespace Yeardley\Yingyan\Api\Track;


use Yeardley\Yingyan\Api\Api;

class Getlatestpoint extends Api
{
    protected $method = 'get';


    /**
     * @param ak 用户的AK，授权使用 string 是
     *
     * @param service_id service的ID，service 的唯一标识	int	是 在轨迹管理台创建鹰眼服务时，系统返回的 service_id
     *
     * @param entity_name entity唯一标识	string(128)	是 标识轨迹点所属的 entity
     *
     * @param process_option 纠偏选项 string(0-128) 否   默认值为： denoise_grade=1,need_mapmatch=0,transport_mode=auto
     *                       取值规则为：
     *                       1.去噪 denoise_grade（去噪力度）取值范围[0,5]，数值越大去噪力度越大，代表越多的点会被当做噪点去除。若取值0，则代表不去噪。
     *                       示例：
     *                       denoise_grade:0 （不去噪）
     *                       denoise_grade:1 （系统默认去噪）
     *                       denoise_grade:2（系统默认去噪，同时去除定位精度低于500的轨迹点，相当于保留GPS定位点、大部分Wi-Fi定位点和精度较高的基站定位点）
     *                       denoise_grade:3（系统默认去噪，同时去除定位精度低于100的轨迹点，相当于保留GPS定位点和大部分Wi-Fi定位点）
     *                       denoise_grade:4（系统默认去噪，同时去除定位精度低于50的轨迹点，相当于保留GPS定位点和精度较高的Wi-Fi定位点）
     *                       denoise_grade:5（系统默认去噪，同时去除定位精度低于20的轨迹点，相当于仅保留GPS定位点）
     *                       2.绑路，示例： need_mapmatch:0 不绑路 need_mapmatch:1 绑路
     *                       3.交通方式，鹰眼将根据不同交通工具选择不同的纠偏策略，目前支持：自动（即鹰眼自动识别的交通方式）、驾车、骑行和步行，
     *                       示例： transport_mode=auto transport_mode=driving transport_mode=riding transport_mode=walking
     *
     * @param coord_type_output 返回的坐标类型 string 	否    默认值：bd09ll 该字段用于控制返回结果中的坐标类型。可选值为：
     *                                                        gcj02：国测局加密坐标 bd09ll：百度经纬度坐标
     *
     * @param extensions 返回结果控制 string 否    可选，默认：extensions=base 多个值用逗号分隔，目前支持以下值：
     *                                            base：返回基础信息
     *                                            road_info：在base的基础上增加返回道路等级（road_grade）、道路限速（car_limit_speed）信息（注：目前road_info仅在开
     *                                                       发者申请开通了道路等级和道路限速字段权限后才生效）
     *                                           示例：extensions=road_info，则返回base信息和road_grade、car_limit_speed、road_name
     *
     */
}