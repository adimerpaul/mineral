@extends('layouts.app')

@section('template_title')
    Lote
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lotes') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('lotes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Lote') }}
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
										<th>Cliente</th>
										<th>Pesobruto</th>
										<th>Sacos</th>
										<th>Tara</th>
										<th>Pesohumedo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lotes as $lote)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td></td>
											<td>{{ $lote->client->nombreClie }}</td>
											<td>{{ $lote->pesoBruto }}</td>
											<td>{{ $lote->sacos }}</td>
											<td>{{ $lote->tara }}</td>
											<td>{{ $lote->pesoHumedo }}</td>

                                            <td>
                                                <form action="{{ route('lotes.destroy',$lote->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('lotes.show',$lote->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('lotes.edit',$lote->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $lotes->links() !!}
            </div>
        </div>
    </div>
@endsection
