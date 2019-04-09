<?php

namespace App\Http\Controllers;

use App\User;
use App\YieldVaried;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class YieldVariedController extends Controller
{
    public function index()
    {

        $id_dinamic = Auth::user()->id;
        $yield = DB::table('tb_rendimento_var')
            ->where('code_user', $id_dinamic)
            ->get();

        return view('yield.main', ['yield' => $yield]);
    }

    public function store(Request $request)
    {
        $yied = YieldVaried::create($request->all());
        $request->session()->flash('success', "Cadastrado com sucesso");
        return redirect()->back();
    }

    public function show($id)
    {
        $yield_id = YieldVaried::find($id);
        return view('yield.edit', ['yield_id' => $yield_id]);
    }

    public function update(Request $request, $id)
    {
        $yield_id = YieldVaried::find($id);
        $yield_id->update($request->all());
        $request->session()->flash('success', "Dados atualizados com sucesso");
        return redirect()->back();
    }


    public function delete($id)
    {
        YieldVaried::find($id)->delete();

        $id_dinamic = Auth::user()->id;

        $cost = DB::table('tb_conta')->where('codigo_user_conta_simples', $id_dinamic)->limit(5)->get();

        $notes = DB::table('tb_anotacoes')->where('codigo_user_notas', $id_dinamic)->get();
            
        return view('home', ['cost' => $cost, 'notes' => $notes]);
    }
}
