@extends('layouts.app')

@section('content')
<div class="container">
<<<<<<< HEAD
    @lang('messages.company_update')
=======
    @lang('messages.company_new')
>>>>>>> e0ddb2d0d9d4abbc2b3a4d203c6336ae4ac12567
    
    <form action="/companies/update/{{$company['id']}}/completed" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">@lang('messages.company_Name')</label>
            <input type="text" id="name" name="name" value="{{$company['name']}}">
            <br>
            <span style="color: red">@error('name'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label for="email">@lang('messages.company_Email')</label>
            <input type="email" id="email" name="email" value="{{$company['email']}}">
            <br>
            <span style="color: red">@error('email'){{$message}}@enderror</span>
        </div>
        <br>
        <div>
            <label for="url">@lang('messages.company_Website')</label>
            <input type="url" name="url" id="url" placeholder="https://example.com" size="30" value="{{$company['url']}}">
            <br>
            <span style="color: red">@error('phone'){{$message}}@enderror</span>
        </div>
        <br>
        @if (isset($company['logo']))
            <img id="logo-big" src="{{ asset('storage/images/logo/'.$company['logo'])}}" alt="{{$company['logo']}}">
        @endif
        <div>
            <label for="logo">@lang('messages.company_Logo')</label>
            <input type="file" id="logo" name="logo" accept="image/png, image/jpeg">
        </div>
        <br>
        
        <button type="submit" class="btn btn-success">@lang('messages.btn_save')</button>
        <a href="/companies" class="btn btn-secondary">@lang('messages.btn_cancel')</a>
    </form>
</div>
@endsection
