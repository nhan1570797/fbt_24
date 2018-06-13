@extends('templates.admin.master')
@section('main')
    </div>
        <div class="col-md-10">
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"> @lang('lang.title') </div>
                                <div class="panel-body">
                                    {!! Form::open([
                                        'method'=> 'post',
                                        'class' => 'form-horizontal'
                                    ]) !!}
                                        <div class="form-group col-md-6">
                                            {!! Form::label('name', trans('lang.name'), ['class' => 'col-sm-3 control-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::text('name', '', ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            {!! Form::label('password', trans('lang.password'), ['class' => 'col-sm-3 control-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::password('password', ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            {!! Form::label('email', trans('lang.email'), ['class' => 'col-sm-3 control-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::text('email', '', ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            {!! Form::label('fullname', trans('lang.fullname'), ['class' => 'col-sm-3 control-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::text('fullname', '', ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            {!! Form::label('phone', trans('lang.phone'), ['class' => 'col-sm-3 control-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::text('phone', '', ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            {!! Form::label('address', trans('lang.address'), ['class' => 'col-sm-3 control-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::text('address', '', ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            {!! Form::label('role', trans('lang.role'), ['class' => 'col-sm-3 control-label']) !!}
                                            <div class="radio col-sm-6">
                                                {!! Form::radio('role', '', ['class' => 'form-control']) !!}
                                                 @lang('lang.member')
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            {!! Form::label('gender', trans('lang.gender'), ['class' => 'col-sm-3 control-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::radio('gender', '', ['class' => 'form-control']) !!}
                                                @lang('lang.male')
                                                {!! Form::radio('gender', '', ['class' => 'form-control']) !!}
                                                @lang('lang.female')
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            {!! Form::label('identity_card', trans('lang.identity_card'), ['class' => 'col-sm-3 control-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::text('indentity_card', '', ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center" >
                                        <a href="" class="btn btn-success"> @lang('lang.add') </a>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"> @lang('lang.list_user') </div>
                                <div class="panel-body">
                                    <div class="col-md-12">
                                        <table class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th> @lang('lang.stt') </th>
                                                    <th> @lang('lang.name') </th>
                                                    <th> @lang('lang.email') </th>
                                                    <th> @lang('lang.fullname') </th>
                                                    <th> @lang('lang.phone') </th>
                                                    <th> @lang('lang.address') </th>
                                                    <th> @lang('lang.gender') </th>
                                                    <th> @lang('lang.identity_card') </th>
                                                    <th> @lang('lang.role') </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Nhan</td>
                                                    <td>nhannguyencong57@gmail.com</td>
                                                    <td>nhan nguyen</td>
                                                    <td>01212751416</td>
                                                    <td>Quang nam</td>
                                                    <td>nam</td>
                                                    <td>206141265</td>
                                                    <td>Admin</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    <a href="" class="btn btn-success btn-lg">  @lang('lang.next')  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@stop
