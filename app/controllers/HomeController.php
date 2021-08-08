<?php
namespace App\Controllers;
use App\Models\Room;
use App\Models\Service;

use DateTime;

class HomeController extends BaseController{

    public function index(){

        $this->render('admin.baseHome.index');
    }


}

?>