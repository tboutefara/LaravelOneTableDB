@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-2">
            @if(sizeof($data) == 0)
                <span style="font-size: 20px;">No data<span>
                <div style="float : right">
                    <a href="/addnew" class="btn btn-success">Add New</a>
                </div>
            @else
                <span style="font-size: 20px;">No data<span>
                <div style="float : right">
                    <a href="/addnew" class="btn btn-success">Add New</a>
                </div>
                <br/>
                <br/>
                <table class="table">
                    <tr>
                        <td>Id</td>
                        <td>First Name</td>
                        <td>Last Name</td>
                        <td>City</td>
                        <td>Actions</td>
                    </tr>
                    @foreach($data as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->first_name }}</td>
                            <td>{{ $row->last_name }}</td>
                            <td>{{ $row->city }}</td>
                            <td>
                                <a href="/update/{{$row->id}}" class="btn btn-primary">Update</a>
                                <a href="/delete/{{$row->id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>
</div>

@endsection