<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Cooperativa') }}
            {{ Form::text('nombreCoop', $cooperative->nombreCoop, ['class' => 'form-control' . ($errors->has('nombreCoop') ? ' is-invalid' : ''), 'placeholder' => 'Nombre cooperativa']) }}
            {!! $errors->first('nombreCoop', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion Cooperativa') }}
            {{ Form::text('dirCoop', $cooperative->dirCoop, ['class' => 'form-control' . ($errors->has('dirCoop') ? ' is-invalid' : ''), 'placeholder' => 'Direccion cooperativa']) }}
            {!! $errors->first('dirCoop', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Representante Legal') }}
            {{ Form::text('representanteCoop', $cooperative->representanteCoop, ['class' => 'form-control' . ($errors->has('representanteCoop') ? ' is-invalid' : ''), 'placeholder' => 'Representante cooperativa']) }}
            {!! $errors->first('representanteCoop', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NIM Cooperativa') }}
            {{ Form::text('NIMCoop', $cooperative->NIMCoop, ['class' => 'form-control' . ($errors->has('NIMCoop') ? ' is-invalid' : ''), 'placeholder' => 'NIM cooperativa']) }}
            {!! $errors->first('NIMCoop', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NIT Cooperativa') }}
            {{ Form::text('NITCoop', $cooperative->NITCoop, ['class' => 'form-control' . ($errors->has('NITCoop') ? ' is-invalid' : ''), 'placeholder' => 'NIT cooperativa']) }}
            {!! $errors->first('NITCoop', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Celular') }}
            {{ Form::text('celCoop', $cooperative->celCoop, ['class' => 'form-control' . ($errors->has('celCoop') ? ' is-invalid' : ''), 'placeholder' => 'Celular cooperativa']) }}
            {!! $errors->first('celCoop', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>