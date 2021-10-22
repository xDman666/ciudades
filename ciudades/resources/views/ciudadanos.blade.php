<h1>CIUDADANOS de </h1>
@foreach($ciudadanos as $ciudadano)
    <p>{{$ciudadano->toString()}}</p>
@endforeach


<p>-----------------------------</p>
<h2>Para añadir un nuevo ciudadano</h2>
<form action="add" method="post">
    <input type="hidden" name="ciudad_id" value="{{$id}}">
    <label for="nomb"> Nombre</label>
    <input type="text" id="nomb" name="nomb">
    <label for="dni">DNI</label>
    <input type="number" id="dni" name="dni">
    <label for="telefono">Número de teléfono</label>
    <input type="number" id="telefono" name="telefono">
    <button type="submit">Añadir</button>
</form>

<a href="listar"> <strong>Volver</strong></a>
