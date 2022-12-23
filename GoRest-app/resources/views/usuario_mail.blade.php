<div>
  <h1>Buscar Usuario por Email</h1>

  <form action="{{ route ('usuario.getusermail') }}" method="post">
      @csrf
      <label for="email">Email</label>
      <input type="text" name="email" id="email" required/>
      <button type="submit">Buscar</button>
  </form>
  
  <form action="{{ route ('usuarios.index') }}">
    @csrf
    <label for="">Vuelve a la pagina principal</label>
    <button type="submit">Volver</button>
  </form>
</div>
