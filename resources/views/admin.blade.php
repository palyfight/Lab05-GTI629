@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php 
                        $results = DB::select('select * from app_settings');
                    ?>

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/save') }}">
                        {{ csrf_field() }}

                        @foreach ($results as $config)
                            <div class="form-group{{ $errors->has('config_name') ? ' has-error' : '' }}">
                                <label for="{{ $config->config_name }}" class="col-md-4 control-label">{{ $config->config_name }}</label>

                                <div class="col-md-6">
                                    <input id="{{ $config->config_name }}" type="{{ $config->config_name }}" class="form-control" name="{{ $config->config_name }}" value="{{ $config->config_value }}">

                                    @if ($errors->has('config_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('config_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        @endforeach

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 pull-right">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-save"></i> Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
