<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades;
use App;
use App\Http\Middleware\Check;

class member extends Controller
{
  public function __construct(){      
             $this->middleware('auth:member');
             }
       
                   public  function member(){
                  $p        = new App\Plan();
                  $t        = new App\Trainer();
                  $p        = $p->all();
                  return view('member.xd')->withP($p)->withT($t);
               }
    
                   public function update(Request $request){
                       $this->myvalidate($request);
                     $m= new \App\Member();
                    // Auth::guard('member')->user()->full_name
                    $m->where('id',Auth::guard('member')->user()->id)
               ->update(['full_name'=>$request->input('full_name'),
                         'email'=>$request->input('email'),
                         'phone'=>$request->input('phone'),
                         'birthday'=>$request->input('birthday')]);
                    return redirect('/profile');
               }

                   public function delete_image(){
                   $image =new App\Member;
                   $image =$image->where('id',Auth::guard('member')->user()->id)->get();
                    foreach ($image as $image){}
    $image = $image->image;
                    if($image&&$image!="image.png"){      
                    $filePath = 'C:\xampp\htdocs\gym\public\img\profile\\'.$image;
                   if (file_exists($filePath)) 
                     unlink($filePath);
       }}
       
                   public function myvalidate(Request $request ) {
                $request->validate([
                    'full_name'     => 'required|max:100|min:3',
                    'email'    => 'email|max:100|min:6',
                    'phone'    => 'required|min:6|max:30|',
                    'birthday' => 'required'],
                [
                    'full_name' => 'please Enter your name','email' => 'please Enter your Email',
                    'phone' => 'please Enter your phone',
                    'birthday' => 'please Enter your birthday',]);}
       
                   public function  change_image(Request $request ){
                   $request->validate(['image'=>'mimes:jpg,png,jpeg,gif|max:2048']);
 $m=new App\Member();
                     $image_name=$_FILES['image']['name'];$image_tmp_name=$_FILES['image']['tmp_name'];
                     $name=rand(0,1000000).'_'.$image_name;
                     move_uploaded_file($image_tmp_name,'C:\xampp\htdocs\gym\public\img\profile\\'.$name );
                     $this->delete_image();
                    $m->where('id',Auth::guard('member')->user()->id)->update(['image'=>  $name]);
            return redirect('profile');
}

                   public function change_password(Request $request ){
        App\User::change_password($request,"member");
        return redirect('profile');
}
    }