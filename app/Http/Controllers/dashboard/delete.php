<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App;

class delete extends Controller
{

      public function delete_member(Request $request){
             if($this->check()) {    
                  $m =new App\Member();
                $m->delete2($request);    
                return redirect('mytrainers');}
            }
   
     public function delete_trainer(Request $request){
             if($this->check()) {    
                        $m =new App\Trainer();
                $m->delete2($request);    
                return redirect('mymembers');}
             }

   
             
             public function check() {
              
               if(Auth::check())
                   return true;
                return view('home'); 
               }

}
