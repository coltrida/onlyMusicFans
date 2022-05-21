@extends('layouts.theme')

@section('content')
    @include('partials.slider')

    @include('partials.albums')

    @include('partials.events')

    @include('partials.countdown')

    @include('partials.photoGallery')

{{--    @include('partials.videoGallery')--}}

    @include('partials.latestNews')

    @include('partials.subscribe')

    @include('partials.artists')

    @include('partials.contact')
@stop
