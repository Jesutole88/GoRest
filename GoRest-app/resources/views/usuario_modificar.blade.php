<h1>Modificar Usuario</h1>

<form action="{{ route ('usuario.update') }}" method="post">
    @csrf
    <input type="hidden" name="id" id="id" value="{{$data['id']}}"/>
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{$data['name']}}" required/>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{$data['email']}}" required/>
    <label for="gender">Genero</label>
    <input type="text" name="gender" id="gender" value="{{$data['gender']}}" required/>
    @if($data['status']=='active'){{$activo = 'selected'}}{{ $inactivo = ''}} @else {{$activo = '' }}{{$inactivo = 'selected'}}@endif
    <select name="status" id="status"required>
        <option value="active" {{$activo}} >Activo</option>
        <option value="inactive" {{$inactivo}}>Inactivo</option>
      </select>
    <button type="submit">Modificar</button>
</form>

<form action="{{ route ('usuarios.index') }}">
  @csrf
  <label for="">Vuelve a la pagina principal</label>
  <button type="submit">Volver</button>
</form>