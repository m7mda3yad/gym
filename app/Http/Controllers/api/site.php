<?php

namespace App\Http\Controllers\api;
use App\Traits\GeneralTrait;
use App\Http\Controllers\Controller;
use App\Web_data;
use Illuminate\Http\Request;

class site extends Controller
{
 use GeneralTrait ;

    function index()
    {
        $d = new Web_data();
        $d=$d->find(1);
       return  $this->returnData('Web_data',$d,'success');

//        return response()->json($d);
        
        
        
    }
     
}
