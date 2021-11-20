@extends('layouts.app')

@section('content')
<div class="container">
    Update worker

    <form action="/workers/update/{{$worker['id']}}/completed" method="POST">
        @csrf
        <div>
            <label for="name">Vardas</label>
            <input type="text" id="name" name="name" value="{{$worker['name']}}">
            <br>
            <span style="color: red">@error('name'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label for="email">El. Pastas</label>
            <input type="email" id="email" name="email" value="{{$worker['email']}}">
            <br>
            <span style="color: red">@error('email'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" pattern="+3706[0-9]{8}" placeholder="+3706" value="{{$worker['phone']}}">
            <br>
            <span style="color: red">@error('phone'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label for="company">Imone</label>
            <select name="company" id="company">
                @foreach ($companies as $item)
                    @if ($item['id'] == $worker['company'])
                        <option value="{{$item['id']}}" selected>{{$item['name']}}</option>
                    @else
                        <option value="{{$item['id']}}">{{$item['name']}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <br>
        
        <button type="submit" class="btn btn-success">Uzsaugoti</button>
    </form>
</div>
@endsection
