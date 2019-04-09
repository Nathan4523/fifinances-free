@extends('layouts.base') @section('content')
<section class="content" id="main_cost_fixed">
    <div class="container-fluid">
        
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <table id="table_coast" class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Dia</th>
                                <th>Valor</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($yield as $yield_item)
                            <tr>
                                <td>{{$yield_item->nome}}</td>
                                <td>{{$yield_item->data}}</td>
                                <td>{{$yield_item->valor}}</td>
                                
                                <td>
                                    <a href="{{route('yieldView', $yield_item->id)}}" class="btn_edit">
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