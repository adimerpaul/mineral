<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Cooperativa') }}
            {{ Form::select('coop_id',$cooperatives, $descuent->coop_id, ['class' => 'form-control' . ($errors->has('coop_id') ? ' is-invalid' : ''), 'placeholder' => 'Cooperativa']) }}
            {!! $errors->first('coop_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        

        <?php
        /*<div class="form-group">
            {{ Form::label('Cooperativa') }}
            {{ Form::text('coop_id', $descuent->coop_id, ['class' => 'form-control' . ($errors->has('coop_id') ? ' is-invalid' : ''), 'placeholder' => 'Cooperativa']) }}
            {!! $errors->first('coop_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>*/?>
        <div class="form-group">
            {{ Form::label('Nombre Descuento') }}
            {{ Form::text('nombreDesc', $descuent->nombreDesc, ['class' => 'form-control' . ($errors->has('nombreDesc') ? ' is-invalid' : ''), 'placeholder' => 'Nombre descuento']) }}
            {!! $errors->first('nombreDesc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Porcentaje Descuento') }}
            {{ Form::text('porcentajeDesc', $descuent->porcentajeDesc, ['class' => 'form-control' . ($errors->has('porcentajeDesc') ? ' is-invalid' : ''), 'placeholder' => 'Porcentaje descuento']) }}
            {!! $errors->first('porcentajeDesc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('activo') }}
            {{ Form::text('activo', $descuent->activo, ['class' => 'form-control' . ($errors->has('activo') ? ' is-invalid' : ''), 'placeholder' => 'Activo']) }}
            {!! $errors->first('activo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>