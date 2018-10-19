<?php
/**
 *  版权声明 :  地老天荒科技有限公司
 *  文件名称 :  IsadminValidateGet.php
 *  创 建 者 :  Shi Guang Yu
 *  创建日期 :  2018/10/19 15:10
 *  文件描述 :  权限管理获取验证器
 *  历史记录 :  -----------------------
 */
namespace app\right_module\working_version\v1\validator;
use think\Validate;

class IsadminValidateGet extends Validate
{
    /**
     * 名  称 : $rule
     * 功  能 : 验证规则
     * 输  入 : $get['admin_token']  => '管理员Token标识字符串';
     * 创  建 : 2018/10/19 15:21
     */
    protected $rule =   [
        'admin_token'  => 'require|min:32|max:32',
    ];

    /**
     * 名  称 : $message()
     * 功  能 : 设置验证信息
     * 创  建 : 2018/10/19 15:21
     */
    protected $message  =   [
        'admin_token.require'=> '请输入32位AdminToken标识',
        'admin_token.min'    => '请输入32位AdminToken标识',
        'admin_token.max'    => '请输入32位AdminToken标识',
    ];
}