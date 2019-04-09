@extends('layouts.base') @section('content')
<section class="content" id="main_coast">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 content-top-header">
                <div class="col-lg-6 btn_links_header">
                    <a href="{{route('cost')}}" class="active">Despesa</a>
                </div>
                <div class="col-lg-6 btn_links_header">
                    <a href="{{route('costFixed')}}">Despesa Fixa</a>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <table id="table_coast" class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Dia</th>
                                <th>Valor</th>
                                <th>Categoria</th>
                                <th>Pagamento</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cost as $cost_result)
                            <tr>
                                <td>{{$cost_result->nome}}</td>
                                <td>{{$cost_result->data}}</td>
                                <td>{{$cost_result->valor}}</td>
                                <td>{{$cost_result->categoria}}</td>
                                <td>{{$cost_result->pagamento}}</td>
                                <td>
                                    <a href="{{route('costEdit', $cost_result->id)}}" class="btn_edit">
                                        <i class="material-icons">
                                            edit
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection