@extends('basic.app')

@section('body')
    {!! Form::open(['url' => URL::route('login-post')]) !!}
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Authorisation</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="InputEmail1">Email</label>
                        <input type="email" name="email" tabindex="1" class="form-control"
                               value="{{ Input::old('email') }}" id="InputEmail1" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword1">Пароль</label>
                        <input type="password" name="password" tabindex="2" class="form-control" id="InputPassword1"
                               placeholder="Enter your password">
                    </div>
                    <div>
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-4 col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"
                                           name="remember" {{ (Input::old('remember', false)) ? 'checked="checked"' : '' }}
                                           tabindex="3"/> Remember me
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-6 text-right">
                            <input type="submit" value="Enter" class="btn btn-primary" tabindex="4"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    {!! Form::close() !!}
@stop

@section('main-menu')
    @include('basic.widgets.main-menu')
@stop

@section('footer')
    @include('basic.widgets.footer')
@stop