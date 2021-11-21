@extends('layouts.app')

@section('content')
<div class="container">
    @lang('messages.worker_new')

    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif --}}
    <form action="/workers/create/completed" method="POST">
        @csrf
        <div>
            <label for="name">@lang('messages.worker_Name')</label>
            <input type="text" id="name" name="name" value="{{ old('name')}}">
            <br>
            <span style="color: red">@error('name'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label for="email">@lang('messages.worker_Email')</label>
            <input type="email" id="email" name="email" value="{{ old('email')}}">
            <br>
            <span style="color: red">@error('email'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label for="phone">@lang('messages.worker_Phone')</label>
            <input type="tel" id="phone" name="phone" pattern="+3706[0-9]{8}" placeholder="+3706" value="{{ old('phone')}}">
            <br>
            <span style="color: red">@error('phone'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label for="company">@lang('messages.worker_Company')</label>
            <select name="company" id="company">
                @foreach ($companies as $item)
                    <option value="{{$item['id']}}">{{$item['name']}}</option>
                @endforeach
            </select>
        </div>
        <br>
        
        <button type="submit" class="btn btn-success">@lang('messages.btn_save')</button>
        <a href="/workers" class="btn btn-secondary">@lang('messages.btn_cancel')</a>
    </form>
</div>
@endsection
