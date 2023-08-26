<?php

namespace App\Http\Controllers;

use App\Models\Parceiro;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		return view('home');
    }
    public function politica()
    {
		return view('politica');
    }
    public function quero_ser_parceiro(Request $request)
    {
        $parceiro = new Parceiro;
        $parceiro->nome   = $request->nome;
        $parceiro->email =  $request->email;
        $parceiro->phone   = $request->phone;
        $parceiro->save();
		return  view('home')->with('success', 'Obrigado, pelo teu contacto!');
    }
}
