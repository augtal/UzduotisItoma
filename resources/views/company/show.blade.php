@extends('layouts.app')

@section('content')
<div class="container">
    <h3>@lang('messages.companies')!</h3>

    @isset($message)
        <h4 style="color: red"> {{$message}} </h4>
    @endisset

    @auth
        @if (auth()->user()->isAdmin())
<<<<<<< HEAD
            <a href="companies/create" class="btn btn-secondary">@lang('messages.company_new')</a>
=======
            <a href="companies/create" class="btn btn-secondary">@lang('messages.btn_company_new')</a>
>>>>>>> e0ddb2d0d9d4abbc2b3a4d203c6336ae4ac12567
        @endif
    @endauth

    <table id="table_id" class="table table-striped">
        <thead>
            <tr>
                <th scope="col">@lang('messages.company_Name')</th>
                <th scope="col">@lang('messages.company_Email')</th>
                <th scope="col">@lang('messages.company_Website')</th>
                <th scope="col">@lang('messages.company_Logo')</th>
                @auth
<<<<<<< HEAD
                @if (auth()->user()->isAdmin())
                    <th scope="col"></th>
                    <th scope="col"></th>
                @endif
            @endauth
=======
                    @if (auth()->user()->isAdmin())
                        <th></th>
                        <th></th>
                    @endif
                @endauth
>>>>>>> e0ddb2d0d9d4abbc2b3a4d203c6336ae4ac12567
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $item)
                <tr>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['email']}}</td>
                    <td>{{$item['url']}}</td>
                    <td><img id="logo" src="{{ asset('storage/images/logo/'.$item['logo'])}}" alt="{{$item['logo']}}"></td>
                    @auth
                        @if (auth()->user()->isAdmin())
                            <td><a href="companies/update/{{$item['id']}}" class="btn btn-warning">@lang('messages.btn_update')</a></td>
                            <td><a href="companies/delete/{{$item['id']}}" class="btn btn-danger">@lang('messages.btn_delete')</a></td>
                        @endif
                    @endauth
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $companies->links("pagination::bootstrap-4") }}
    </div>
</div>
@endsection

@section('scripts')
@endsection
