@extends('master')
@section('title', 'Situasjoner')

@section('content')
    <h2>Situasjoner</h2>
    <hr/>
    <ul class="list-group">
        @foreach($contexts as $context)
            <li class="list-group-item">
                <form action="{{ route('contexts.destroy', $context) }}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_method" value="DELETE"/>
                    <b>{{ $context->name }}</b>
                    <input type="submit" value="Slett" class="btn btn-xs btn-danger"/>
                </form>
            </li>
        @endforeach
        <li class="list-group-item">
            <form action="{{ route('contexts.store') }}" method="post">
                {!! csrf_field() !!}
                <input type="text" name="name" placeholder="Ny situasjon"/>
                <input type="submit" value="Legg til" class="btn btn-xs btn-success"/>
            </form>
        </li>
    </ul>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection