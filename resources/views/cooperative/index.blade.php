@extends('layouts.app')

@section('template_title')
    Cooperative
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cooperativas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cooperatives.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Cooperativa') }}
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
                                        <th>Nombre Cooperativa</th>
										<th>Direccion</th>
										<th>Representante</th>
										<th>NIM</th>
										<th>NIT</th>
										<th>Celular</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cooperatives as $cooperative)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cooperative->nombreCoop }}</td>
											<td>{{ $cooperative->dirCoop }}</td>
											<td>{{ $cooperative->representanteCoop }}</td>
											<td>{{ $cooperative->NIMCoop }}</td>
											<td>{{ $cooperative->NITCoop }}</td>
											<td>{{ $cooperative->celCoop }}</td>

                                            <td>
                                                <form action="{{ route('cooperatives.destroy',$cooperative->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cooperatives.show',$cooperative->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cooperatives.edit',$cooperative->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $cooperatives->links() !!}
            </div>
        </div>
    </div>
@endsection
