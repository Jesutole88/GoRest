<h1>Nuevo Usuario</h1>

<form action="{{ route ('usuario.store') }}" method="post">
    @csrf
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" required/>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" required/>
    <label for="gender">Genero</label>
    <input type="text" name="gender" id="gender" required/>
    <label for="status">Activo</label>
    <select name="status" id="status" required>
        <option value="active" >Activo</option>
        <option value="inactive">Inactivo</option>
      </select>
    <button type="submit">Guardar</button>
</form>

<form action="{{ route ('usuarios.index') }}">
  @csrf
  <label for="">Vuelve a la pagina principal</label>
  <button type="submit">Volver</button>
</form>