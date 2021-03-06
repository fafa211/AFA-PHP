<?php defined('AFA') or die('No AFA PHP Framework!');


/**
 * 模块代码生成器
 * @author     zhengshufa
 * @see        https://github.com/fluent/fluent-logger-php
 * @author     呼吸二氧化碳 <jonwang@myqee.com>
 * @category   Core
 * @package    Classes
 * @copyright  Copyright (c) 2015-2016 afaphp.com
 * @license    http://www.myqee.com/license.html
 */

class codemaker_Controller extends Controller{


    /**
     * model setting
     */
    public function index_Action(){
        $this->view->set_view('index');
        $this->view->render();
    }

    /**
     * module maker
     */
    public function maker_Action(){

        //$this->makeFileInfo();

        $this->echomsg("模型生成成功!");
    }

    /**
     * 生成User模块
     */
    private function makeuser(){
        $module = 'user';//模型名称
        $model = 'user';//通常与表名一致，也可以不一样，将生成 $model_Controller 和 $model_Model类文件
        $table = 'user';//表名
        $prikey = 'id';//主键名

        $fileds = array(
            array(
                'name' => 'account',
                'cnname' => '账号',
                'type' => 'text',
                'type_extend' => '',
                'required' => true,
                'is_edit' => true,
                'list_show' => true,
                'default_value' => ''
            ),
            array(
                'name' => 'passwd',
                'cnname' => '密码',
                'type' => 'password',
                'type_extend' => '',
                'required' => true,
                'is_edit' => true,
                'list_show' => true,
                'default_value' => '1',
                'pattern' => "[0-9a-zA-z]{6,20}",//pattern出现时，title必须配对出现
                'title' => "密码必须为数字或字母，长度为6-20位"
            ),
            array(
                'name' => 'regtime',
                'cnname' => '注册时间',
                'type' => 'datetime',
                'type_extend' => '',
                'required' => true,
                'is_edit' => false,
                'list_show' => true,
                'default_value' => '0000-00-00 00:00:00'
            ),
            array(
                'name' => 'logtime',
                'cnname' => '登录时间',
                'type' => 'datetime',
                'type_extend' => '',
                'required' => true,
                'is_edit' => false,
                'list_show' => true,
                'default_value' => '0000-00-00 00:00:00'
            ),
            array(
                'name' => 'logip',
                'cnname' => '登录ip',
                'type' => 'text',
                'type_extend' => '',
                'required' => false,
                'is_edit' => false,
                'list_show' => true,
                'default_value' => '127.0.0.1'
            )
        );


        $maker = new codemaker($module, $model, $table, $prikey, $fileds);
        $maker->store();
    }

    /**
     * 生成Blog模块
     */
    private function makeblog(){
        $module = 'blog';//模型名称
        $model = 'blog';//通常与表名一致，也可以不一样，将生成 $model_Controller 和 $model_Model类文件
        $table = 'blog';//表名
        $prikey = 'id';//主键名

//         $module = 'blog';//模型名称
//         $model = 'comment';//通常与表名一致，也可以不一样，将生成 $model_Controller 和 $model_Model类文件
//         $table = 'blog_comments';//表名
//         $prikey = 'id';//主键名


        $fileds = array(
            array(
                'name' => 'blog_id',
                'cnname' => '博客id',
                'type' => 'number',
                'type_extend' => '',
                'required' => true,
                'is_edit' => true,
                'list_show' => true,
                'default_value' => ''
            ),
            array(
                'name' => 'content',
                'cnname' => '评论内容',
                'type' => 'textarea',
                'type_extend' => '',
                'required' => true,
                'is_edit' => true,
                'list_show' => true,
                'default_value' => ''
            ),
            array(
                'name' => 'addtime',
                'cnname' => '评论时间',
                'type' => 'datetime',
                'type_extend' => '',
                'required' => true,
                'is_edit' => false,
                'list_show' => true,
                'default_value' => '0000-00-00 00:00:00'
            ),
            array(
                'name' => 'ip',
                'cnname' => '评论者ip',
                'type' => 'text',
                'type_extend' => '',
                'required' => false,
                'is_edit' => false,
                'list_show' => true,
                'default_value' => '127.0.0.1'
            )
        );

        $maker = new codemaker($module, $model, $table, $prikey, $fileds);
        $maker->store();//把生成结果保存到文件中

    }

    /**
     * 生成idcarea模块
     */
    private function makeidcarea(){

        $module = 'idcarea';//模型名称
        $model = 'idcarea';//通常与表名一致，也可以不一样，将生成 $model_Controller 和 $model_Model类文件
        $table = 'idcard_areas';//表名
        $prikey = 'id';//主键名

        $fileds = array(
            array(
                'name' => 'address',
                'cnname' => '区域地址',
                'type' => 'text',
                'type_extend' => '',
                'required'=>true,
                'is_edit'=>true,
                'list_show'=>true,
                'default_value' => '',
            ),
            array(
                'name' => 'level',
                'cnname' => '级别',
                'type' => 'radio',
                'type_extend' => array(1=>'省份或直辖市',2=>'市级',3=>'区/县'),
                'required'=>true,
                'is_edit'=>false,
                'list_show'=>true,
                'default_value' => '3'
            ),
            array(
                'name' => 'name',
                'cnname' => '区域名称',
                'type' => 'text',
                'type_extend' => '',
                'required'=>true,
                'is_edit'=>true,
                'list_show'=>true,
                'default_value' => ''
            )
        );

        $maker = new codemaker($module, $model, $table, $prikey, $fileds);
        $maker->store();//把生成结果保存到文件中

    }

    /**
     * 生成IP模块
     */
    private function makeip(){

        $module = 'iparea';//模型名称
        $model = 'iparea';//通常与表名一致，也可以不一样，将生成 $model_Controller 和 $model_Model类文件
        $table = 'ip_areas';//表名
        $prikey = 'ip';//主键名- iP地址

        $fileds = array(
            array(
                'name' => 'country',
                'cnname' => '国家',
                'type' => 'text',
                'type_extend' => '',
                'required'=>true,
                'is_edit'=>true,
                'list_show'=>true,
                'default_value' => '',
            ),
            array(
                'name' => 'province',
                'cnname' => '省份',
                'type' => 'text',
                'type_extend' => '',
                'required'=>true,
                'is_edit'=>true,
                'list_show'=>true,
                'default_value' => ''
            ),
            array(
                'name' => 'city',
                'cnname' => '城市',
                'type' => 'text',
                'type_extend' => '',
                'required'=>true,
                'is_edit'=>true,
                'list_show'=>true,
                'default_value' => ''
            ),
            array(
                'name' => 'county',
                'cnname' => '地区',
                'type' => 'text',
                'type_extend' => '',
                'required'=>true,
                'is_edit'=>true,
                'list_show'=>true,
                'default_value' => ''
            ),
            array(
                'name' => 'isp',
                'cnname' => '运营商',
                'type' => 'text',
                'type_extend' => '',
                'required'=>true,
                'is_edit'=>true,
                'list_show'=>true,
                'default_value' => ''
            )
        );

        $maker = new codemaker($module, $model, $table, $prikey, $fileds);
        $maker->store();//把生成结果保存到文件中
    }

    /**
     * 生成phone模块
     */
    private function makephone(){

        $module = 'phonearea';//模型名称
        $model = 'phonearea';//通常与表名一致，也可以不一样，将生成 $model_Controller 和 $model_Model类文件
        $table = 'phone_areas';//表名
        $prikey = 'id';//主键名- iP地址

        $fileds = array(
            array(
                'name' => 'pref',
                'cnname' => '手机号码前7位',
                'type' => 'text',
                'type_extend' => '',
                'required'=>true,
                'is_edit'=>true,
                'list_show'=>true,
                'default_value' => '',
            ),
            array(
                'name' => 'province',
                'cnname' => '省份',
                'type' => 'text',
                'type_extend' => '',
                'required'=>true,
                'is_edit'=>true,
                'list_show'=>true,
                'default_value' => ''
            ),
            array(
                'name' => 'city',
                'cnname' => '城市',
                'type' => 'text',
                'type_extend' => '',
                'required'=>true,
                'is_edit'=>true,
                'list_show'=>true,
                'default_value' => ''
            ),
            array(
                'name' => 'isp',
                'cnname' => '运营商',
                'type' => 'text',
                'type_extend' => '',
                'required'=>true,
                'is_edit'=>true,
                'list_show'=>true,
                'default_value' => ''
            ),
            array(
                'name' => 'code',
                'cnname' => '区号',
                'type' => 'text',
                'type_extend' => '',
                'required'=>true,
                'is_edit'=>true,
                'list_show'=>true,
                'default_value' => ''
            ),
            array(
                'name' => 'zip',
                'cnname' => '邮编',
                'type' => 'text',
                'type_extend' => '',
                'required'=>true,
                'is_edit'=>true,
                'list_show'=>true,
                'default_value' => ''
            ),
        );

        $maker = new codemaker($module, $model, $table, $prikey, $fileds);
        $maker->store();//把生成结果保存到文件中
    }

    /**
     * 测试代码生成模块
     */
    private function maketest(){
        $module = 'blog';//模型名称
        $model = 'comment';//通常与表名一致，也可以不一样，将生成 $model_Controller 和 $model_Model类文件
        $table = 'blog_comments';//表名
        $prikey = 'id';//主键名
        $fileds = array(
            array(
                'name' => 'title',//字段名称
                'cnname' => '标题',//字段中文名称(描述)
                'type' => 'text',//表单类型 - 字段类型，如:input,password,url,tel,email,textarea,radio,checkbox,select,file 等
                'type_extend' => '',//类型辅助扩展内容，没有则为空, radio,checkbox,select时为数组
                'required' => true,//true 不为空 false 可以为空
                'is_edit' => true, //是否可编辑
                'list_show' => true,//列表显示时是否显示
                'default_value' => ''//默认值
            ),
            array(
                'name' => 'content',
                'cnname' => '内容',
                'type' => 'textarea',
                'type_extend' => '',
                'required' => true,
                'is_edit' => true,
                'list_show' => false,
                'default_value' => ''
            ),
            array(
                'name' => 'author',
                'cnname' => '作者',
                'type' => 'text',
                'type_extend' => '',
                'required' => false,
                'is_edit' => true,
                'list_show' => true,
                'default_value' => ''
            ),
            array(
                'name' => 'ctime',
                'cnname' => '发布时间',
                'type' => 'datetime',
                'type_extend' => '',
                'required' => true,
                'is_edit' => true,
                'list_show' => true,
                'default_value' => '0000-00-00 00:00:00'
            ),
            array(
                'name' => 'email',
                'cnname' => 'Email',
                'type' => 'email',
                'type_extend' => '',
                'required' => true,
                'is_edit' => true,
                'list_show' => true,
                'default_value' => ''
            ),
            array(
                'name' => 'sex',
                'cnname' => '性别',
                'type' => 'radio',
                'type_extend' => array(1 => '十足的男性', 2 => '十足的女性', 3 => '有时呈男性，有时呈女性', 4 => '既不呈男性，也不呈女性'),
                'required' => true,
                'is_edit' => true,
                'list_show' => true,
                'default_value' => '1'
            ),
            array(
                'name' => 'love',
                'cnname' => '爱好',
                'type' => 'checkbox',
                'type_extend' => array(1 => '无尽的编程', 2 => '无尽的游玩', 3 => '无尽的睡觉', 4 => '无尽的发呆', 5 => '无尽的购物'),
                'required' => true,
                'is_edit' => true,
                'list_show' => true,
                'default_value' => '1'
            ),
            array(
                'name' => 'salary',
                'cnname' => '薪水',
                'type' => 'select',
                'type_extend' => array(1 => '月薪1000以下', 2 => '月薪1000 ~ 10000', 3 => '月薪10000以上'),
                'required' => true,
                'is_edit' => true,
                'list_show' => true,
                'default_value' => '1'
            ),
            array(
                'name' => 'headpic',
                'cnname' => '头像',
                'type' => 'file',
                'type_extend' => '',
                'required' => true,
                'is_edit' => true,
                'list_show' => false,
                'default_value' => '1'
            )
        );

        $maker = new codemaker($module, $model, $table, $prikey, $fileds);
        $maker->store();//把生成结果保存到文件中

    }

    /**
     * 生成Account模块
     */
    private function makeAccount(){
        $module = 'account';//模型名称
        $model = 'account';//通常与表名一致，也可以不一样，将生成 $model_Controller 和 $model_Model类文件
        $table = 'account';//表名
        $prikey = 'id';//主键名

        $fileds = array(
            array(
                'name' => 'account',
                'cnname' => '账号',
                'type' => 'text',
                'type_extend' => '',
                'required' => true,
                'is_edit' => true,
                'list_show' => true,
                'default_value' => ''
            ),
            array(
                'name' => 'passwd',
                'cnname' => '密码',
                'type' => 'password',
                'type_extend' => '',
                'required' => true,
                'is_edit' => true,
                'list_show' => true,
                'default_value' => '1',
                'pattern' => "[0-9a-zA-z]{6,20}",//pattern出现时，title必须配对出现
                'title' => "密码必须为数字或字母，长度为6-20位"
            ),
            array(
                'name' => 'keyno',
                'cnname' => '通讯秘钥',
                'type' => 'text',
                'type_extend' => '',
                'required' => false,
                'is_edit' => false,
                'list_show' => true,
                'default_value' => '1',
                'pattern' => "[0-9a-zA-z]{32,128}",//pattern出现时，title必须配对出现
                'title' => "通讯秘钥,必须为数字或字母，长度为32位"
            ),
            array(
                'name' => 'bindip',
                'cnname' => '绑定服务器IP', //为空为不绑定
                'type' => 'text',
                'type_extend' => '',
                'required' => false,
                'is_edit' => true,
                'list_show' => true,
                'default_value' => '127.0.0.1'
            ),
            array(
                'name' => 'loginip',
                'cnname' => '登录ip',
                'type' => 'text',
                'type_extend' => '',
                'required' => false,
                'is_edit' => false,
                'list_show' => true,
                'default_value' => '127.0.0.1'
            ),
            array(
                'name' => 'logintime',
                'cnname' => '登录时间',
                'type' => 'datetime',
                'type_extend' => '',
                'required' => true,
                'is_edit' => false,
                'list_show' => true,
                'default_value' => '0000-00-00 00:00:00'
            ),

            array(
                'name' => 'regtime',
                'cnname' => '注册时间',
                'type' => 'datetime',
                'type_extend' => '',
                'required' => true,
                'is_edit' => false,
                'list_show' => true,
                'default_value' => '0000-00-00 00:00:00'
            ),

        );


        $maker = new codemaker($module, $model, $table, $prikey, $fileds);
        $maker->store();
    }

    /**
     * 生成fileServer->fileinfo模块
     */
    private function makeFileInfo(){
        $module = 'fileServer';//模型名称
        $model = 'fileinfo';//通常与表名一致，也可以不一样，将生成 $model_Controller 和 $model_Model类文件
        $table = 'file_infos';//表名
        $prikey = 'id';//主键名

        $fileds = array(
            array(
                'name'=>'account_id',
                'cnname'=>'帐号ID',
                'type'=>'text',
                'type_extend' => '',
                'required' => true,
                'is_edit' => false,
                'list_show' => true,
                'default_value' => '0'
            ),
            array(
                'name' => 'file_name',
                'cnname' => '文件名',
                'type' => 'text',
                'type_extend' => '',
                'required' => true,
                'is_edit' => true,
                'list_show' => true,
                'default_value' => ''
            ),
            array(
                'name' => 'file_type',
                'cnname' => '文件类型',
                'type' => 'text',
                'type_extend' => '',
                'required' => true,
                'is_edit' => true,
                'list_show' => true,
                'default_value' => ''
            ),
            array(
                'name' => 'file_size',
                'cnname' => '文件大小',
                'type' => 'text',
                'type_extend' => '',
                'required' => true,
                'is_edit' => false,
                'list_show' => true,
                'default_value' => '0',
                'pattern' => "[0-9]{1,11}",//pattern出现时，title必须配对出现
                'title' => "文件大小,必须为数字"
            ),
            array(
                'name' => 'add_time',
                'cnname' => '创建时间',
                'type' => 'text',
                'type_extend' => '',
                'required' => true,
                'is_edit' => false,
                'list_show' => true,
                'default_value' => '0',
                'pattern' => "[0-9]{1,11}",//pattern出现时，title必须配对出现
                'title' => "创建时间戳,必须为数字"
            ),
            array(
                'name' => 'hash_id',
                'cnname' => '唯一HASH值',
                'type' => 'text',
                'type_extend' => '',
                'required' => true,
                'is_edit' => false,
                'list_show' => true,
                'default_value' => ''
            ),
            array(
                'name' => 'suffixe',
                'cnname' => '文件后缀名',
                'type' => 'text',
                'type_extend' => '',
                'required' => true,
                'is_edit' => false,
                'list_show' => true,
                'default_value' => ''
            ),

        );


        $maker = new codemaker($module, $model, $table, $prikey, $fileds);
        $maker->store();
    }


}