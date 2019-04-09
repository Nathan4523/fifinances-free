@extends('layouts.base') @section('content')
<section class="content" id="main_annotations">
    <div class="container-fluid">
        <!-- Resume -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            {{$notes_id->titulo}}
                            <small>{{$notes_id->dia}}</small>
                        </h2>
                        <ul class="header-dropdown m-r-0">
                            <li>
                                <a href="{{route('annotationsEdit', $notes_id->id)}}">
                                    <i class="material-icons">edit</i>
                                </a>
                            </li>
                            <li>
                                <form action="{{route('annotationsDelete', $notes_id->id)}}" method="post" class="form_delete">
                                    <input type="hidden" name="_method" value="DELETE"> {{csrf_field()}}
                                    <button type="submit" id="delete_note">
                                        <i class="material-icons">delete</i>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        {{$notes_id->descricao}}
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Resume -->
    </div>
</section>
@endsection