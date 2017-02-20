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


namespace app\admin\controller;

use app\common\controller\AdminBaseController;

/**
 * Class Index
 * @package app\admin\controller
 */
class Index extends AdminBaseController {

    public function index() {
        $this->redirect('/admin/user/login');
    }
}
