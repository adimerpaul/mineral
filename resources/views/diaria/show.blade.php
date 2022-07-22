@extends('layouts.app')

@section('template_title')
    {{ $diaria->name ?? 'Show Diaria' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Cotización Diaria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('diarias.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cotización Diaria Plata:</strong>
                            {{ $diaria->cotDiaAg }}
                        </div>
                        <div class="form-group">
                            <strong>Cotización Diaria Plomo:</strong>
                            {{ $diaria->cotDiaPb }}
                        </div>
                        <div class="form-group">
                            <strong>Cotización Diaria Zinc:</strong>
                            {{ $diaria->cotDiaZn }}
                        </div>
                        <div class="form-group">
                            <strong>Cotización Diaria Estaño:</strong>
                            {{ $diaria->cotDiaSn }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $diaria->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
