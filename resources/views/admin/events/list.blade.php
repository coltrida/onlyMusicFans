@extends('admin.index')

@section('titlePageAdmin', 'Events list')

@section('contentPageAdmin')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Artist</th>
            <th scope="col">City</th>
            <th scope="col">Address</th>
            <th scope="col">Date</th>
            <th scope="col">Start</th>
            <th scope="col">Cost</th>
            <th scope="col">Photo</th>
        </tr>
        </thead>
        <tbody>
        @foreach($concerts as $item)
            <tr>
                <th style="vertical-align: middle;" scope="row">{{$item->id}}</th>
                <td style="vertical-align: middle;">{{$item->title}}</td>
                <td style="vertical-align: middle;">{{$item->artist}}</td>
                <td style="vertical-align: middle;">{{$item->city}}</td>
                <td style="vertical-align: middle;">{{$item->address}}</td>
                <td style="vertical-align: middle;">{{$item->concert_day}}</td>
                <td style="vertical-align: middle;">{{$item->concert_houre}}</td>
                <td style="vertical-align: middle;">{{$item->cost}}</td>
                <td style="vertical-align: middle;">
                    <img src="{{$item->path}}" alt="Concert Photo" width="50">
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
