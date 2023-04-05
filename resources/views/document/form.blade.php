<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $document->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $document->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('path') }}
            {{ Form::file('path', ['class' => 'form-control' . ($errors->has('path') ? ' is-invalid' : ''), 'placeholder' => 'Path']) }}
            {!! $errors->first('path', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('relevance') }}
            {{Form::select('relevance',array('Alto' => 'Alto', 'Medio' => 'Medio','Bajo' => 'Bajo'));}}
            {{-- {{ Form::text('relevance', $document->relevance, ['class' => 'form-control' . ($errors->has('relevance') ? ' is-invalid' : ''), 'placeholder' => 'Relevance']) }} --}}
            {!! $errors->first('relevance', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>