@extends('admin.index')

@section('titlePageAdmin', 'Create Event')

@section('contentPageAdmin')
    <form action="{{route('admin.video.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="mb-3 col-4">
                <label for="concertId" class="form-label">Select Event</label>
                <select id="concertId" name="concertId" class="form-control" aria-label="Default select example">
                    <option></option>
                    @foreach($concerts as $item)
                        <option value="{{$item->id}}">{{$item->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3 col-8">
                <label for="video_thumb" class="form-label">Video</label>
                <input type="file"
                       class="form-control"
                       id="video_thumb"
                       accept="video/*"
                       name="video_thumb"
                       aria-describedby="emailHelp">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">save</button>
    </form>
@stop
