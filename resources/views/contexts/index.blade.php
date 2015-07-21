@extends('master')
@section('title', 'Situasjoner')

@section('content')
    <h1>Situasjoner</h1>
    <ul>
        @foreach($contexts as $context)
            <li>{{ $context->name }}</li>
        @endforeach
    </ul>
    <a href="{!! route('contexts.create') !!}" class="btn btn-default">Legg til ny...</a>
@endsection