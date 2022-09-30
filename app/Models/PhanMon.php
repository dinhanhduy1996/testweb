<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhanMon extends Model
{
    use HasFactory;
    protected $table="phanmon";
    public function baihoc(){
        return $this->hasMany('App\Models\BaiHoc','id_phanmon','id');
    }
}
