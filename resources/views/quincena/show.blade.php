@extends('layouts.app')

@section('template_title')
    {{ $quincena->name ?? 'Show Quincena' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Cotización y Alicuota Quincenal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('quincenas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cotización Plata:</strong>
                            {{ $quincena->cotAg }}
                        </div>
                        <div class="form-group">
                            <strong>Cotización Plomo:</strong>
                            {{ $quincena->cotPb }}
                        </div>
                        <div class="form-group">
                            <strong>Cotización Zinc:</strong>
                            {{ $quincena->cotZn }}
                        </div>
                        <div class="form-group">
                            <strong>Cotización Estaño:</strong>
                            {{ $quincena->cotSn }}
                        </div>
                        <div class="form-group">
                            <strong>Alicuota Interna Plata:</strong>
                            {{ $quincena->alicAg }}
                        </div>
                        <div class="form-group">
                            <strong>Alicuota Interna Plomo:</strong>
                            {{ $quincena->alicPb }}
                        </div>
                        <div class="form-group">
                            <strong>Alicuota Interna Zinc:</strong>
                            {{ $quincena->alicZn }}
                        </div>
                        <div class="form-group">
                            <strong>Alicuota Interna Estaño:</strong>
                            {{ $quincena->alicSn }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $quincena->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
