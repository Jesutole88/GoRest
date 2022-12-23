<div>

    <div style="text-align: center">
        <h1>Consumo API Go Rest</h1>
    </div>

    <div>
        <table style="width: 100%; text-align: center;">
            <thead>
                <th ><h1>Accciones</h1></th>
                <th colspan="2"><h1>Buscar usuario</h1></th>
            </thead>
            <tbody>
                <td><button><a href="{{ route ('usuario.crear') }}">Agregar Usuario</a></button></td>
                <td><button><a href="{{ route ('usuario.getuser') }}">Ir a Buscar por nombre</a></button></td>
                <td><button><a href="{{ route ('usuario.getmail') }}">Ir a Buscar por email</a></button></td>
                {{-- <td><a href="{{ route ('usuarios.index') }}">Principal</a></td> --}}
            </tbody>
        </table>
    </div>


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

</div>