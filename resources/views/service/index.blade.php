@extends('scaffold-interface.layouts.app')
@section('title','Index')
@section('content')

<section class="content">
    <h1>
        Service Index
    </h1>
    <form class = 'col s3' method = 'get' action = '{!!url("service")!!}/create'>
        <button class = 'btn btn-primary' type = 'submit'>Create New service</button>
    </form>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>name</th>
            <th>description</th>
            <th>status</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{!!$service->name!!}</td>
                <td>{!!$service->description!!}</td>
                <td>{!!$service->status!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/service/{!!$service->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/service/{!!$service->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/service/{!!$service->id!!}'><i class = 'material-icons'>info</i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $services->render() !!}

</section>
@endsection
