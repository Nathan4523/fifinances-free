<?php

namespace App\Http\Controllers;

use App\CostFixed;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CostFixedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $id_dinamic = Auth::user()->id;
        $cost_fixed = DB::table('tb_conta_fixa')
            ->where('codigo_usuario', $id_dinamic)
            ->get();

        return view('fixed_cost.main', ['cost_fixed' => $cost_fixed]);
    }

    public function store(Request $request)
    {
        $cost_fixed = CostFixed::create($request->all());
        $request->session()->flash('success', "Gasto fixo criado com sucesso");
        return redirect()->back();
    }

    public function show($id)
    {   
        $costfixed_id = CostFixed::find($id);

        return view('fixed_cost.edit', ['costfixed_id' => $costfixed_id]);
    }

    public function update(Request $request, $id)
    {
        $cost_fixed = CostFixed::find($id);
        $cost_fixed->update($request->all());
        $request->session()->flash('success', "Dados atualizados com sucesso");
        return redirect()->back();
    }

    public function delete($id)
    {
        CostFixed::find($id)->delete();

        $id_dinamic = Auth::user()->id;

        $cost = DB::table('tb_conta')->where('codigo_user_conta_simples', $id_dinamic)->limit(5)->get();

        $notes = DB::table('tb_anotacoes')->where('codigo_user_notas', $id_dinamic)->get();
            
        return view('home', ['cost' => $cost, 'notes' => $notes]);
    }
}