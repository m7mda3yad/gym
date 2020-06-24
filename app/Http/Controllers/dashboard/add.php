<?php
namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App;

class add extends Controller
{
            public function addmember(Request $request){
                    if($this->check()) {if($request->isMethod('post')){
                              $this->add($request);            
                            return redirect('dashboard');}}
            }
     
            public function addtrainer(Request $request){
                 if($this->check()) {
                        if($request->isMethod('post')){
                        $request->validate([
                     'name' => 'required|max:100|min:3',
                     'email' => 'required|email|max:100|min:6',
                     'password' =>'required|min:6|max:30|',
                     'shift' => 'required',
                     'full_name' => 'required',
                     'plan' => 'required',
                     'shift' => 'required',
                     'gender' => 'required',
                     'phone' => 'required',
                 ]);
                      $trainer = new \App\Trainer();
                      $trainer->add($request); 
                        }
                                return redirect('dashboard');}
        }    

            public function add(Request $request){
                      if($this->check()){
                            $request->validate([
                            'name' => 'required|max:100|min:3',
                            'email' => 'required|email|max:100|min:6',
                            'password' => 'required|min:6|max:30',]);
                       $member= new App\Member(); 
                          $member=$member->add($request);
                               return redirect('dashboard');
                               
                      }}
      
            public function addplan(Request $request){
            if($this->check()) {
               $request->validate([
               'name' => 'required|max:30|min:3',
               'title' => 'required|max:100|min:4',
               'cost' => 'required|max:5|min:1',]);  
                $plan         =new App\Plan();
                $plan->add($request);
               return redirect('dashboard');}
}
  public function check() {
              
               if(Auth::check())
                   return true;
                return view('home'); 
               }

                    }
