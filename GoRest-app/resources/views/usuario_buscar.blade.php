<div>
  <h1>Buscar Usuario por Nombre</h1>

  <form action="{{ route ('usuario.getusername') }}" method="post">
      @csrf
      <label for="name">Nombre</label>
      <input type="text" name="name" id="name" required/>
      <button type="submit">Buscar</button>
  </form>
  
  <form action="{{ route ('usuarios.index') }}">
    @csrf
    <label for="">Vuelve a la pagina principal</label>
    <button type="submit">Volver</button>
  </form>
</div>
