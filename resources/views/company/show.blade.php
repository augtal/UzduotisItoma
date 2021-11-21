@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Companies!</h3>

    @isset($message)
        <h4 style="color: red"> {{$message}} </h4>
    @endisset

    @auth
        @if (auth()->user()->isAdmin())
            <a href="companies/create" class="btn btn-secondary">Sukurti nauja</a>
        @endif
    @endauth

    <table id="table_id" class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Pavadinimas</th>
                <th scope="col">El. Paštas</th>
                <th scope="col">Interneto svetaine</th>
                <th scope="col">Logotipas</th>
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
                            <td><a href="companies/update/{{$item['id']}}" class="btn btn-warning">Redaguoti</a></td>
                            <td><a href="companies/delete/{{$item['id']}}" class="btn btn-danger">Panaikinti</a></td>
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
