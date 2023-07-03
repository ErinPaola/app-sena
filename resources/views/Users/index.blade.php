<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Laravel 9 CRUD Tutorial Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <a class="btn btn-success" href="{{ route('usuarios.create') }}">Crear Usuario</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Primer Nombre</th>
                    <th scope="col">Primer Nombre</th>
                    <th scope="col">Primer Nombre</th>
                    <th scope="col">Segundo Nombre</th>
                    <th scope="col">Primer Apellido</th>
                    <th scope="col">Segundo Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Foto</th>

                    <th scope="col" colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td scope="row">{{ $user->id }}</td>
                        <td>{{ $user->id_tipo_identificacion }}</td>
                        <td>{{ $user->numero_identificacion }}</td>
                        <td>{{ $user->primer_nombre }}</td>
                        <td>{{ $user->segundo_nombre }}</td>
                        <td>{{ $user->primer_apellido }}</td>
                        <td>{{ $user->segundo_apellido }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->foto }}</td>
                        <td>
                            <form action="{{ route('usuarios.destroy',$user->id) }}" method="Post">
                            <a class="btn btn-primary" href="{{ route('usuarios.edit',$user->id) }}">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                            </td>
                            
                    </tr>

                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
