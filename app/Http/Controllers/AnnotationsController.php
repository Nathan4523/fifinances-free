<?php

namespace App\Http\Controllers;

use App\Annotations;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AnnotationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_dinamic = Auth::user()->id;
        
        $notes = DB::table('tb_anotacoes')->where('codigo_user_notas', $id_dinamic)->get();
            
        return view('annotations.main', ['notes' => $notes]);
    }

    public function store(Request $request)
    {
        $notes = Annotations::create($request->all());
        $request->session()->flash('success', "Anotação criado com sucesso");
        return redirect()->back();
    }

    public function edit($id)
    {
        $notes_id = Annotations::find($id);
        return view('annotations.edit', ['notes_id' => $notes_id]);
    }

    public function show($id)
    {   
        $notes_id = Annotations::find($id);
        return view('annotations.show', ['notes_id' => $notes_id]);
    }

    public function update(Request $request, $id)
    {
        $notes_id = Annotations::find($id);
        $notes_id->update($request->all());
        $request->session()->flash('success', "Anotação atualizado com sucesso");
        return redirect()->back();
    }

    public function delete($id)
    {   
        Annotations::find($id)->delete();

        $id_dinamic = Auth::user()->id;

        $cost = DB::table('tb_conta')->where('codigo_user_conta_simples', $id_dinamic)->limit(5)->get();

        $notes = DB::table('tb_anotacoes')->where('codigo_user_notas', $id_dinamic)->get();
            
        return view('home', ['cost' => $cost, 'notes' => $notes]);
    }
}
