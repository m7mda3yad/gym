<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Plan extends Model{

                 public function add($request){
            $this->name      =  $request->input('name');
            $this->title     =  $request->input('title');
            $this->cost     =  $request->input('cost');
            $this->save();
    }
                 public function update_data($request){
                        $tname      =  $request->input('name');
                        $title     =  $request->input('title');
                        $cost     =  $request->input('cost');
                     $this->where('id',$request->input('id')
                      )->update(['name'=>$tname,'title'=>$title,'cost'=>$cost]);            
  
                    }

                    
             
  }
