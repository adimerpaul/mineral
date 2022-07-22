@extends('layouts.app')

@section('template_title')
    Quincena
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cotizaciones y Alicuotas Quincenales') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('quincenas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nueva Cotización') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Plata</th>
										<th>Plomo</th>
										<th>Zinc</th>
										<th>Estaño</th>
										<th>Alicuota Plata</th>
										<th>Alicuota Plomo</th>
										<th>Alicuota Zinc</th>
										<th>Alicuota Estaño</th>
										<th>Fecha</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($quincenas as $quincena)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $quincena->cotAg }}</td>
											<td>{{ $quincena->cotPb }}</td>
											<td>{{ $quincena->cotZn }}</td>
											<td>{{ $quincena->cotSn }}</td>
											<td>{{ $quincena->alicAg }}</td>
											<td>{{ $quincena->alicPb }}</td>
											<td>{{ $quincena->alicZn }}</td>
											<td>{{ $quincena->alicSn }}</td>
											<td>{{ $quincena->fecha }}</td>

                                            <td>
                                                <form action="{{ route('quincenas.destroy',$quincena->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('quincenas.show',$quincena->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('quincenas.edit',$quincena->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $quincenas->links() !!}
            </div>
        </div>
    </div>
@endsection
