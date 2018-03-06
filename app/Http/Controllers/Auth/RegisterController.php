<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request as Req;

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
    protected $redirectTo = '/';

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
     * @param  array  $ssdata
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {        
        return Validator::make($data, [
            'name' => 'required|string|min:3',
            'email' => 'required|string|email|unique:users',           
            'phone' =>  'required|string|min:8',
            // 'rut' =>  'required|string|min:8',
            'password' => 'required|string|min:6|confirmed'
        ],
        [
            'name.required' => 'name/ Este campo es obligatorio',
            'name.string' => 'name/ Ingrese un nombre valido',            
            'name.min' => 'name/ Ingrese un nombre valido',

            'email.required' => 'email/ Este campo es obligatorio',
            'email.string' => 'email/ Ingrese un correo valido',
            'email.email' => 'email/ Ingrese un correo valido',                        
            'email.unique' => 'email/ Dirección de correo en uso',
            
            'phone.required' => 'phone/ Este campo es obligatorio',
            'phone.string' => 'phone/ Ingrese un número de telefónico valido',
            'phone.min' => 'phone/ Ingrese un número de telefónico valido',

            // 'rut.required' => 'El campo RUT es obligatorio',
            // 'rut.string' => 'Ingrese un RUT valido',
            // 'rut.min' => 'Ingrese un RUT valido',

            'password.required' => 'password/ Este campo es obligatorio',
            'password.string' => 'password/ Ingrese una contraseña valida',
            'password.min' => 'password/ Debe contener al menos 8 carácteres',
            'password.confirmed' => 'password-confirm/ Las contraseñas no coinciden'          
        ]
    );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {                
        return User::create([
            'name' => $data['name'],            
            'email' => $data['email'],
            'phone' => $data['phone'],

            // 'rut' => $data['rut'],
            'password' => bcrypt($data['password'])
        ]);
        
    }
    public function showRegistrationForm(Req $request)
    {
        $name = $request->input('name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        
        return view('auth.register')->with(compact('name','phone','email'));
    }
}
