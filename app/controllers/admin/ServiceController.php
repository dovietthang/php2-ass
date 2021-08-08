<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Service;
use App\Models\Room_service;
use App\Models\Room;

class ServiceController extends BaseController{

    public function index(){
        $services = Service::all();
        $this->render('admin.service.index', ['services' => $services]);

    }

    public function addForm(){
        $this->render('admin.service.add-form');
    }

    public function editForm($id){
        $model = Service::find($id);
        if(!$model){
            header('location: ' . BASE_URL . 'services');
            die;
        }

        if($imgFile['size'] > 0){
            $filename = uniqid() . '-' . $imgFile['name'];
            move_uploaded_file($imgFile['tmp_name'], './public/uploads/' . $filename);
            $filename = 'public/uploads/' . $filename;
        }
    

        $model->icon = $filename;
        $model->save();  
        $this->render('admin.room.edit-form', ['model' => $model]);

    }


    public function saveAdd(){

        $requestData = $_POST;
        $imgFile = $_FILES['icon'];

        $model = new Service();

        $model->fill($requestData);

        $filename = "";
        // nếu có ảnh up lên thì lưu ảnh
        if($imgFile['size'] > 0){
            $filename = uniqid() . '-' . $imgFile['name'];
            move_uploaded_file($imgFile['tmp_name'], './public/uploads/' . $filename);
            $filename = 'public/uploads/' . $filename;
        }
        $model->icon = $filename;
        $model->save();
        header('location: ' . BASE_URL . 'services');

        
    }
    
    public function saveEdit($id){

        $requestData = $_POST;
        $imgFile = $_FILES['image'];

        $model = Service::find($id);

        $model->fill($requestData);

        $filename = "";
        // nếu có ảnh up lên thì lưu ảnh
        if($imgFile['size'] > 0){
            $filename = uniqid() . '-' . $imgFile['name'];
            move_uploaded_file($imgFile['tmp_name'], './public/uploads/' . $filename);
            $filename = 'public/uploads/' . $filename;
        }
        $model->image = $filename;
        $model->save();
        header('location: ' . BASE_URL . 'services');

        
    }

    public function remove(){
        $removeId = isset($_GET['id']) ? $_GET['id'] : null;
        // kiểm tra xem id có thật hay không
        // $model = Room::find($removeId);
        $model = Service::destroy($removeId);

        header('location: ' . BASE_URL . 'services');
        die;

    }
}
?>