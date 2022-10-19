<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customUser extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $guarded = [];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
