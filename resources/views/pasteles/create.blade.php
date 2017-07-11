
Crea tu pastel
    {!! Form::open([ 'route' => 'pasteles.store', 'method' => 'POST']) !!}
        @include('pasteles.partials.fields')
        <button type="submit" class="btn btn-success">Guardar</button>
    {!! Form::close() !!}
