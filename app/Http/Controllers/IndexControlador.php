<?php

namespace App\Http\Controllers;


use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\View\View;

class IndexControlador extends Controller
{
    //
    public function Index(){
        return view('login');
    }

    public function NewUserForm(){
        dd('hola mund');
        return view();
    }

    public function PasswordForm()
    {
        dd('hola mund');
        return view();
    }
}
