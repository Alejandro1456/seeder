@extends('layouts.app')

@section('template_title')
    {{ $bibliotecario->name ?? 'Show Bibliotecario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Bibliotecario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bibliotecarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $bibliotecario->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $bibliotecario->cargo }}
                        </div>
                        <div class="form-group">
                            <strong>Turno:</strong>
                            {{ $bibliotecario->turno }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $bibliotecario->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
