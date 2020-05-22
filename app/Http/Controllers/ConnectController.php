<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Hash, Auth;
use App\User;

class ConnectController extends Controller{

    public function __construct(){
        $this->middleware('guest')->except(['getLogout']);
    }


    public function getLogin(){
        return view('connect.login');
    }
    public function postLogin(Request $request){
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ];
        $messages = [
            'email.required' => 'Su correo electrónico es requerido.',
            'email.email' => 'El formato de su correo electrónico es inválido.',
            'password.required' => 'Por favor, escriba una contraseña.',
            'password.min' => 'La contraseña debe tener al menos 8 carácteres.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert', 'danger');
        else:
            if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], true)):
                return redirect('/');
            else:
                return back()->with('message', 'Correo electrónico o contrasña errónea.')->with('typealert', 'danger');
            endif;
        endif;
    }
    public function getRegister(){
        return view('connect.register');
    }
    public function postRegister(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email', //nombre tabla de usuarios
            'password' => 'required|min:8',
            'cpassword' => 'required|min:8|same:password'
        ];
        $messages = [
            'name.required' => 'Su nombre es requerido.',
            'email.required' => 'Su correo electrónico es requerido.',
            'email.email' => 'El formato de su correo electrónico es inválido.',
            'email.unique' => 'Ya existe un usuario registrado con este correo electrónico.',
            'password.required' => 'Por favor, escriba una contraseña.',
            'password.min' => 'La contraseña debe tener al menos 8 carácteres.',
            'cpassword' => 'Es necesario confirmar la contraseña',
            'cpassword.min' => 'La contraseña debe tener al menos 8 carácteres.',
            'cpassword.same' => 'Las contraseñas no coinciden.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message', 'Se ha producido un error.')->with('typealert', 'danger');
        else:
            $user = new User;
            $user->name = e($request->input('name'));
            $user->email = e($request->input('email'));
            $user->password = Hash::make($request->input('password'));

            if($user->save()):
                return redirect('\login')->with('message', 'Su usuario se creó con éxito. Ahora puede iniciar sesión')->with('typealert', 'success');
            endif;

        endif;
    }
    
    public function getLogout(){
        Auth::logout();
        return redirect('/');
    }
}