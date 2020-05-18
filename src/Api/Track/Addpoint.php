<?php
/**
 * Package Yeardley\Yingyan\Api\Track\Addpoint
 * @Author yeardley
 * @Date 2020/5/18 14:08
 * @Email 510865496@qq.com
 */

namespace Yeardley\Yingyan\Api\Track;


use Yeardley\Yingyan\Api\Api;

class Addpoint extends Api
{

    /**
     * @param ak 用户的AK，授权使用 string 是
     *
     * @param service_id service的ID，service 的唯一标识	int	是 在轨迹管理台创建鹰眼服务时，系统返回的 service_id
     *
     * @param entity_name entity唯一标识	string(128)	是 标识轨迹点所属的 entity
     *
     * @param latitude	纬度	double(-90.0 , +90.0)	是
     *
     * @param longitude	经度	double(-180.0 , +180.0)	是
     *
     * @param loc_time	定位时设备的时间	Unix时间戳	是	输入的loc_time不能大于当前服务端时间10分钟以上，即不支持存未来的轨迹点。
     *                                                  且输入的loc_time不能小于当前服务端时间1年以上，即不支持存1年以前的轨迹点。
     *
     * @param coord_type_input	坐标类型	string	是	默认值：bd09ll 该字段用于描述上传的坐标类型。可选值为：
     *                                                  wgs84：GPS 坐标 gcj02：国测局加密坐标 bd09ll：百度经纬度坐标
     *
     * @param speed	速度	double	否	单位：km/h
     *
     * @param direction	方向	int	否	取值规则： 范围为[0,359]，0度为正北方向，顺时针
     *
     * @param height	高度	double	否	单位：米
     *
     * @param radius	定位精度，GPS或定位SDK返回的值	double	否	单位：米
     *
     * @param object_name	对象数据名称	string	否	通过鹰眼 SDK 上传的图像文件名称
     *
     * @param column-key	track的自定义字段	此处值的类型须与用户自定义的column的类型一致	否	随轨迹点上传开发者自定义字段的值
     *
     */
}