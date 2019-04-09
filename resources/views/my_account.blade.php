@extends('layouts.base') @section('content')
<section class="content" id="profile">
    <div class="container-fluid">
        <!-- Resume -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="content_title">
                        <h2>Minha conta</h2>
                    </div>

                    <div class="content_block_img">
                        <form action="{{route('updatePhoto', Auth::user()->id)}}" method="POST" class="col-xs-12" id="form_update_photo"
                            enctype="multipart/form-data">
                            @csrf {{ method_field('PUT') }}
                            <div class="col-sm-12 content_block_img">
                                <img src="{{Auth::user()->imagem}}" alt="profile" id="photo_perfil">
                                <input type="file" name="file" id="myFile">
                            </div>

                            <div class="col-sm-12 div_inputs">
                                <div class="form-group text-center">
                                    <button type="submit" class="btn_enviar">Atualizar foto</button>
                                </div>
                            </div>
                        </form>

                        <form action="{{route('update_account', Auth::user()->id)}}" method="POST" class="col-xs-12" id="form_update"
                            enctype="multipart/form-data">
                            @csrf {{ method_field('PUT') }}
                            <div class="col-sm-12 div_inputs">
                                <div class="form-group form-group-lg">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Nome" name="name" value="{{ Auth::user()->name }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 div_inputs">
                                <div class="form-group form-group-lg">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="E-mail" name="email" value="{{ Auth::user()->email }}" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 div_inputs">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn_support" data-toggle="modal" data-target="#modal_my_profile">
                                    SUPORTE
                                </button>
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

    @include('layouts.modals')
</section>
@endsection