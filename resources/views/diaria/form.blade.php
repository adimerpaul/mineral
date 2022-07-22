<div class="box box-info padding-1">
    <div class="box-body">
       <div class="col-4"> 
        <div class="form-group">
            {{ Form::label('Cotización Plata') }}
            {{ Form::text('cotDiaAg', $diaria->cotDiaAg, ['class' => 'form-control' . ($errors->has('cotDiaAg') ? ' is-invalid' : ''), 'placeholder' => 'Cotización Plata']) }}
            {!! $errors->first('cotDiaAg', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cotización Plomo') }}
            {{ Form::text('cotDiaPb', $diaria->cotDiaPb, ['class' => 'form-control' . ($errors->has('cotDiaPb') ? ' is-invalid' : ''), 'placeholder' => 'Cotdiapb']) }}
            {!! $errors->first('cotDiaPb', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cotización Zinc') }}
            {{ Form::text('cotDiaZn', $diaria->cotDiaZn, ['class' => 'form-control' . ($errors->has('cotDiaZn') ? ' is-invalid' : ''), 'placeholder' => 'Cotdiazn']) }}
            {!! $errors->first('cotDiaZn', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cotización Estaño') }}
            {{ Form::text('cotDiaSn', $diaria->cotDiaSn, ['class' => 'form-control' . ($errors->has('cotDiaSn') ? ' is-invalid' : ''), 'placeholder' => 'Cotdiasn']) }}
            {!! $errors->first('cotDiaSn', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $diaria->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div> 
    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>