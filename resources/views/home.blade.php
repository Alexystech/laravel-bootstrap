@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Este es el header de este card</div>

                    <div class="card-body">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="#" class="nav-link active">item 1</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">item 2</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">item 3</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">item 4</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">item 5</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">item 6</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        este es un header para seccion de botones
                    </div>

                    <div class="card-body">
                        <button type="button" class="btn btn-outline-primary">Outline primary</button>
                        <button type="button" class="btn btn-outline-danger">Outline Danger</button>
                        <button type="button" class="btn btn-outline-warning">outline warning</button>
                        <button type="button" class="btn btn-outline-success">Outline Success</button>
                        <button type="button" class="btn btn-success">success</button>
                        <button type="button" class="btn btn-danger">danger</button>
                        <button type="button" class="btn btn-warning">warning</button>
                        <button type="button" class="btn btn-primary">primary</button>

                        <div style="margin-top: 15px"></div>

                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">BUTTON</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        este es el header del tercer card
                    </div>

                    <div class="card-body">
                        <div class="alert alert-info" role="alert">
                            este es una alerta de informacion.
                        </div>

                        <div class="alert alert-danger" role="alert">
                            este es una alerta de error.
                        </div>

                        <div class="alert alert-warning" role="alert">
                            este es una alerta de atencion.
                        </div>

                        <div class="alert alert-success" role="alert">
                            este es una alerta ok.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    este el header del cuarto card
                </div>

                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small>3 days ago</small>
                            </div>
                            <p class="mb-1">Some placeholder content in a paragraph.</p>
                            <small>And some small print.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">Some placeholder content in a paragraph.</p>
                            <small class="text-muted">And some muted small print.</small>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">List group item heading</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">Some placeholder content in a paragraph.</p>
                            <small class="text-muted">And some muted small print.</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    este es el header de un formulario
                </div>

                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Apellido paterno</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Apellido materno</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div style="margin-top: 15px"></div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">BUTTON</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
