<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test1 extends Model
{
    use HasFactory;
    public function _Construct()
    {
        $this->v = [];
    }
    public function index(){
        $this->v['tieude']= "xin chao";
        $objtest = new test1();
        $tests = $objtest->loadlist();
        $this->v['tests'] = $tests;
        return view( 'test.index',$this->v);
    }
}
