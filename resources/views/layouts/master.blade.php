<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
            {!!Html::style('css/material.min.css')!!}
            {!!Html::style('css/styles.css')!!}
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        </style>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
    {!!Html::script('js/material.min.js')!!}
</html>