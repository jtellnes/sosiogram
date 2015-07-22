@extends('master')
@section('title', 'registrering')

@section('content')
    <h2>Legg til situasjon</h2>
    <hr/>
    <form method="POST" action="/contexts">
        {!! csrf_field() !!}
        <div class="row form-group">
            <div class="col-md-6">
                <label for="name" class="label">Situasjon</label>
                <input type="text" name="name" class="input-lg" />
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Lagre</button>
            </div>
        </div>
    </form>
@endsection