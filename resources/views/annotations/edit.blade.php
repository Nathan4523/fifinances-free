@extends('layouts.base') @section('content')
<section class="content" id="edit_annotations">
    <div class="container-fluid">
        <!-- Resume -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="row">
                        <form action="{{route('annotationsEditing', $notes_id->id)}}" method="POST" class="col-xs-12" id="form_update">
                            @csrf {{ method_field('PUT') }}

                            <div class="col-sm-12 div_inputs">
                                <div class="form-group form-group-lg">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Titulo" name="titulo" value="{{$notes_id->titulo}}" required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 div_inputs">
                                <div class="form-group form-group-lg">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Dia" name="dia" value="{{ $notes_id->dia }}" required />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 div_inputs">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Descrição" name="descricao" required>
                                            {{$notes_id->descricao}}
                                        </textarea>
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
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Resume -->
    </div>
</section>
@endsection