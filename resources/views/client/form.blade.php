<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Cooperativa') }}
            {{ Form::select('coop_id',$cooperatives, $client->coop_id, ['class' => 'form-control' . ($errors->has('coop_id') ? ' is-invalid' : ''), 'placeholder' => 'Cooperativa']) }}
            {!! $errors->first('coop_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <?php
        /*<div class="form-group">
            {{ Form::label('Cooperativa') }}
            {{ Form::text('coop_id', $client->coop_id, ['class' => 'form-control' . ($errors->has('coop_id') ? ' is-invalid' : ''), 'placeholder' => 'Cooperativa']) }}
            {!! $errors->first('coop_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>*/?>
        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('nombreClie', $client->nombreClie, ['class' => 'form-control' . ($errors->has('nombreClie') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Cliente']) }}
            {!! $errors->first('nombreClie', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido Paterno') }}
            {{ Form::text('paternoClie', $client->paternoClie, ['class' => 'form-control' . ($errors->has('paternoClie') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Paterno Cliente']) }}
            {!! $errors->first('paternoClie', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellido Materno') }}
            {{ Form::text('maternoClie', $client->maternoClie, ['class' => 'form-control' . ($errors->has('maternoClie') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Materno Cliente']) }}
            {!! $errors->first('maternoClie', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cedula de Identidad') }}
            {{ Form::text('ci', $client->ci, ['class' => 'form-control' . ($errors->has('ci') ? ' is-invalid' : ''), 'placeholder' => 'Carnet Cliente']) }}
            {!! $errors->first('ci', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('telefono', $client->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Celular') }}
            {{ Form::text('cel', $client->cel, ['class' => 'form-control' . ($errors->has('cel') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('cel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('activo') }}
            {{ Form::text('activo', $client->activo, ['class' => 'form-control' . ($errors->has('activo') ? ' is-invalid' : ''), 'placeholder' => 'Activo']) }}
            {!! $errors->first('activo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>