<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerController extends Controller     //Esto se nos agrega solo al crear el controlador con "php artisan make:controller PrimerController"  
{
    
    public function home()               //Aqui delegamos subfunciones del archivo web.php para dejar ese archivo mas limpio
    {
        return view('home');
    }
    
    public function paginadecontacto() 
    {
        return view('paginaDeContacto');
    }

    public function quienessomos() 
    {
        return view('quienesSomos');
    }

    public function aboutus() 
    {
        return view('aboutUs');
    }

    function donde() 
    {
        return view('donde');
    }

}
