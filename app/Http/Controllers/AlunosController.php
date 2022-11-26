<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = Alunos::all()->where('nome', '!=', null);
        return view('welcome', ['dados' => $dados]);
    }

    public function paisagem()
    {
        $dados = Alunos::all()->where('nome', '!=', null);
        return view('welcome-paisagem', ['dados' => $dados]);
    }

}
