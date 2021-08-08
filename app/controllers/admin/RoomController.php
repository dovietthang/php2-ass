<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\Service;
use App\Models\Room_service;
use App\Models\Room;

class RoomController extends BaseController{

    public function index(){
        $rooms = Room::all();
        $this->render('admin.room.index', ['rooms' => $rooms]);

    }

    public function addForm(){
        $rooms = Room::all();
        $services = Service::all();
        $room_services = Room_service::all();
        $this->render('admin.room.add-form', ['services' => $services,'rooms' => $rooms, 'room_services'=>$room_services]);
    }

    public function editForm($id){
        $model = Room::find($id);
        if(!$model){
            header('location: ' . BASE_URL . 'rooms');
            die;
        }
        $services = Service::all();
        $idRoom = $model->id;


        
        $model->load('servicess' , 'roomServicess' , 'checkroomServicess');
        $room_services = Room_service::where( 'room_id', $idRoom )->get();

 


        $this->render('admin.room.edit-form', ['model' => $model,'services' => $services,'room_services' =>$room_services]);

    }


    // hoàn thành việc lưu dữ liệu từ form để tạo mới sp + gallery
    public function saveAdd(){

        $requestData = $_POST;
        $imgFile = $_FILES['image'];

        $model = new Room();

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
        header('location: ' . BASE_URL . 'rooms');

        
    }
    
    public function saveEdit($id){

        $requestData = $_POST;
        $imgFile = $_FILES['image'];

        $model = Room::find($id);

        $model->fill($requestData);


        // $model = Room_service::find($id);
        // $idService = $_POST['service_id'];
        // $dataSave = [
        //     'star_total' => $_POST['star_total']
        // ];
        // $model->fill($dataSave);



        $filename = "";
        // nếu có ảnh up lên thì lưu ảnh
        if($imgFile['size'] > 0){
            $filename = uniqid() . '-' . $imgFile['name'];
            move_uploaded_file($imgFile['tmp_name'], './public/uploads/' . $filename);
            $filename = 'public/uploads/' . $filename;
        }
        $model->image = $filename;
        $model->save();
        header('location: ' . BASE_URL . 'rooms');

        
    }

    public function remove(){
        $removeId = isset($_GET['id']) ? $_GET['id'] : null;
        // kiểm tra xem id có thật hay không
        // $model = Room::find($removeId);
        $model = Room::destroy($removeId);

        header('location: ' . BASE_URL . 'rooms');
        die;

    }
}
?>