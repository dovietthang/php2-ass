<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Room extends Model{
    protected $table = 'rooms';
    public $fillable = [
        'room_no', 'floor', 'image','price', 'detail','updated_at', 'created_at'
    ];


    public function servicess(){
        return $this->belongsToMany(Service::class, 'room_services', 'room_id', 'service_id');
    }
 
    public function roomServicess(){
        return $this->hasMany(Room_service::class, 'room_id',);
    }

    public function checkroomServicess(){
        return $this->hasMany(Room_service::class, 'service_id');
    }


} 

?>