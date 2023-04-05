@extends('layouts.app')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Document</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('documents.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $document->name }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $document->description }}
                        </div>
                        <div class="form-group">
                            <strong>Path:</strong>
                            <a href="../Archivos/{{$document->path}}" target="blank_">{{$document->path}}</a>
                           
                        </div>
                        <div class="form-group">
                            <strong>Relevance:</strong>
                            {{ $document->relevance }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
