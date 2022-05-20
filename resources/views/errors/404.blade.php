@extends('layouts.stile')

@section('content')
    <h2 style="color: white">{{ $exception->getMessage() }}</h2>
@stop
