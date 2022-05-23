@extends('admin.index')

@section('titlePageAdmin', 'Create Event')

@section('contentPageAdmin')
    <form action="{{route('admin.events.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="mb-3 col-4">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-4">
                <label for="artist" class="form-label">Artist</label>
                <input type="text" class="form-control" id="artist" name="artist" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-4">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-4">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-4">
                <label for="concert_date" class="form-label">Date</label>
                <input type="date" class="form-control" id="concert_date" name="concert_date" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-4">
                <label for="concert_start_time" class="form-label">Houre</label>
                <input type="time" class="form-control" id="concert_start_time" name="concert_start_time" aria-describedby="emailHelp">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-4">
                <label for="cost" class="form-label">Cost</label>
                <input type="number" class="form-control" id="cost" name="cost" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-8">
                <label for="album_thumb" class="form-label">Immage</label>
                <input type="file" class="form-control" id="concert_thumb" name="concert_thumb" aria-describedby="emailHelp">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">save</button>
    </form>
@stop
