@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">                
                <h4 class="border-bottom-1 border-secondary">Settings | Team</h4>
                <hr>

                <form action="#" autocomplete="off">
                    <div class="row mb-2">                        
                        <div class="form-group col-sm-6 col-md-3">
                            <label for="name">CNPJ</label>
                            <input type="text" name="name" id="name" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-sm-6 col-md-5">
                            <label for="name">Team Nome</label>
                            <input type="text" name="name" id="name" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-sm-6 col-md-4">
                            <label for="department">Status</label>
                            <select name="department" id="department"
                                class="form-select form-select-sm">
                                <option value="" selected>---</option>
                                <option value="1">Ativo</option>
                                <option value="2">Inativo</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="form-group col-sm-6 col-md-2">
                            <label for="name">CEP</label>
                            <input type="text" name="name" id="name" class="form-control form-control-sm">
                        </div>                        
                        <div class="form-group col-sm-6 col-md-8">
                            <label for="name">Logradouro</label>
                            <input type="text" name="name" id="name" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-sm-6 col-md-2">
                            <label for="name">Número</label>
                            <input type="text" name="name" id="name" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="form-group col-sm-6 col-md-4">
                            <label for="name">Bairro</label>
                            <input type="text" name="name" id="name" class="form-control form-control-sm">
                        </div>                        
                        <div class="form-group col-sm-6 col-md-4">
                            <label for="name">Municipio</label>
                            <input type="text" name="name" id="name" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-sm-6 col-md-2">
                            <label for="name">Estado</label>
                            <input type="text" name="name" id="name" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="form-group col-sm-6 col-md-4">
                            <label for="name">E-mail contato</label>
                            <input type="text" name="name" id="name" class="form-control form-control-sm">
                        </div>                        
                        <div class="form-group col-sm-6 col-md-4">
                            <label for="name">Nome contato</label>
                            <input type="text" name="name" id="name" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-sm-6 col-md-2">
                            <label for="name">Telefone</label>
                            <input type="text" name="name" id="name" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-sm-6 col-md-2">
                            <label for="name">Celular</label>
                            <input type="text" name="name" id="name" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="row text-end">
                        <div class="col-md-12 w-100">
                            <button type="button" class="btn btn-info" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Enviar Dados</button>
                        </div>
                    </div>
                </form>



                <table class="table table-sm table-hover text-sm align-middle mt-4">
                    <thead>
                        <tr class="border-bottom-1 border-secondary">
                            <th>CNPJ</th>
                            <th>Razao Social</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">15615615611</th>
                            <td>Pronto Atendimento Maria Dirce</td>
                            <td>Ativo</td>
                            <td class="text-end">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Alterar</button>
                                    <button type="button" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Excluir</button>
                                    <button type="button" class="btn btn-info" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Informações</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">85415615712</th>
                            <td>UPA Cumbica</td>
                            <td>Ativo</td>
                            <td class="text-end">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Alterar</button>
                                    <button type="button" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Excluir</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">85418614713</th>
                            <td>UPA São João Lavras</td>
                            <td>Ativo</td>
                            <td class="text-end">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Alterar</button>
                                    <button type="button" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Excluir</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center pagination-sm">
                        <li class="page-item disabled">
                            <a class="page-link">Anterior</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Próximo</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
