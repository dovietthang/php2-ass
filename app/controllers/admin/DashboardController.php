<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;


class DashboardController extends BaseController{

    public function index(){
        $this->render('admin.baseHome.index');
    }
}
?>