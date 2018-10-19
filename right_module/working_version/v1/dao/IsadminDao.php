<?php
/**
 *  版权声明 :  地老天荒科技有限公司
 *  文件名称 :  IsadminDao.php
 *  创 建 者 :  Shi Guang Yu
 *  创建日期 :  2018/10/19 15:10
 *  文件描述 :  权限管理数据层
 *  历史记录 :  -----------------------
 */
namespace app\right_module\working_version\v1\dao;
use app\right_module\working_version\v1\model\AdminModel;

class IsadminDao implements IsadminInterface
{
    /**
     * 名  称 : isadminSelect()
     * 功  能 : 判断用户是不是管理员接口数据处理
     * 变  量 : --------------------------------------
     * 输  入 : $get['admin_token']  => '管理员Token标识字符串';
     * 输  出 : ['msg'=>'success','data'=>'返回数据']
     * 创  建 : 2018/10/19 15:21
     */
    public function isadminSelect($get)
    {
        // TODO :  AdminModel 模型
        $adminList = AdminModel::where(
            'admin_token',$get['admin_token']
        )->select()->toArray();
        // 处理数据
        $resArr = [];
        foreach($adminList as $value){
            $resArr[] = [
                'right_class'=>$value['right_class'],
                'admin_class'=>$value['admin_class'],
                'admin_types'=>true,
            ];
        }

        // 处理函数返回值
        return \RSD::wxReponse($adminList,'M',$resArr,'当前管理员没有任何权限');
    }
}