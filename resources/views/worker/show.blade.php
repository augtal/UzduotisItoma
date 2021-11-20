@extends('layouts.app')

@section('content')
<div class="container">
    Show workers!

    @auth
        @if (auth()->user()->isAdmin())
            <a href="workers/create" class="btn btn-info">Sukurti nauja</a>
        @endif
    @endauth

    <table id="table_id" class="display">
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
                    <td>{{$worker['company']}}</td>
                    @auth
                        @if (auth()->user()->isAdmin())
                            <td><a href="workers/update/{{$worker['id']}}" class="btn btn-info">Redaguoti</a></td>
                            <td><a href="workers/delete/{{$worker['id']}}" class="btn btn-info">Panaikinti</a></td>
                        @endif
                    @endauth
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('scripts')
    <script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
    </script>
@endsection
