@extends('admin.dashboardLayout')

@section('content')

<div class="card p-3 m-3">
    <!-- <x-page-title title="Dashboard"/> -->
    <x-page-subtitle>widgets</x-page-subtitle>
    <div class="row gap-3 p-3">
        <x-widgets-card content="Court" class="bg-success" href="{{route('court.index')}}"/>
        <x-widgets-card content="Pitch" class="bg-info" href="{{route('pitch.index')}}"/>
        <x-widgets-card content="Category" class="bg-warning" href="{{route('category.index')}}"/>
        <x-widgets-card content="Club" class="bg-primary" href="{{route('club.index')}}"/>
        <x-widgets-card content="Available Pitch" class="bg-danger" href="{{route('available_pitch.index')}}"/>
    </div>

</div>

@endsection