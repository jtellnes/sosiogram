<form method="POST" action="/statements">
    {!! csrf_field() !!}

    <div>
        <input type="hidden" name="survey" value="1">
    </div>

    <div class="col-md-6">
        Gjeldende elev:
        <input type="number" name="by_user">
    </div>

    <div class="col-md-6">
        Situasjon
        <input type="number" name="context">
    </div>

    <div class="col-md-6">
        Referert elev
        <input type="number" name="ref_user">
    </div>

    <div>
        <button type="submit">Svar</button>
    </div>
</form>