<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App;
use App\models\Plan;
use Illuminate\Http\Request;
 
class PaymentProviderController extends Controller
{
        public function getCheckOutId(Request $request){
            $now = new \DateTime();
            $start   = $now->format('z');
            if(($start + 30)>365 )
                $end = ($start + 30)-365 ;
            else    
                $end = ($start + 30) ;
            $id =  $request->input('id') ;
            $trainer_id =  $request->input('trainer_id') ;
            $m= new \App\Member();
            $m->where('id',Auth::guard('member')->user()->id)
                    ->update(['start' => $start,
                           'end' => $end,
                        'statue' => 1,
                        'plan_id' => $id,
                        'trainer_id' => $trainer_id]);
                      return redirect('/profile');
        }
               //start end statue
        public function view(Request $request){
                    $plan = new App\Plan();
                    $id = $request->input('id') ;          
            $td = $request->input('trainer_id') ;          
              $plan = $plan->find($id)->first();
            return view('member.payment')->withPlan($plan)->withTd($td);
        }

        
        }










