<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Requests\registerRequest;
use App\Models\Users;
use Illuminate\Http\Request;
use Random\RandomException;
use function PHPUnit\Framework\isEmpty;

class AuthController extends Controller
{
    /**
     * @throws RandomException
     */
    function Register(registerRequest $req){

        $user = new Users();
        $user->name = $req -> input('userName');
        $user->email = $req -> input('userEmail');
        $salt = bin2hex(random_bytes(16));
        $user->salt = $salt;

        if($req->input('userPassword') == $req->input('userPasswordConfirm')) {
            $user->password = hash('sha256', $user->salt . $req->input('userPassword'));
        } else {
            return redirect()->back()->withInput()->with('unsuccessful','Password is wrong');

        }
        $user->save();
        return redirect()->route('home')->with('successful','You are registered!');
    }

    function login(AuthRequest $req){

    }




}
