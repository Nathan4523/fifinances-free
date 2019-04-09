@extends('layouts.base') @section('content')
<section class="content" id="main_annotations">
    <div class="container-fluid">
        <!-- Resume -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <table id="table_coast" class="table">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Dia</th>
                                <th>Descrição</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notes as $notes_item)
                            <tr>
                                <td>{{$notes_item->titulo}}</td>
                                <td>{{$notes_item->dia}}</td>
                                <td class="td_min_description">{{$notes_item->descricao}}</td>
                                <td>
                                    <a href="{{route('annotationsView', $notes_item->id)}}" class="btn_edit">
                                        <i class="material-icons">
                                            visibility
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
        <!-- #END# Resume -->
    </div>
</section>
@endsection