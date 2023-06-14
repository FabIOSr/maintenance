@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">                
                <h4 class="border-bottom-1 border-secondary">PageComponent | PageTitle</h4>
                <hr>

                <form action="#" autocomplete="off">
                    <div class="row">
                        <div class="form-group col-sm-6 col-md-4">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" class="form-control form-control-sm"
                                placeholder="Jhon">
                        </div>
                        <div class="form-group col-sm-6 col-md-4">
                            <label for="name">Sobrenome</label>
                            <input type="text" name="name" id="name" class="form-control form-control-sm"
                                placeholder="Doe">
                        </div>
                        <div class="form-group col-sm-6 col-md-4">
                            <label for="name">Data Nascimento</label>
                            <input type="text" name="name" id="name" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-sm-6 col-md-12">
                            <label for="department">Departamento</label>
                            <select name="department" id="department"
                                class="form-select form-select-sm">
                                <option value="" selected>---</option>
                                <option value="1">Human Resources</option>
                                <option value="2">Administration</option>
                                <option value="3">Nurse</option>
                                <option value="4">Medical</option>
                                <option value="4">Front Desk</option>
                            </select>
                        </div>
                    </div>
                </form>
                <hr>

                <table class="table table-sm table-hover text-sm align-middle">
                    <thead>
                        <tr class="border-bottom-1 border-secondary">
                            <th>#</th>
                            <th>Nome completo</th>
                            <th>Data Nasc.</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Jhon Doe</td>
                            <td>18 Abr, 1983</td>
                            <td class="text-end">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Alterar</button>
                                    <button type="button" class="btn btn-success" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Excluir</button>
                                    <button type="button" class="btn btn-info" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Informações</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Jhon Doe</td>
                            <td>18 Abr, 1983</td>
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
