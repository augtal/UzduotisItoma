@extends('layouts.app')

@section('content')
<div class="container">
    <h3>@lang('messages.workers')</h3>

    @auth
        @if (auth()->user()->isAdmin())
            <a href="workers/create" class="btn btn-secondary">@lang('messages.btn_worker_new')</a>
        @endif
    @endauth

    <table id="table_id" class="table table-striped">
        <thead>
            <tr>
                <th>@lang('messages.worker_Name')</th>
                <th>@lang('messages.worker_Email')</th>
                <th>@lang('messages.worker_Phone')</th>
                <th>@lang('messages.worker_Company')</th>
                @auth
                    @if (auth()->user()->isAdmin())
                        <th></th>
                        <th></th>
                    @endif
                @endauth
            </tr>
        </thead>
        <tbody>
            @foreach ($workers as $worker)
                <tr>
                    <td>{{$worker['name']}}</td>
                    <td>{{$worker['email']}}</td>
                    <td>{{$worker['phone']}}</td>
                    <td>{{$companies[$worker['company']-1]['name']}}</td>
                    @auth
                        @if (auth()->user()->isAdmin())
                            <td><a href="workers/update/{{$worker['id']}}" class="btn btn-warning">@lang('messages.btn_update')</a></td>
                            <td><a href="workers/delete/{{$worker['id']}}" class="btn btn-danger">@lang('messages.btn_delete')</a></td>
                        @endif
                    @endauth
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $workers->links("pagination::bootstrap-4") }}
    </div>
</div>
@endsection

@section('scripts')
@endsection
