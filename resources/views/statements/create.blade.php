@extends('master')
@section('title', 'registrering')

@section('content')
    <form method="POST" action="/statements">
        {!! csrf_field() !!}

        <div>
            <input type="hidden" name="survey" value="1">
        </div>

        <div class="col-md-6">
            Gjeldende elev:
            <select name="by_user" class="form-control">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6">
            Situasjon
            <input type="number" name="context">
        </div>

        <div class="col-md-6">
            Referert elev
            <select name="ref_user" class="form-control">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit">Svar</button>
        </div>
    </form>
@endsection