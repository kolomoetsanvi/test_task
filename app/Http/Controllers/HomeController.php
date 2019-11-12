<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    protected $user;       // данные зарегистрированного пользователя
    protected $template;   // шаблон
    protected $vars;       // данные для передачи в шаблон

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $this->user = Auth::user();
        if ($this->user->role == 'admin'){


            return view('pages/adminPage');
        }
    }



  //
  //
}
