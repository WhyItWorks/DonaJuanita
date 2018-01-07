<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone' =>  'required|string|min:8',
            'rut' =>  'required|string|min:8',
        ],
        [
            'name.required' => 'El campo NOMBRE es obligatorio',
            'name.string' => 'Ingrese un NOMBRE valido',            

            'email.required' => 'El campo CORREO es obligatorio',
            'email.string' => 'Ingrese un CORREO valido',            
            'email.unique' => 'Ya existe una cuenta vinculada a este CORREO',

            'password.required' => 'El campo CONTRASEÑA es obligatorio',
            'password.string' => 'Ingrese una CONTRASEÑA valida',
            'password.min' => 'Ingrese una CONTRASEÑA con a lo menos 8 caracteres',
            'password.confirmed' => 'Las CONTRASEÑAS no coinciden',

            'phone.required' => 'El campo TELÉFONO es obligatorio',
            'phone.string' => 'Ingrese un TELÉFONO valido',
            'phone.min' => 'Ingrese un TELÉFONO valido',

            'rut.required' => 'El campo RUT es obligatorio',
            'rut.string' => 'Ingrese un RUT valido',
            'rut.min' => 'Ingrese un RUT valido',
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
            'rut' => $data['rut'],
            'password' => bcrypt($data['password'])
        ]);
        
    }
}
