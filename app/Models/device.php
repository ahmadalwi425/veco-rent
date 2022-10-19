<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user_device;

class device extends Model
{
    use HasFactory;
    protected $table = 'list_device';
    protected $guarded = [];
    protected $primaryKey = 'prim_id';
    public $timestamps = false;
    public function user_device(){
        return $this->hasMany(user_device::class, 'prim_id');
    }
}
