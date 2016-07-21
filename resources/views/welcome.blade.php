<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
            {!!Html::style('css/material.min.css')!!}
            {!!Html::script('js/material.min.js')!!}
            {!!Html::script('js/styles.min.js')!!}
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        </style>
    </head>
    <body>
        <div class="mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Login</h2>
          </div>
          {!! Form::open(array('url' => 'foo/bar')) !!}
              <div class="mdl-card__supporting-text"> 
                {!! Form::token(); !!}
                <div class="mdl-textfield mdl-js-textfield">
                    {!! Form::text('email', 'EMAIL', array('class' => 'mdl-textfield__input')); !!}
                    {!! Form::label('email', 'EMAIL / USERNAME', array('class' => 'mdl-textfield__label')); !!}
                </div>
                <div class="mdl-textfield mdl-js-textfield">
                    {!! Form::password('password', array('class' => 'mdl-textfield__input')); !!}
                    {!! Form::label('password', 'PASSWORD', array('class' => 'mdl-textfield__label')); !!}
                </div>  
              </div>
              <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect pull-right">
                  Login
                </a>
              </div>
          {!! Form::close() !!}
        </div>
    </body>
</html>
<!----https://getmdl.io/started/index.html--->