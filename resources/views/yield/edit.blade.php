@extends('layouts.base') @section('content')
<section class="content" id="edit_cost_fixed">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="row">
                        <form action="{{route('yieldEditing', $yield_id->id)}}" method="POST" class="col-xs-12"
                            id="form_update">
                            @csrf {{ method_field('PUT') }}

                            <div class="col-sm-12 div_inputs">
                                <div class="form-group form-group-lg">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Nome da compra" name="nome"
                                            value="{{$yield_id->nome}}" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 div_inputs">
                                <div class="form-group form-group-lg">
                                    <div class="form-line">
                                        <input type="text" class="form-control money" placeholder="Valor da compra"
                                            name="valor" value="{{$yield_id->valor}}" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 div_inputs">
                                <div class="form-group form-group-lg">
                                    <div class="form-line">
                                        <input type="date" class="form-control" placeholder="Data" name="data" value="{{$yield_id->data}}"
                                            required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 div_inputs">
                                <div class="form-group text-center">
                                    <button type="submit" class="btn_enviar">Salvar</button>
                                </div>
                            </div>
                        </form>

                        @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {!! session('success') !!}
                        </div>
                        @endif

                        @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {!! session('error') !!}
                        </div>
                        @endif

                        <form action="{{route('yieldDelete', $yield_id->id)}}" method="post" class="form_delete">
                            <input type="hidden" name="_method" value="DELETE"> {{csrf_field()}}
                            <button type="submit" class="btn_delete">
                                Deletar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection