@extends('layouts.base') @section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-12 content-top-header">
                @switch(Auth::user()->banco_1) @case("Nubank")
                <a href="https://www.nubank.com.br/" class="nubank">Nubank</a>
                @break @case("Bradesco")
                <a href="https://banco.bradesco/html/classic/index.shtm" class="bradesco">Bradesco</a>
                @break @case("Itau")
                <a href="https://www.itau.com.br/" class="itau">Itaú</a>
                @break @case("Caixa")
                <a href="http://www.caixa.gov.br/Paginas/home-caixa.aspx" class="caixa">Caixa</a>
                @break @case("Banco_do_Brasil")
                <a href="https://www.bb.com.br/pbb/pagina-inicial#/" class="b_brasil">Banco do Brasil</a>
                @break @default
                <a href="{{route('setting')}}" class="default_text">Adicionar</a>
                @endswitch @switch(Auth::user()->banco_2) @case("Nubank")
                <a href="https://www.nubank.com.br/" class="nubank">Nubank</a>
                @break @case("Bradesco")
                <a href="https://banco.bradesco/html/classic/index.shtm" class="bradesco">Bradesco</a>
                @break @case("Itau")
                <a href="https://www.itau.com.br/" class="itau">Itaú</a>
                @break @case("Caixa")
                <a href="http://www.caixa.gov.br/Paginas/home-caixa.aspx" class="caixa">Caixa</a>
                @break @case("Banco_do_Brasil")
                <a href="https://www.bb.com.br/pbb/pagina-inicial#/" class="b_brasil">Banco do Brasil</a>
                @break @default
                <a href="{{route('setting')}}" class="default_text">Adicionar</a>
                @endswitch @switch(Auth::user()->banco_3) @case("Nubank")
                <a href="https://www.nubank.com.br/" class="nubank">Nubank</a>
                @break @case("Bradesco")
                <a href="https://banco.bradesco/html/classic/index.shtm" class="bradesco">Bradesco</a>
                @break @case("Itau")
                <a href="https://www.itau.com.br/" class="itau">Itaú</a>
                @break @case("Caixa")
                <a href="http://www.caixa.gov.br/Paginas/home-caixa.aspx" class="caixa">Caixa</a>
                @break @case("Banco_do_Brasil")
                <a href="https://www.bb.com.br/pbb/pagina-inicial#/" class="b_brasil">Banco do Brasil</a>
                @break @default
                <a href="{{route('setting')}}" class="default_text">Adicionar</a>
                @endswitch

            </div>
        </div>
        <!-- #END# Widgets -->
        <!-- Resume -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>Gastos</h2>
                    </div>
                    <div class="body">
                        @foreach ($cost as $cost_item)
                        <p>{{$cost_item->nome}} -
                            <span>R${{$cost_item->valor}}</span>
                        </p>
                        @endforeach
                        <a href="{{route('cost')}}" class="more">Ver mais</a>
                    </div>
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>Limite de gastos</h2>
                    </div>
                    <div class="body">
                        <div class="col-md-12 content_chart">
                            
                            <input type="text" class="dial" data-skin="tron" value="45" data-width="135" data-height="135"
                                data-thickness="0.2" data-fgColor="#D90B0B"> Em Breve
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="header">
                        <h2>Anotações</h2>
                    </div>
                    <div class="body">
                        @foreach ($notes as $notes_item)
                        <p class="last_p">{{$notes_item->titulo}}</p>
                        @endforeach

                        <a href="{{route('annotations')}}" class="more">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Resume -->
    </div>
</section>
@endsection