@extends('layouts.app')

@section('template_title')
    {{ $client->name ?? 'Show Client' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clients.index') }}">Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Coopperativa:</strong>
                            {{ $client->coop_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $client->nombreClie }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido Paterno:</strong>
                            {{ $client->paternoClie }}
                        </div>
                        <div class="form-group">
                            <strong>Aopellido Materno:</strong>
                            {{ $client->maternoClie }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula de Identidad:</strong>
                            {{ $client->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $client->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $client->cel }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $client->activo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
