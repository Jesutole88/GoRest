<div>
  <h1>Resultado Busqueda Usuario</h1>

  <table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Sexo</th>
            <th>Estado</th>
            <th colspan="2">Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $user)
            <tr>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['gender']}}</td>
                <td>{{$user['status']}}</td>
                
                <td>
                    <a href="{{ route ('usuario.modificar',$user['id']) }}">Modificar</a>
                </td>
                <td>
                    <a href="{{ route ('usuario.delete',$user['id']) }}">Eliminar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
  
  <form action="{{ route ('usuarios.index') }}">
    @csrf
    <label for="">Vuelve a la pagina principal</label>
    <button type="submit">Volver</button>
  </form>
</div>
