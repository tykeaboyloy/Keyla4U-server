<?php
$club = [];
?>
@extends('admin.dashboardLayout')

@section('content')
<div class="card p-3 m-3">

    <x-page-subtitle>Update</x-page-subtitle>

    @if(Session::has('club_update'))
    <div class="alert alert-primary alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Primary!</strong> {!! session('club_update') !!}
    </div>
    @endif
    @if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <strong>Something is Wrong</strong>
        <br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {!! Form::model($club , array('route' => array('club.update', 1), 'method'=>'PUT','files'=>'true')) !!}
    {!! Form::label('name', 'Name:') !!}
    <br>
    {!! Form::text('name',null, array('class'=>'form-control','placeholder'=>"Sport center's name")) !!}
    <br>
    {!! Form::label('image', 'Image:') !!}
    <br>
    {!! Form::file('image', array('class'=>'form-control')) !!}
    <br>
    {!! Form::label('map', 'Map:') !!}
    <br>
    {!! Form::text('map',null, array('class'=>'form-control','placeholder'=>"Map's Link")) !!}
    <br>
    {!! Form::submit('Update', array('class'=>'btn btn-primary btn-sm')) !!}
    <x-btn-danger href="{{route('dashboard')}}" content="Back"/>
    {!! Form::close() !!}

</div>

@endsection