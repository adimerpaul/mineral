@extends('layouts.app')

@section('template_title')
    {{ $descuent->name ?? 'Show Descuent' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Descuento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('descuents.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cooperativa:</strong>
                            {{ $descuent->cooperative->nombreCoop }}
                        </div>
                        <div class="form-group">
                            <strong>Descuento:</strong>
                            {{ $descuent->nombreDesc }}
                        </div>
                        <div class="form-group">
                            <strong>Porcentaje:</strong>
                            {{ $descuent->porcentajeDesc }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $descuent->activo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
