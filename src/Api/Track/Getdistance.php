<?php
/**
 * Package Yeardley\Yingyan\Api\Track\Getdistance
 * @Author yeardley
 * @Date 2020/5/18 14:20
 * @Email 510865496@qq.com
 */

namespace Yeardley\Yingyan\Api\Track;


use Yeardley\Yingyan\Api\Api;

class Getdistance extends Api
{
    protected $method = 'get';


    /**
     * @param ak 用户的AK，授权使用 string 是
     *
     * @param service_id service的ID，service 的唯一标识	int	是 在轨迹管理台创建鹰眼服务时，系统返回的 service_id
     *
     * @param entity_name entity唯一标识	string(128)	是 标识轨迹点所属的 entity
     *
     * @param start_time	开始时间	UNIX 时间戳	是
     *
     * @param end_time	结束时间	UNIX时间戳	是	结束时间不能大于当前时间，且起止时间区间不超过24小时。
     *                  为提升响应速度，同时避免轨迹点过多造成请求超时（3s）失败，建议缩短每次请求的时间区间，将一天轨迹拆分成多段进行拼接
     *
     * @param is_processed	是否返回纠偏后里程	string	否	默认值：0 0：关闭轨迹纠偏，返回原始轨迹 1：打开轨迹纠偏，返回纠偏后轨迹。
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
     * @param supplement_mode	里程补偿方式	string(0-128)	否 默认值：no_supplement，不补充
     *                          在里程计算时，两个轨迹点定位时间间隔5分钟以上，被认为是中断。中断轨迹提供以下5种里程补偿方式。
     *                          no_supplement：不补充，中断两点间距离不记入里程
     *                          straight：使用直线距离补充
     *                          driving：使用最短驾车路线距离补充
     *                          riding：使用最短骑行路线距离补充
     *                          walking：使用最短步行路线距离补充
     *
     * @param low_speed_threshold	低速阈值	double	否  单位：千米/小时
     *                              若填写该值且is_processed=1时，则返回结果中将增加low_speed_distance字段，表示速度低于该值的里程。
     *        示例： low_speed_threshold=20，则返回结果中将增加low_speed_distance字段表示此段轨迹中速度低于20千米/小时的里程，可用于网约车行业中计算低速里程。
     *
     */
}