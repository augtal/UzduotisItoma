@extends('layouts.app')

@section('content')
<div class="container">
    @lang('messages.company_new')

    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif --}}
    <form action="/companies/create/completed" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">@lang('messages.company_Name')</label>
            <input type="text" id="name" name="name" value="{{ old('name')}}">
            <br>
            <span style="color: red">@error('name'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label for="email">@lang('messages.company_Email')</label>
            <input type="email" id="email" name="email" value="{{ old('email')}}">
            <br>
            <span style="color: red">@error('email'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label for="url">@lang('messages.company_Website')</label>
            <input type="url" name="url" id="url" placeholder="https://example.com" size="30" value="{{ old('url')}}">
            <br>
            <span style="color: red">@error('phone'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label for="logo">@lang('messages.company_Logo')</label>
            <input type="file" id="logo" name="logo" accept="image/png, image/jpeg" required>
        </div>
        <br>
        
        <button type="submit" class="btn btn-success">@lang('messages.btn_save')</button>
        <a href="/companies" class="btn btn-secondary">@lang('messages.btn_cancel')</a>
    </form>
</div>
@endsection
