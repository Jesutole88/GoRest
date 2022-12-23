

<div>
<center>
    
    <h1>Lista de Usuarios</h1>

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
</center>
</div>

<div>
    <h1>Buscar usuario</h1>
    <hr>
    <a href="{{ route ('usuario.getuser') }}">Ir a Buscar por nombre</a>
    <hr>
    <a href="{{ route ('usuario.getmail') }}">Ir a Buscar por email</a>
    <hr>
    <a href="{{ route ('usuarios.index') }}">Principal</a>

</div>