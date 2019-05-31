<?php

namespace App\Http\Controllers\Auth;

use App\AccountActivationCode;
use App\User;
use App\Http\Controllers\Controller;
use App\UserRole;
use App\UserRoleAssociation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $code = substr(md5(time()), 0, 31);
        $activation_code = AccountActivationCode::create([
            'code' => $code,
        ]);

        if ($activation_code) {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'is_active' => 0


            ]);
        }

        if($user){


//            $role=UserRoleAssociation::create([
//                'fk_urers_id'=>$user->id,
//                'fk_user_roles_id'=>2
//            ]);


            $url = 'loclhost/bd-gym/user/activate/code/' . $activation_code->code;
            $this->sendActivateUrl($user->email, $url, $user->name);
            return $user;
        }


    }

    private function sendActivateUrl($email, $url, $name = '')
    {
        $to = $email;
        $mail = Mail::send('website.emails.activate_link', ['activate_url' => $url], function ($m) use ($to, $name) {
            $m->from('info@kei-kun.com', 'BD-GYM');
//            $m->to($to, $name)->subject('ご登録の確認');
            $m->to($to, $name)->subject('Registration form');
        });
    }
}
