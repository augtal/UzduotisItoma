@extends('layouts.app')

@section('content')
<div class="container">
    Create New company

    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif --}}
    <form action="/companies/create/completed" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Pavadinimas</label>
            <input type="text" id="name" name="name" value="{{ old('name')}}">
            <br>
            <span style="color: red">@error('name'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label for="email">El. Pastas</label>
            <input type="email" id="email" name="email" value="{{ old('email')}}">
            <br>
            <span style="color: red">@error('email'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label for="url">Interneto svetaine</label>
            <input type="url" name="url" id="url" placeholder="https://example.com" size="30" value="{{ old('url')}}">
            <br>
            <span style="color: red">@error('phone'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label for="logo">Logotipas</label>
            <input type="file" id="logo" name="logo" accept="image/png, image/jpeg" required>
        </div>
        <br>
        
        <button type="submit" class="btn btn-success">Užsaugoti</button>
        <a href="/companies" class="btn btn-secondary">Atšaukti</a>
    </form>
</div>
@endsection
