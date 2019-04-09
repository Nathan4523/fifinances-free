<!-- Modal -->
<div class="modal fade" id="modal_my_profile" tabindex="-1" role="dialog" aria-labelledby="modal_my_profile_title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_my_profile_title">Entrar em contato com suporte</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{route('sendEmail')}}" method="POST" class="col-xs-12" id="form_support">
                    @csrf
                    <div class="col-sm-12 div_inputs">
                        <div class="form-group form-group-lg">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nome" placeholder="Nome" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 div_inputs">
                        <div class="form-group form-group-lg">
                            <div class="form-line">
                                <input type="email" class="form-control" name="email" placeholder="E-mail" />
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 div_inputs">
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea rows="4" class="form-control no-resize" name="mensagem" placeholder="Descrição"></textarea>
                                </div>
                            </div>
                        </div>

                    <div class="col-sm-12 div_inputs">
                        <div class="form-group text-center">
                            <button type="submit" class="btn_enviar">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>