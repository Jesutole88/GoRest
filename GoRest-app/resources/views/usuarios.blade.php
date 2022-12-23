<h1>Usuarios</h1>

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