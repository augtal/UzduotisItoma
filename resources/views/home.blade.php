@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<<<<<<< HEAD
                <div class="card-header">@lang('menu.dashboard')</div>
=======
                <div class="card-header">@lang('messages.dashboard')</div>
>>>>>>> e0ddb2d0d9d4abbc2b3a4d203c6336ae4ac12567

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<<<<<<< HEAD
                    @lang('menu.welcome')
=======
                    @lang('messages.welcome')
>>>>>>> e0ddb2d0d9d4abbc2b3a4d203c6336ae4ac12567
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
