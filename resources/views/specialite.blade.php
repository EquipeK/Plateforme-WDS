@extends('template')
 
@section('contenu')
    <br>
    <div class="col-sm-offset-4 col-sm-4">
        <div class="panel panel-info">
            <div class="panel-heading">Inscription à la lettre d'information</div>
            <div class="panel-body"> 
                {!! Form::open(['route' => 'store.specialite']) !!}
                    <div class="form-group {!! $errors->has('specialite') ? 'has-error' : '' !!}">
                        {!! Form::text('specialite', null, array('class' => 'form-control', 'placeholder' => 'Entrez la nouvelle specialite')) !!}
                        {!! $errors->first('specialite', '<small class="help-block">:message</small>') !!}
                    </div>
                    {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection