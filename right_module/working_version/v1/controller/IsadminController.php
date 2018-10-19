<?php
/**
 *  版权声明 :  地老天荒科技有限公司
 *  文件名称 :  IsadminController.php
 *  创 建 者 :  Shi Guang Yu
 *  创建日期 :  2018/10/19 15:10
 *  文件描述 :  权限管理控制器
 *  历史记录 :  -----------------------
 */
namespace app\right_module\working_version\v1\controller;
use think\Controller;
use app\right_module\working_version\v1\service\IsadminService;

class IsadminController extends Controller
{
    /**
     * 名  称 : isadminGet()
     * 功  能 : 判断用户是不是管理员接口接口
     * 变  量 : --------------------------------------
     * 输  入 : $get['admin_token']  => '管理员Token标识字符串';
     * 输  出 : {"errNum":0,"retMsg":"请求成功","retData":"请求数据"}
     * 创  建 : 2018/10/19 15:21
     */
    public function isadminGet(\think\Request $request)
    {
        // 实例化Service层逻辑类
        $isadminService = new IsadminService();
        
        // 获取传入参数
        $get = $request->get();
        
        // 执行Service逻辑
        $res = $isadminService->isadminShow($get);
        
        // 处理函数返回值
        return \RSD::wxReponse($res,'S','请求成功');
    }
}