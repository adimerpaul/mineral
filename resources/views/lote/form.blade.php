<div class="box box-info padding-1">
    <div class="box-body">
       
       
        <div class="form-group">
            {{ Form::label('Cliente') }}
            {{ Form::select('client_id',$clients, $lote->client_id, ['class' => 'form-control' . ($errors->has('client_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
            {!! $errors->first('client_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <?php
        /*<div class="form-group">
            {{ Form::label('Cooperativa') }}
            {{ Form::text('coop_id', $client->coop_id, ['class' => 'form-control' . ($errors->has('coop_id') ? ' is-invalid' : ''), 'placeholder' => 'Cooperativa']) }}
            {!! $errors->first('coop_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>*/?>
                
        
        
        <div class="form-group">
            {{ Form::label('pesoBruto') }}
            {{ Form::text('pesoBruto', $lote->pesoBruto, ['class' => 'form-control' . ($errors->has('pesoBruto') ? ' is-invalid' : ''), 'placeholder' => 'Pesobruto']) }}
            {!! $errors->first('pesoBruto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sacos') }}
            {{ Form::text('sacos', $lote->sacos, ['class' => 'form-control' . ($errors->has('sacos') ? ' is-invalid' : ''), 'placeholder' => 'Sacos']) }}
            {!! $errors->first('sacos', '<div class="invalid-feedback">:message</div>') !!}    
        </div>
        <div class="form-group">
            {{ Form::label('tara') }}
            {{ Form::text('tara', $lote->tara, ['class' => 'form-control' . ($errors->has('tara') ? ' is-invalid' : ''), 'placeholder' => 'Tara']) }}
                {!! $errors->first('tara', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pesoHumedo') }}
            {{ Form::text('pesoHumedo', $lote->pesoHumedo, ['class' => 'form-control' . ($errors->has('pesoHumedo') ? ' is-invalid' : ''), 'placeholder' => 'Pesohumedo']) }}
            {!! $errors->first('pesoHumedo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
      
       
    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>

        
<script src="{{asset('search/search.js')}}" type="module"></script>
<div class="form-group">
    <label for="exampleDataList" class="form-label">Cliente </label>
                        <div class="form-group">
                            <input type="" class="form-select" id="mysearch" placeholder="Buscar Cliente">
                            <ul id="showlist" tabindex='1' class="list-group"></ul>
                        </div>
    
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    window.onload=function(){
        $('#sacos').keyup(function(){
            $('#tara').val($('#sacos').val()*0.5)
            $('#pesoHumedo').val($('#pesoBruto').val()-$('#tara').val())
        });
        
    }
</script>