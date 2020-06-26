<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App;
class website extends Controller
{
     public function home()   
    {
         return view ('site.home');
    }
    
    public  function aboutUs()
     {
        return view ('site.aboutUs');   
     }
    
     public  function gallery()
     {
        return view ('site.gallery');   
     }
    
     public  function contact()
     {
         return view ('site.contact');   
     }
     public  function contact2(Request $request)
     {       
         if($request->input('massage')!=null&&$request->input('email')!=null)
\Illuminate\Support\Facades\DB::insert("insert into massage(body,email)value(?,?)",
        [$request->input('massage'),$request->input('email')]);                        
         return redirect()->back();   
     }
     public  function update_site(Request $request) {
$x = new mange();
if($x->check()){
         $request->validate([
             'email' => 'required|max:100|min:6',
             'facebook' => 'required|max:100|min:6',
             'twitter' => 'required|max:100|min:6',
             'youtube' => 'required|max:100|min:6',
             'site_phone' => 'required|max:20|min:6',
             'site_name' => 'required|max:20|min:2',
             'site_url' => 'required|max:100|min:4',
         ]);
$d = new App\Web_data();
$d->where('id',1)->update(
    ['email'=>$request->input('email'),
    'facebook'=>$request->input('facebook'),
    'twitter'=>$request->input('twitter'),
    'youtube'=>$request->input('youtube'),
    'site_phone'=>$request->input('site_phone'),
    'site_name'=>$request->input('site_name'),
     'site_url'=>$request->input('site_url')]);

return redirect('site_data');}
}    
        function site_data()
       {
            $d = new App\Web_data();
            $d=$d->find(1);
    return view ('admin.web_data')->withD($d);   
                }

                public function feedback(Request $request)
                        {
if($request->input('statu')==1 && $request->input('massage')!=null && $request->input('trainer')!=null)

\Illuminate\Support\Facades\DB::insert("insert into feedback(body,member_id,trainer_id)value(?,?,?)",[$request->input('massage'),Auth::guard('trainer')->user()->id,trainer_id]);
else 
if($request->input('massage')!=null && $request->input('trainer')!=null)
\Illuminate\Support\Facades\DB::insert("insert into massage(body,email)value(?,?)"
,[$request->input('massage'),Auth::guard('member')->user()->email]);                        
return redirect()->back();

                        }
                
                
                
       }
