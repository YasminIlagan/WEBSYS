@extends('layouts.app')

@section('content')
<div class="container">
    <div class="resume">
        <img src="{{ asset('storage/'.$user->photo ?? 'images/picture.jpg') }}" 
             style="width:150px;height:150px;border-radius:50%;border:3px solid #4CAF50;" alt="photo">

        <h1>{{ $user->name }}</h1>
        <p><b>Email:</b> {{ $user->email }}</p>
        <p><b>Phone:</b> {{ $user->phone }}</p>
        <p><b>Skills:</b> {{ $user->skills }}</p>
        <p><b>Education:</b> {{ $user->education }}</p>
        <p><b>Hobbies:</b> {{ $user->hobbies }}</p>
    </div>
</div>
@endsection
