<?php

namespace App\Http\Controllers;

use App\Cost;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $id_dinamic = Auth::user()->id;
        
        // $cost = DB::table('tb_conta')
        //     ->join('users', 'tb_conta.codigo_user_conta_simples', '=', 'users.id')
        //     ->where('users.id', '=', $id_dinamic)
        //     ->get();

        $cost = DB::table('tb_conta')->where('codigo_user_conta_simples', $id_dinamic)->get();
            
        return view('cost.main', ['cost' => $cost]);
        
    }

    public function show($id)
    {
        $cost_id = Cost::find($id);
        return view('cost.edit', ['cost_id' => $cost_id]);
    }

    public function store(Request $request)
    {
        $cost = Cost::create($request->all());
        $request->session()->flash('success', "Gasto criado com sucesso");
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {  
        $cost_update = Cost::find($id);
        $cost_update->update($request->all());
        $request->session()->flash('success', "Dados atualizados com sucesso");
        return redirect()->back();
    }

    public function delete($id)
    {
        Cost::find($id)->delete();

        $id_dinamic = Auth::user()->id;

        $cost = DB::table('tb_conta')->where('codigo_user_conta_simples', $id_dinamic)->limit(5)->get();

        $notes = DB::table('tb_anotacoes')->where('codigo_user_notas', $id_dinamic)->get();
            
        return view('home', ['cost' => $cost, 'notes' => $notes]);
    }   
}