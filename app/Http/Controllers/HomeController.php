<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * primera instancia la funcion index esta declarada de esta forma
     *     public function index()
     *    {
     *       return view('home');
    *      }
     */
    public function __construct()

    // esto demuestra que solo un usuario autenticado podra acceder a home
    //ESTE CONTROLADOR SE UTILIZARA PARA EMPEZAR A CREAR NUESTRA PAGINA
    //ES UNA REESTRICCION!
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('posts');
    }
}
