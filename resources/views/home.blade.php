@extends('master')

@section('title', 'Start')

@section('content')

    <ul class="list-group">
        <li class="list-group-item"><a href="{{ route('statements.index') }}">Svar</a></li>
        <li class="list-group-item"><a href="{{ route('contexts.index') }}">Situasjoner</a></li>
    </ul>

@endsection
