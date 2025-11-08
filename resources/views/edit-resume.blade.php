@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Resume</h2>

    @if ($errors->any())
        <div style="background:#f44336;color:white;padding:10px;border-radius:8px;">
            <strong>Whoops!</strong> There were some problems:<br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('update.resume') }}" enctype="multipart/form-data">
        @csrf
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', $user->name) }}"><br>

        <label>Phone</label>
        <input type="text" name="phone" value="{{ old('phone', $user->phone) }}"><br>

        <label>Address</label>
        <input type="text" name="address" value="{{ old('address', $user->address) }}"><br>

        <label>Birthday</label>
        <input type="text" name="birthday" value="{{ old('birthday', $user->birthday) }}"><br>

        <label>Age</label>
        <input type="number" name="age" value="{{ old('age', $user->age) }}"><br>

        <label>Skills</label>
        <textarea name="skills">{{ old('skills', $user->skills) }}</textarea><br>

        <label>Education</label>
        <textarea name="education">{{ old('education', $user->education) }}</textarea><br>

        <label>Hobbies</label>
        <textarea name="hobbies">{{ old('hobbies', $user->hobbies) }}</textarea><br>

        <label>Upload Photo</label>
        <input type="file" name="photo"><br>

        <button type="submit" class="btn btn-success">💾 Save Resume</button>
    </form>
</div>
@endsection
