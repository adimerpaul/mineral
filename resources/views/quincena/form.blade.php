<div class="box box-info padding-1">
    <div class="box-body">
            <div class="row" >
                <div class="col-4" >
                    <div class="form-group">
                        {{ Form::label('Cotización Plata') }}
                        {{ Form::text('cotAg', $quincena->cotAg, ['class' => 'form-control' . ($errors->has('cotAg') ? ' is-invalid' : ''), 'placeholder' => 'Cotización Plata']) }}
                        {!! $errors->first('cotAg', '<div class="invalid-feedback">:message</div>') !!}
                    </div>            
                </div>
                <div class="col-4">
                    <div class="form-group">
                        {{ Form::label('Alicuota Plata') }}
                        {{ Form::text('alicAg', $quincena->alicAg, ['class' => 'form-control' . ($errors->has('alicAg') ? ' is-invalid' : ''), 'placeholder' => 'Alicuota Plata']) }}
                        {!! $errors->first('alicAg', '<div class="invalid-feedback">:message</div>') !!}
                    </div>            
                </div>
            </div>
        
            <div class="row" >
                <div class="col-4" >
                    <div class="form-group">
                        {{ Form::label('Cotización Plomo') }}
                        {{ Form::text('cotPb', $quincena->cotPb, ['class' => 'form-control' . ($errors->has('cotPb') ? ' is-invalid' : ''), 'placeholder' => 'Cotización Plomo']) }}
                        {!! $errors->first('cotPb', '<div class="invalid-feedback">:message</div>') !!}
                    </div>          
                </div>
                <div class="col-4">
                    <div class="form-group">
                        {{ Form::label('Alicuota Plomo') }}
                        {{ Form::text('alicPb', $quincena->alicPb, ['class' => 'form-control' . ($errors->has('alicPb') ? ' is-invalid' : ''), 'placeholder' => 'Alicuota Plomo']) }}
                        {!! $errors->first('alicPb', '<div class="invalid-feedback">:message</div>') !!}
                    </div>         
                </div>
            </div>
            <div class="row" >
                <div class="col-4" >
                    <div class="form-group">
                        {{ Form::label('Cotización Zinc') }}
                        {{ Form::text('cotZn', $quincena->cotZn, ['class' => 'form-control' . ($errors->has('cotZn') ? ' is-invalid' : ''), 'placeholder' => 'Cotización Zinc']) }}
                        {!! $errors->first('cotZn', '<div class="invalid-feedback">:message</div>') !!}
                    </div>         
                </div>
                <div class="col-4">
                    <div class="form-group">
                        {{ Form::label('Alicuota Zinc') }}
                        {{ Form::text('alicZn', $quincena->alicZn, ['class' => 'form-control' . ($errors->has('alicZn') ? ' is-invalid' : ''), 'placeholder' => 'Alicuota Zinc']) }}
                        {!! $errors->first('alicZn', '<div class="invalid-feedback">:message</div>') !!}
                    </div>        
                </div>
            </div>

            <div class="row" >
                <div class="col-4" >
                    <div class="form-group">
                        {{ Form::label('Cotización Estaño') }}
                        {{ Form::text('cotSn', $quincena->cotSn, ['class' => 'form-control' . ($errors->has('cotSn') ? ' is-invalid' : ''), 'placeholder' => 'Cotización Estaño']) }}
                        {!! $errors->first('cotSn', '<div class="invalid-feedback">:message</div>') !!}
                    </div>       
                </div>
                <div class="col-4">
                    <div class="form-group">
                        {{ Form::label('Alicuota Estaño') }}
                        {{ Form::text('alicSn', $quincena->alicSn, ['class' => 'form-control' . ($errors->has('alicSn') ? ' is-invalid' : ''), 'placeholder' => 'Alicuota Estaño']) }}
                        {!! $errors->first('alicSn', '<div class="invalid-feedback">:message</div>') !!}
                    </div>      
                </div>
            </div>
<br>
@php
/*<
        <div>
           <label for="">Fecha</label>
            <input type="date" name="fecha" >
        </div>*/   
        @endphp
        <div class="form-group col-3">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $quincena->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>
        @php
        /*<div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $quincena->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div> */   
        @endphp
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>