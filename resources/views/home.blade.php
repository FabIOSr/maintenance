@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="border-bottom-1 border-secondary">PageComponent | PageTitle</h4>
                <hr>

                <div class="row justify-content-around gx-2">
                    <div class="col-md-4 mb-2">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <table class="table table-sm table-hover text-sm align-middle">
                    <thead>
                        <tr class="border-bottom-1 border-secondary">
                            <th>S/N</th>
                            <th>Team</th>
                            <th>Departament</th>
                            <th>Requerente</th>
                            <th>Priority</th>
                            <th>Assign</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">11561</th>
                            <td>Upa Cumbica</td>
                            <td>Administration</td>
                            <td>Jhon Doe</td>
                            <td>
                                <span class="text-secondary">Normal</span>
                            </td>
                            <td>Joabe</td>
                            <td>Aberto</td>
                            <td class="text-end">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary"
                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        View
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">11561</th>
                            <td>UPA São João Lavras</td>
                            <td>Front Desk</td>
                            <td>Jhon Doe</td>
                            <td>
                                <span class="text-danger">Alta</span>
                            </td>
                            <td>Maicon</td>
                            <td>Em andamento</td>
                            <td class="text-end">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary"
                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        View
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">11561</th>
                            <td>P.A Maria Dirce</td>
                            <td>Front Desk</td>
                            <td>Jhon Doe</td>
                            <td>
                                <span class="text-danger">Alta</span>
                            </td>
                            <td>Luciano</td>
                            <td>Aguardando Material</td>
                            <td class="text-end">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary"
                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                        View
                                    </button>
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
