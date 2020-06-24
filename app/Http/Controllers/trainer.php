<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class trainer extends Controller { 
 
        public function __construct(){      
             $this->middleware('auth:trainer');
             }
    
        public  function trainer2(){
            return view ('trainer.trainer_profile');
            }
   
        public function  change_image(Request $request ){
                   $request->validate(['image'=>'mimes:jpg,png,jpeg,gif|max:2048']);
                 $m=new \App\Trainer();
                     $image_name=$_FILES['image']['name'];$image_tmp_name=$_FILES['image']['tmp_name'];
                     $name= rand(0,1000000).'_'.$image_name;
                     move_uploaded_file($image_tmp_name,'C:\xampp\htdocs\gym\public\img\profile\\'.$name );
                     $this->delete_image();
                    $m->where('id',Auth::guard('trainer')->user()->id)->update(['image'=>  $name]);
            return redirect('trainer');
}
       
        public function password(Request $request ){
         $x= new  \App\User();   
                        $x->change_password($request,"trainer");
         return redirect('trainer');
}
 
        public function edit_trainer(Request $request){
                $request->validate([
                'name' => 'required',
                'email' => 'required',
                'full_name' => 'required',
                'phone' => 'required',]);
                        $po = new \App\Trainer();
                         $name           =  $request->input('name');
                         $email          =  $request->input('email');
                         $full_name      =  $request->input('full_name');
                         $phone          = ($request->input('phone'));                        
                         $id             =  Auth::guard('trainer')->user()->id ;
                        $po->where('id',$id)->update(['email'=>$email,'full_name'=>$full_name,'phone'=>$phone,'name'=>$name]);
                        return redirect('/trainer');}                        
    
        public function delete_image(){
                   $image =new \App\Trainer();
                   $image =$image->where('id',Auth::guard('trainer')->user()->id)->get();
                    foreach ($image as $image){}
                    $image = $image->image;
                    if($image&&$image!="image.png"){      
                    $filePath = 'C:\xampp\htdocs\gym\public\img\profile\\'.$image;
                    if (file_exists($filePath)) 
                     unlink($filePath);
       }}
 
        public  function take_attendance(Request $request)    {
            $t = new \App\Member();
            //$t= where('trainer_id',Auth::user()->id);
            $x="";
            foreach($request->member as $member_id ){
                if(($t->find($member_id)))
        \Illuminate\Support\Facades\DB::insert
           ("insert into attendance(member_id,trainer_id,date)value(?,?,?)",
        [$member_id,Auth::guard('trainer')->user()->id, date("Y/m/d")]);
}
          return redirect('take_attendance');}

        public  function attendance(){
        $m = new \App\Member();
        $m= $m->where('trainer_id',Auth::guard('trainer')->user()->id)->get();
       if($m->count()>0)
        return view ('trainer.attendance')->withM($m);
       else         return redirect('traines');

       }
       }