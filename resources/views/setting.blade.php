@extends('layouts.base') @section('content')
<section class="content" id="settings">
    <div class="container-fluid">
        <!-- Resume -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="content_title">
                        <h2>Configurações</h2>
                    </div>

                    <div class="content_block_img">
                            <form action="{{route('update_account', Auth::user()->id)}}" method="POST" class="col-xs-12" id="form_update">
                                @csrf {{ method_field('PUT') }}

                            <div class="col-sm-4 div_inputs">
                                <div class="form-group form-group-lg">
                                    <p>Salário:</p>
                                </div>
                            </div>
                            <div class="col-sm-8 div_inputs">
                                <div class="form-group form-group-lg">
                                    <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Salário" name="salario" value="{{Auth::user()->salario}}" />
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 div_inputs">
                                <select class="form-control show-tick" name="banco_1">
                                    <option value="" disabled selected>{{Auth::user()->banco_1}}</option>
                                    <option value="Bradesco">Bradesco</option>
                                    <option value="Itau">Itaú</option>
                                    <option value="Caixa">Caixa</option>
                                    <option value="Banco_do_Brasil">Banco do Brasil</option>
                                    <option value="Nubank">Nubank</option>
                                    <option value="">Nenhum</option>
                                </select>
                            </div>

                            <div class="col-sm-12 div_inputs">
                                    <select class="form-control show-tick" name="banco_2">
                                        <option value="" disabled selected>{{Auth::user()->banco_2}}</option>
                                        <option value="Bradesco">Bradesco</option>
                                        <option value="Itau">Itaú</option>
                                        <option value="Caixa">Caixa</option>
                                        <option value="Banco_do_Brasil">Banco do Brasil</option>
                                        <option value="Nubank">Nubank</option>
                                        <option value="">Nenhum</option>
                                    </select>
                                </div>

                                <div class="col-sm-12 div_inputs">
                                        <select class="form-control show-tick" name="banco_3">
                                            <option value="" disabled selected>{{Auth::user()->banco_3}}</option>
                                            <option value="Bradesco">Bradesco</option>
                                            <option value="Itau">Itaú</option>
                                            <option value="Caixa">Caixa</option>
                                            <option value="Banco_do_Brasil">Banco do Brasil</option>
                                            <option value="Nubank">Nubank</option>
                                            <option value="">Nenhum</option>
                                        </select>
                                    </div>

                            <div class="col-sm-12 div_inputs">
                                <div class="form-group text-center">
                                    <button type="submit" class="btn_enviar">Salvar</button>
                                </div>
                            </div>
                        </form>

                        @if(Session::has('success-user'))
                        <div class="alert alert-success" role="alert">
                            {!! session('success') !!}
                        </div>
                        @endif

                        @if(Session::has('error-user'))
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