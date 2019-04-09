@extends('layouts.base') @section('content')
<section class="content" id="edit_coast">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="row">
                        <form action="{{route('costEditing', $cost_id->id)}}" method="POST" class="col-xs-12" id="form_update">
                            @csrf {{ method_field('PUT') }}
                            <div class="col-sm-12 div_inputs">
                                <div class="form-group form-group-lg">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nome" value="{{$cost_id->nome}}"
                                            required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 div_inputs">
                                <div class="form-group form-group-lg">
                                    <div class="form-line">
                                        <input type="text" class="form-control money" name="valor" value="{{$cost_id->valor}}"
                                            required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 div_inputs">
                                <div class="form-group form-group-lg">
                                    <div class="form-line">
                                        <input type="date" class="form-control" name="data" value="Valor da compra"
                                            value="{{ $cost_id->data }}" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 div_inputs">
                                <div class="form-group form-group-lg">
                                    <div class="form-line">
                                        <input type="text" class="form-control money" name="categoria" placeholder="Escreva uma categoria"
                                            value="{{$cost_id->categoria}}" required />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 div_inputs">
                                <select class="form-control show-tick" name="pagamento" required>
                                    <option value="{{$cost_id->pagamento}}" selected>{{$cost_id->pagamento}}</option>
                                    <option value="Crédito">Cartão de Crédito</option>
                                    <option value="Débito">Cartão de Débito</option>
                                    <option value="Dinheiro">Dinheiro</option>
                                </select>
                            </div>

                            <div class="col-sm-12 div_inputs">
                                <div class="form-group text-center">
                                    <button type="submit" class="btn_enviar">Salvar</button>
                                </div>
                            </div>
                        </form>

                        <form action="{{route('costDelete', $cost_id->id)}}" method="post" class="form_delete">
                            <input type="hidden" name="_method" value="DELETE"> {{csrf_field()}}
                            <button type="submit" class="btn_delete">
                                Deletar
                            </button>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection