<?php
namespace App\Http\Controllers\dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App;
class update extends Controller{
    
           public function update_member(Request $request){
                $request->validate([[
                'full_name' => 'required|max:100|min:3',        'email' => 'required|email|max:100|min:6',    
                'phone' => 'required|min:6|max:20',             'plan_id' => 'max:50', 
                'trainer_id' => 'max:50',],[
                'email' => 'error in email',                'phone' => 'error in phone',
                'plan_id' => 'error in plan_id ',                'trainer_id' => 'error in trainer_id',]]);
                if($this->check()){ 
                 $m= new App\Member();
                 $m=$m->update2( $request);
                return \Illuminate\Support\Facades\Redirect::back();}}
    
           public function update_trainer(Request $request){
                $request->validate([[
                'full_name' => 'required|max:100|min:3','email' => 'required|email|max:100|min:6',
                  'phone' => 'required|min:6|max:20',],[                 'full_name' => 'error in full_name',
                'email' => 'error in email',                'phone' => 'error in phone',
                'phone' => 'error in plan_id ',                'trainer_id' => 'error in trainer_id',]]);
            if($this->check()){ 
                 $m= new App\Trainer();
                 $m=$m->update2( $request);
            return \Illuminate\Support\Facades\Redirect::back();}}
     
           public function update_plan(Request $request){
                   if($this->check()){
                  $request->validate([
                'name' => 'required|max:100|min:2',
                'title' => 'required|min:3',
                'cost' => 'required|max:100|min:1',
                  ]);
                 $p = new App\Plan();
                 $p->update_data($request);       
           return  redirect()->back();}}

           public function update1(Request $request){
                    if($this->check()){
             if($request->input('flag')== 'ubdate_data'){
                        $po = new \App\User();
                        $name   =  $request->input('name');
                        $email    =  $request->input('email');
                        $id  = Auth::user()->id;
                        App\User::where('id',$id)->update(['name'=>$name,'email'=>$email]);
                        return redirect('dashboard');
                        }
                        
            if($request->input('flag')== 'ubdate_password'){
                    $new_password          =  $request->input('new_password');
                    $confirm_new_password  =  $request->input('confirm_new_password');
                    $id  = Auth::user()->id;        
                    if($new_password==$confirm_new_password)
        DB::update('update users set password = ?where id = ?',[$new_password,$id]);
                    }
        return view('admin');}
        }    


        public function check() {
              
               if(Auth::check())
                   return true;
                return view('home'); 
               }

    }