<?php
namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Contracts\JWTSubject;
class Member extends  Authenticatable  implements JWTSubject{
    protected $fillable = 
        [
            'name', 'email', 'password','type' ,'full_name','gender','birthday','phone'
        ];

        protected $hidden = 
        [
            'password', 'remember_token',
        ];

        protected $casts = 
        [
            'email_verified_at' => 'datetime',
        ];
         public $table="members";

            public function update2($request){
                   $this->where('id', $request->input('id'))->update([
                         'full_name' => $request->input('full_name')
                        ,'phone' => $request->input('phone')
                        ,'plan_id' => $request->input('plan_id')
                        ,'email' => $request->input('email')
                        ,'trainer_id' => $request->input('trainer_id')]);
            }

            public function delete2($request){
                  $this->destroy($request->input('id'));
            }        

            public function add($request){
                $this->name      =  $request->input('name');
                $this->email     =  $request->input('email');
                $this->password  =  Hash::make($request->input('password'));      
                $this->full_name =  $request->input('full_name');
                $this->phone     =  $request->input('phone');
                $this->gender    =  $request->input('gender');
                $this->birthday  =  $request->input('birthday');
                if($request->has('plan_id') )$this->plan_id   =  $request->input('plan_id');
                if($request->has('trainer_id') )$this->trainer_id   =  $request->input('trainer_id');
                $this->save();
                    }

            public function update_password ($request){   
                        $new_password          =  $request->input('new_password');
                        $confirm_new_password  =  $request->input('confirm_new_password');
                        $id  = Auth::guard('member')->user()->id;        
            if($new_password==$confirm_new_password)
            DB::update('update member set password = ?where id = ?',[$new_password,$id]);
                    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

}
       