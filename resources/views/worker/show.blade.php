@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Workers!</h3>

    @auth
        @if (auth()->user()->isAdmin())
            <a href="workers/create" class="btn btn-secondary">Sukurti nauja</a>
        @endif
    @endauth

    <table id="table_id" class="table table-striped">
        <thead>
            <tr>
                <th>Vardas</th>
                <th>El. Paštas</th>
                <th>Telefonas</th>
                <th>Imone</th>
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
                            <td><a href="workers/update/{{$worker['id']}}" class="btn btn-warning">Redaguoti</a></td>
                            <td><a href="workers/delete/{{$worker['id']}}" class="btn btn-danger">Panaikinti</a></td>
                        @endif
                    @endauth
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('scripts')
@endsection
