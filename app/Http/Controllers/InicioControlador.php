<?php

namespace App\Http\Controllers;


use Exception;
use App\Classes\Catalogs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\Clients\ClientCustomField;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Classes\Clients\ClientCustomField as CustomField;
use Illuminate\Contracts\View\View;

class InicioControlador extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function NuevoUsuarioForm(){
        dd('hola mund');
        return view();
    }
}
