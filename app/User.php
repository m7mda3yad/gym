<?php
namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    use Notifiable;

        protected $fillable = 
        [
            'name', 'email', 'password','type',
        ];

        protected $hidden = 
        [
            'password', 'remember_token',
        ];

        protected $casts = 
        [
            'email_verified_at' => 'datetime',
        ];

        public $table="users";
        
            
                public function change_password(Request $request ,$guard ){
                    $password              =  $request->input('password');
                    $new_password          =  $request->input('new_password');
                    $confirm_new_password  =  $request->input('confirm_new_password');
                    $id  =Auth::guard($guard)->user()->id;
                    if($new_password==$confirm_new_password){
                    if(Hash::check($new_password,Auth::guard($guard)->user()->password)){
                    $password  = Hash::make($confirm_new_password); 
                    if($guard=="member")   return Member::where($id)->update(['password'=>$password]);
                    if($guard=="trainer")  return Trainer::where($id)->update(['password'=>$password]);
                    }
                }
                }
}

