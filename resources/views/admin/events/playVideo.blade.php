@extends('admin.index')

@section('titlePageAdmin', 'Video Event')

@section('contentPageAdmin')
{{--    <video width="500" src="{{asset($concert->video)}}"></video>--}}

    <video width="100%" controls>
        <source src="{{asset($concert->video)}}" type="video/mp4">
    </video>
@stop
