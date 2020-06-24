<?php
namespace App\Http\Controllers\general;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
      public function login (Request $request){        
            if($request->input('type')==1)   $table = 'trainer';                     
            else                             $table = 'member';
            $remember_me = $request->has('remember_me')?true :false;
            if(auth()->guard($table)->attempt(['email' =>$request->input('email'),'password'=>$request->input('password')]))
                return redirect('/home');            
                return redirect()->back()->with(['error'=>'هناك خطا بالبيانات']);}

      public function Admin_View_Login() {
          return view ('dashboard.auth.login');
          } 
          
      public function Admin_login (Request $request){                        
//return  ' emai = '.'  =  '.$request->input('email').'    '.'  password = '.$request->input('password');

          $remember_me = $request->has('remember_me')?true :false;
            if(auth()->guard()->attempt(['email' =>$request->input('email'),'password'=>$request->input('password')]))
//            return    var_dump (Auth::user()->id);
            return redirect('/dashboard');
            return redirect()->back()->with(['error'=>'هناك خطا بالبيانات']);       
      }
  }