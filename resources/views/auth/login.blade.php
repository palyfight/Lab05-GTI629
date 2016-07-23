@extends('layouts.master')

@section('content')
  <div class="mdl-card mdl-shadow--2dp">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">Login</h2>
    </div>
    {!! Form::open(array('url' => 'auth\login', 'method' => 'post')) !!}
      {!! csrf_field() !!}
      <div class="mdl-card__supporting-text"> 
        {!! Form::token(); !!}
        <div class="mdl-textfield mdl-js-textfield">
          {!! Form::text('email', '', array('class' => 'mdl-textfield__input')); !!}
          {!! Form::label('email', 'EMAIL / USERNAME', array('class' => 'mdl-textfield__label')); !!}
        </div>
        <div class="mdl-textfield mdl-js-textfield">
          {!! Form::password('password', array('class' => 'mdl-textfield__input')); !!}
          {!! Form::label('password', 'PASSWORD', array('class' => 'mdl-textfield__label')); !!}
        </div>  
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect pull-right" type="submit">Login</button>
      </div>
    {!! Form::close() !!}
  </div>
@endsection