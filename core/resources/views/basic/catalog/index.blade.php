@extends('basic.app')

@section('body')
    <h4>Content</h4>
@stop

@section('left-sidebar')
    @widget('CategoriesList')
@stop

@section('right-sidebar')
    <h4>Right sidebar</h4>
@stop

@section('main-menu')
    @include('basic.widgets.main-menu')
@stop
