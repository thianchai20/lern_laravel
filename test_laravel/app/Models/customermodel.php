<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerModel extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primeryKey  = 'c_id';
    public $incrementing = true;
    public $timestamps = false;
}