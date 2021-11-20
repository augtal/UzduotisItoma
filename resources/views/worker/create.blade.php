@extends('layouts.app')

@section('content')
<div class="container">
    Create New

    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif --}}
    <form action="/workers/create/completed" method="POST">
        @csrf
        <div>
            <label for="name">Vardas</label>
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
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" pattern="+3706[0-9]{8}" placeholder="+3706" value="{{ old('phone')}}">
            <br>
            <span style="color: red">@error('phone'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label for="company">Imone</label>
            <select name="company" id="company">
                @foreach ($companies as $item)
                    <option value="{{$item['id']}}">{{$item['name']}}</option>
                @endforeach
            </select>
        </div>
        <br>
        
        <button type="submit" class="btn btn-success">Užsaugoti</button>
        <a href="/workers" class="btn btn-secondary">Atšaukti</a>
    </form>
</div>
@endsection