@extends('master')
@section('title', 'registrering')

@section('content')
    <div class="row">
        <h2>Registrering</h2>
    </div>
    <hr/>
    <form method="POST" action="/statements">
        {!! csrf_field() !!}

        <div>
            <input type="hidden" name="survey" value="1">
        </div>

        <div class="row">
            <div class="col-md-3">
                <label for="by_user" class="dropdown-header">Gjeldende elev</label>
            </div>
            <div class="col-md-3">
                <label for="context" class="dropdown-header">Situasjon</label>
            </div>
            <div class="col-md-3">
                <label for="ref_user" class="dropdown-header">Referert elev</label>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-3">
                <select name="by_user" class="form-control">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <select name="context" class="form-control">
                    @foreach($contexts as $context)
                        <option value="{{ $context->id }}">{{ $context->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <select name="ref_user" class="form-control">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">Svar</button>
            </div>
        </div>
    </form>
@endsection