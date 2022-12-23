<h1>Hubieron problemas!</h1>

<h2>Aviso!</h2>

<h3>{{ "Mensaje: ".$data['mensaje']}}</h3>
<h3>{{ "Codigo: ".$data['codigo']}}</h3>
<h3>{{ "Descripción: ".$data['texto']}}</h3>

<form action="{{ route ('usuarios.index') }}">
    @csrf
    <label for="">Vuelve a la pagina principal</label>
    <button type="submit">Volver</button>
</form>
