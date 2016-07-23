@extends('layouts.app')

@section('content')
<style>
    #circle {
        width: 500px;
        height: 500px;
        background: red;
        -moz-border-radius: 260px;
        -webkit-border-radius: 260px;
        border-radius: 260px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <div id="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
