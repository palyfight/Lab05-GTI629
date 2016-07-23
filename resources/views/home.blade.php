@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <?php 
                        $results = DB::select('select * from app_settings');
                        foreach ($results as $config) {
                            echo $config->config_name;
                            echo $config->config_value;
                            echo "<br />";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
