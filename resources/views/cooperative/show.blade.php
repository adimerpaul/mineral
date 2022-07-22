@extends('layouts.app')

@section('template_title')
    {{ $cooperative->name ?? 'Show Cooperative' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Datos Cooperativa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cooperatives.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Cooperativa:</strong>
                            {{ $cooperative->nombreCoop }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $cooperative->dirCoop }}
                        </div>
                        <div class="form-group">
                            <strong>Representante:</strong>
                            {{ $cooperative->representanteCoop }}
                        </div>
                        <div class="form-group">
                            <strong>NIM:</strong>
                            {{ $cooperative->NIMCoop }}
                        </div>
                        <div class="form-group">
                            <strong>NIT:</strong>
                            {{ $cooperative->NITCoop }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $cooperative->celCoop }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
