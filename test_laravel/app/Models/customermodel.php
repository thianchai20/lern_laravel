<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customermodel extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primeryKey  = 'c_id';
    public $incrementing = true;
    public $timestamps = false;
}