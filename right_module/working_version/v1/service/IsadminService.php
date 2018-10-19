<?php
/**
 *  版权声明 :  地老天荒科技有限公司
 *  文件名称 :  IsadminService.php
 *  创 建 者 :  Shi Guang Yu
 *  创建日期 :  2018/10/19 15:10
 *  文件描述 :  权限管理逻辑层
 *  历史记录 :  -----------------------
 */
namespace app\right_module\working_version\v1\service;
use app\right_module\working_version\v1\dao\IsadminDao;
use app\right_module\working_version\v1\library\IsadminLibrary;
use app\right_module\working_version\v1\validator\IsadminValidatePost;
use app\right_module\working_version\v1\validator\IsadminValidateGet;
use app\right_module\working_version\v1\validator\IsadminValidatePut;
use app\right_module\working_version\v1\validator\IsadminValidateDelete;

class IsadminService
{
    /**
     * 名  称 : isadminShow()
     * 功  能 : 判断用户是不是管理员接口逻辑
     * 变  量 : --------------------------------------
     * 输  入 : $get['admin_token']  => '管理员Token标识字符串';
     * 输  出 : ['msg'=>'success','data'=>'返回数据']
     * 创  建 : 2018/10/19 15:21
     */
    public function isadminShow($get)
    {
        // 实例化验证器代码
        $validate  = new IsadminValidateGet();

        // 处理数据
        if(empty($get['group_class'])){
            $get['group_class'] = '0';
        }
        
        // 验证数据
        if (!$validate->scene('edit')->check($get)) {
            return ['msg'=>'error','data'=>$validate->getError()];
        }
        
        // 实例化Dao层数据类
        $isadminDao = new IsadminDao();
        
        // 执行Dao层逻辑
        $res = $isadminDao->isadminSelect($get);
        
        // 处理函数返回值
        return \RSD::wxReponse($res,'D');
    }
}