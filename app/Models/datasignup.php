<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datasignup extends Model
{
    use HasFactory;
    protected $primeryKey="id";
    protected $table="user";
    protected $guarded=[];
}
