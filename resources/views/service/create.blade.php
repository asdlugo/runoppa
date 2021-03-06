@extends('scaffold-interface.layouts.app')
@section('title','Create')
@section('content')

<section class="content">
    <h1>
        Create service
    </h1>
    <form method = 'get' action = '{!!url("service")!!}'>
        <button class = 'btn btn-danger'>service Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!!url("service")!!}'>
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input id="description" name = "description" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="status"></label>
            <input id="status" type="radio" value="1" name="status">activo
            <input id="status" type="radio" value="0" name="status">inactivo
        </div>
        <button class = 'btn btn-primary' type ='submit'>Create</button>
    </form>
</section>
@endsection
