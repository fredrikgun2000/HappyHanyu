<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    protected $table='data';
    protected $fillable=['hanzi','pinyin','arti','username','status'];
}
