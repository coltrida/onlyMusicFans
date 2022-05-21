@extends('admin.index')

@section('titlePageAdmin', 'Users list')

@section('contentPageAdmin')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Subscription</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->surname}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->created_at->format('d/m/Y')}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
