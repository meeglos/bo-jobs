@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <div class="row">
                        <div class="col-md-5 mt-1">
                            Listado de agentes de la plataforma.
                        </div>
                        <div class="col-md-6">
                            <form class="form-inline my-2 my-lg-0">
                              <div class="input-group input-group-sm mb-1" style="width: 100%;">
                                <div class="input-group-prepend">
                                  <button class="btn btn-info" type="button">Buscar</button>
                                </div>
                                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                              </div>
                            </form>
                        </div>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-info btn-sm">Agregar</button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Sin agentes registrados.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
