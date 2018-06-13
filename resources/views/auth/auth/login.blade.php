@extends('templates.auth.master')
@section('main-login')
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                @lang('lang_login.title')
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    {!! Form::open([
                        'method'=> 'post',
                        'class' => 'form-horizontal'
                    ]) !!}
                        <div class="form-group">
                            {!! Form::label('username', trans('lang_login.name'), ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::text('name', '', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Password', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::password('password', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <div class="col-md-12 text-center" >
                                    <a href="" class="btn btn-success"> @lang('lang_login.title') </a>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
