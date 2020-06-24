<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App;
class mange extends Controller{

           public function __construct(){      
             $this->middleware('admin');
             }
        
           public function admin(){
             return view('admin.admin');
                }                
                
           public  function dashboard(){
                        $m = new \App\Member();     $m =  $m->all();
                        $t = new \App\Trainer();    $t =  $t->all();
                        $p = new \App\Plan();       $p =  $p->all();
                    return view('admin.dashboard')->withM($m)->withT($t)->withP($p);
               }
       
           public function view_trainer(){
                        $t = App\Trainer::all();
                      return view('admin.trainers')->withT($t);
            }
            
           public function view_member(){
                        $m = App\Member::all();
                      return view('admin.members')->withM($m);
            }
            
           public function view_plan(){
                    $p=App\Plan::all();
                    return view('admin.plan')->withP($p);;
                }
                
           public function view_one_plan(Request $request){
                $id=$request->input('id');
              if(($p= \App\Plan::find($id)))
                       return view ('admin.myplan')->withP($p);
                    else return redirect('dashboard');
            }
            
           public function view_member_profile(Request $request){
                $id=$request->input('id');
              if(($m= \App\Member::find($id)))
                       return view ('admin.user_profile')->withM($m);
                    else return redirect('dashboard');
                    }
                    
           public function view_trainer_profile(Request $request){
                        $id=$request->input('id');
                        $t= \App\Trainer::find($id);
                       return view ('admin.trainer')->withT($t);}
   }
?>
 