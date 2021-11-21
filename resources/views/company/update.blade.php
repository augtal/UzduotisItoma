@extends('layouts.app')

@section('content')
<div class="container">
    Update company
    
    <form action="/companies/update/{{$company['id']}}/completed" method="POST">
        @csrf
        <div>
            <label for="name">Vardas</label>
            <input type="text" id="name" name="name" value="{{$company['name']}}">
            <br>
            <span style="color: red">@error('name'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label for="email">El. Pastas</label>
            <input type="email" id="email" name="email" value="{{$company['email']}}">
            <br>
            <span style="color: red">@error('email'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label for="url">Interneto svetaine</label>
            <input type="url" name="url" id="url" placeholder="https://example.com" size="30" value="{{$company['url']}}">
            <br>
            <span style="color: red">@error('phone'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label for="logo">Logotipas</label>
            <input type="file" id="logo" name="logo" accept="image/png, image/jpeg">
        </div>
        <br>
        
        <button type="submit" class="btn btn-success">Užsaugoti</button>
        <a href="/companies" class="btn btn-secondary">Atšaukti</a>
    </form>
</div>
@endsection
