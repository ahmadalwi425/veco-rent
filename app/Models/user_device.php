<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\device;

class user_device extends Model
{
    use HasFactory;
    protected $table = 'user_device';
    protected $guarded = [];
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function device(){
        return $this->belongsTo(device::class, 'id_device');
    }
}
