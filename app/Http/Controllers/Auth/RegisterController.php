<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Member;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()    {
        $this->middleware('guest');
    }

    protected function validator(array $data)    {
        return Validator::make($data, [
            'full_name' => ['required','min:4'],
            'name' => ['required', 'string', 'max:255','min:4','unique:members'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:members'],
            'password' => ['required', 'min:6', 'confirmed'],
            'gender' => ['required','min:4','max:6'],
            'birthday' => ['required','min:6'],
            'phone' => ['required','min:6,number']
         ]);
    }

    protected function create(array $data){
        return Member::create([
            'full_name' =>   $data['full_name'],
            'name' =>        $data['name'],
            'email' =>       $data['email'],
            'gender' =>      $data['gender'],
            'birthday' =>    $data['birthday'],
            'phone' =>       $data['phone'],
            'type' =>           3,
            'password' =>   Hash::make($data['password']),
        ]);
    }
}