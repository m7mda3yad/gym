<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

    class Trainer extends Authenticatable
    { 
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
        
        public $table="trainers";

                       public function update2($request){
                   $this->where('id', $request->input('id'))->update([
                        'full_name' => $request->input('full_name')
                        ,'phone' => $request->input('phone')
                        ,'email' => $request->input('email')
                        ,'phone' => $request->input('phone')
                           ]);
                        }

                       public function delete2($request){
                        $d=$this->find($request->input('id'));
                        if($this->destroy($request->input('id'))){
                        $ds =new Member();
                        $m =new Member();
                        $m=$m->where('trainer_id',$request->input('id'))->get();
                        foreach ($m as $data)
                        $ds->where('id', $data->id)->update(['trainer_id' => 0]);}}
    
                       public function add($request){
                                    $this->name       =  $request->input('name');
                                    $this->email      =  $request->input('email');
                                    $this->password   =  Hash::make($request->input('password'));
                                    $this->full_name  = $request->input('full_name') ;
                                    $this->plan_id    =  $request->input('plan');
                                    $this->shift      =  $request->input('shift');
                                    $this->birthday   =  $request->input('birthday');
                                    $this->gender     =  $request->input('gender');
                                    $this->phone      =  $request->input('phone');
                                    $this->save();    
                      }
    }