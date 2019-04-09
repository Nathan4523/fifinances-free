@extends('layouts.base') @section('content')
<section class="content" id="main_cost_fixed">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 content-top-header">
                <div class="col-lg-6 btn_links_header">
                    <a href="{{route('cost')}}">Despesa</a>
                </div>
                <div class="col-lg-6 btn_links_header">
                    <a href="{{route('costFixed')}}" class="active">Despesa Fixa</a>
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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cost_fixed as $cost_item)
                            <tr>
                                <td>{{$cost_item->nome}}</td>
                                <td>{{$cost_item->data}}</td>
                                <td>{{$cost_item->valor}}</td>
                                <td>{{$cost_item->categoria}}</td>
                                <td>
                                    <a href="{{route('costFixedEdit', $cost_item->id)}}" class="btn_edit">
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