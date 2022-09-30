<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonHoc extends Model
{
    use HasFactory;
    protected $table ="monhoc";
    public function phanmon(){
        return $this->hasMany('App\Models\PhanMon','id_monhoc','id');
    }
}
