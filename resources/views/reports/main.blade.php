@extends('layouts.base') @section('content')
<section class="content" id="reports">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Meus Relatórios</h2>
                    </div>
                    <div class="body">
                        <div class="col-md-12">
                            <div class="panel panel_color_blue">
                                <div class="panel-heading" role="tab" id="headingOne_9">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#mes1" href="#mes1" aria-expanded="false" aria-controls="collapseOne_9">
                                            Agosto
                                        </a>
                                    </h4>
                                </div>
                                <div id="mes1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_9">
                                    <div class="panel-body">
                                        <input type="text" class="dial" data-skin="tron" value="45" data-width="135" data-height="135" data-thickness="0.2" data-fgColor="#D90B0B">
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel_color_blue">
                                <div class="panel-heading" role="tab" id="headingOne_9">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion_9" href="#mes2" aria-expanded="false" aria-controls="collapseOne_9">
                                            Setembro
                                        </a>
                                    </h4>
                                </div>
                                <div id="mes2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_9">
                                    <div class="panel-body">
                                        <input type="text" class="dial" data-skin="tron" value="45" data-width="135" data-height="135" data-thickness="0.2" data-fgColor="#D90B0B">
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel_color_blue">
                                <div class="panel-heading" role="tab" id="headingOne_9">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion_9" href="#mes3" aria-expanded="false" aria-controls="collapseOne_9">
                                            Outubro
                                        </a>
                                    </h4>
                                </div>
                                <div id="mes3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_9">
                                    <div class="panel-body">
                                        <input type="text" class="dial" data-skin="tron" value="45" data-width="135" data-height="135" data-thickness="0.2" data-fgColor="#D90B0B">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection