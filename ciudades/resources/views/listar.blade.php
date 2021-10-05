<h1>Hola esto es para listar </h1>

@foreach($ciudades as $ciudad)
    <p>{{($ciudad->toString())}}</p>
    <a href="editar?id={{$ciudad->id}}&metro={{$ciudad->metro}}">Editar Ciudad</a>
    <a href="ciudadanos/{{$ciudad->id}}">Ver ciudadanos</a>
    <p>------------------------------</p>
@endforeach
