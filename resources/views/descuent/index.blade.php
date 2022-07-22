@extends('layouts.app')

@section('template_title')
    Descuent
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Descuentos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('descuents.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Descuento') }}
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
                                        
										<th>Cooperativa</th>
										<th>Descuento</th>
										<th>Porcentaje</th>
										<th>Activo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($descuents as $descuent)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $descuent->cooperative->nombreCoop }}</td>
											<td>{{ $descuent->nombreDesc }}</td>
											<td>{{ $descuent->porcentajeDesc }}</td>
											<td>{{ $descuent->activo }}</td>

                                            <td>
                                                <form action="{{ route('descuents.destroy',$descuent->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('descuents.show',$descuent->id) }}"><i class="fa fa-fw fa-eye"></i> Mostar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('descuents.edit',$descuent->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $descuents->links() !!}
            </div>
        </div>
    </div>
@endsection
