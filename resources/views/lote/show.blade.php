@extends('layouts.app')

@section('template_title')
    {{ $lote->name ?? 'Show Lote' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Lote</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lotes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Clie Id:</strong>
                            {{ $lote->clie_id }}
                        </div>
                        <div class="form-group">
                            <strong>Pesobruto:</strong>
                            {{ $lote->pesoBruto }}
                        </div>
                        <div class="form-group">
                            <strong>Sacos:</strong>
                            {{ $lote->sacos }}
                        </div>
                        <div class="form-group">
                            <strong>Tara:</strong>
                            {{ $lote->tara }}
                        </div>
                        <div class="form-group">
                            <strong>Pesohumedo:</strong>
                            {{ $lote->pesoHumedo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
