<h1>Hola esto es para editar </h1>

@foreach($ciudades as $ciudad)
    <p>{{($ciudad->toString())}}</p>
    <form action="editar" method="get">
        <input type="hidden" name="id" value="{{$ciudad->id}}">
        <input type="hidden" name="metro" value="{{$ciudad->metro}}">
        <label for="nombre"> Nombre</label>
        <input type="text" id="nombre" name="nombre">
        <label for="habitantes">Habitantes</label>
        <input type="number" id="habitantes" name="habitantes">
        <label for="postal">Código postal</label>
        <input type="number" id="postal" name="postal">
        <button type="submit">cambiar</button>
    </form>
    <a href="editar?id={{$ciudad->id}}&metro=1">Metro sí</a>
    <a href="editar?id={{$ciudad->id}}&metro=0">Metro no</a>
    <p>-------------------------------</p>
@endforeach
