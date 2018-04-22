@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border border-info">
                <div class="card-header bg-info text-white">Registro de tickes en default agentes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Sin eventos registrados.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
