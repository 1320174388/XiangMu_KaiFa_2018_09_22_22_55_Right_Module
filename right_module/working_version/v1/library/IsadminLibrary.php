<?php
/**
 *  版权声明 :  地老天荒科技有限公司
 *  文件名称 :  IsadminLibrary.php
 *  创 建 者 :  Shi Guang Yu
 *  创建日期 :  2018/10/19 15:10
 *  文件描述 :  权限管理自定义类
 *  历史记录 :  -----------------------
 */
namespace app\right_module\working_version\v1\library;

class IsadminLibrary
{
    /**
     * 名  称 : isadminLibGet()
     * 功  能 : 判断用户是不是管理员接口函数类
     * 变  量 : --------------------------------------
     * 输  入 : $get['admin_token']  => '管理员Token标识字符串';
     * 输  出 : ['msg'=>'success','data'=>'返回数据']
     * 创  建 : 2018/10/19 15:21
     */
    public function isadminLibGet($get)
    {
        // TODO : 执行函数处理逻辑
        
        // TODO : 返回函数输出数据
        return ['msg'=>'success','data'=>'返回数据'];
    }
}