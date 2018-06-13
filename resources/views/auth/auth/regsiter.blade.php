@extends('templates.auth.master')
@section('main-login')
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                @lang('lang_login.regsiter')
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    {!! Form::open([
                        'method'=> 'post',
                        'class' => 'form-horizontal'
                    ]) !!}
                        <div class="form-group col-md-12">
                            {!! Form::label('name', trans('lang_login.name'), ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::text('name', '', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            {!! Form::label('password', 'Password', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::password('password', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            {!! Form::label('email', trans('lang_login.email'), ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::text('email', '', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            {!! Form::label('fullname', trans('lang_login.fullname'), ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::text('fullname', '', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            {!! Form::label('phone', trans('lang_login.phone'), ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::text('phone', '', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            {!! Form::label('address', trans('lang_login.address'), ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::text('address', '', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            {!! Form::label('identity_card', trans('lang_login.identity_card'), ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::text('indentity_card', '', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            {!! Form::label('role', trans('lang_login.role'), ['class' => 'col-sm-3 control-label']) !!}
                            <div class="radio col-sm-6">
                                {!! Form::radio('role', '', ['class' => 'form-control']) !!}
                                 @lang('lang.member')
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            {!! Form::label('gender', trans('lang_login.gender'), ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::radio('gender', '', ['class' => 'form-control']) !!}
                                @lang('lang.male')
                                {!! Form::radio('gender', '', ['class' => 'form-control']) !!}
                                @lang('lang.female')
                            </div>
                        </div>
                        <div class="col-md-12 text-center" >
                            <a href="" class="btn btn-success"> @lang('lang_login.regsiter') </a>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
