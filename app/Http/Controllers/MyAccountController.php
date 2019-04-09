<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{

    public function index()
    {
        $id_dinamic = Auth::user()->id;

        $user = DB::table('users')->where('id', $id_dinamic)->get();
            
        return view('my_account', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user_id = MyAccount::find(id);
        $user_id->update($request->all());
        $data = $request->all();
        $data['imagem'] = $user_id->imagem;

        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            if($user_id->imagem){
                $name = $user_id->imagem;
            }else{
                $name = $user_id->id.kebab_case($user_id->name);

                $extensao = $request->imagem->extension();
                $nameFile = "{$name}.{$extensao}";

                $request->session()->flash('error', "Erro ao inserir a foto");
            }
        }
        $request->session()->flash('success', "Foto inserida com sucesso");
        return redirect()->back();
    }

    
    public function delete($id)
    {
        
    }
}
