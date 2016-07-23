@extends('layouts.master')

@section('content')
  <div class="mdl-card mdl-shadow--2dp">
    <div class="mdl-card__title">
      <h2 class="mdl-card__title-text">Welcome !</h2>
    </div>
    {{ Html::linkAction('Auth\AuthController@getLogin', 'Log in', array(), array('class' => 'mdl-button mdl-js-button mdl-button--raised mdl-button--colored')) }}
  </div>
@endsection
<!----https://getmdl.io/started/index.html--->