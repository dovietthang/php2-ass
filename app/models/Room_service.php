<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Room_service extends Model{
    protected $table = 'room_services';
    public $fillable = [
        'room_id', 'service_id', 'additional_price'
    ];
}

?>