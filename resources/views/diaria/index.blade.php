@extends('layouts.app')

@section('template_title')
    Diaria
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cotización Diaria') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('diarias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Cotización Plata</th>
										<th>Cotización Plomo</th>
										<th>Cotización Zinc</th>
										<th>Cotización Estaño</th>
										<th>Fecha</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($diarias as $diaria)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $diaria->cotDiaAg }}</td>
											<td>{{ $diaria->cotDiaPb }}</td>
											<td>{{ $diaria->cotDiaZn }}</td>
											<td>{{ $diaria->cotDiaSn }}</td>
											<td>{{ $diaria->fecha }}</td>

                                            <td>
                                                <form action="{{ route('diarias.destroy',$diaria->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('diarias.show',$diaria->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('diarias.edit',$diaria->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $diarias->links() !!}
            </div>
        </div>
    </div>
@endsection
