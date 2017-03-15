<?php
// +----------------------------------------------------------------------
// | YunCMS
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://www.yunalading.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: jabber <2898117012@qq.com>
// +----------------------------------------------------------------------
/**
 * 页面路由
 */
return [
    'index' => 'home/index/index',
    'about' => function () {
        echo 'about';
    },
    /**
     * 获取子地区
     * $id 为数据库的parent_id
     */
    'area/:id' => function ($id) {
        echo $id;
    },
    'area' => function ($id = 0) {
        echo $id;
    },
];
