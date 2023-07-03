<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Listado De Personas</h1>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <a class="btn btn-outline-success mb-3" href="{{ route('usuarios.create') }} "> Crear Usuarios</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tipo Identificación</th>
                    <th scope="col">Número Identificacion</th>
                    <th scope="col">Primer Nombre</th>
                    <th scope="col">Segundo Nombre</th>
                    <th scope="col">Primer Apellido</th>
                    <th scope="col">Segundo Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Options</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td scope="row">{{ $user->id }}</td>
                        <td>{{ $user->tipo_identificacion }}</td>
                        <td>{{ $user->numero_identificacion }}</td>
                        <td>{{ $user->primer_nombre }}</td>
                        <td>{{ $user->segundo_nombre }}</td>
                        <td>{{ $user->primer_apellido }}</td>
                        <td>{{ $user->segundo_apellido }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->foto }}</td>

                        <td>
                            <form action="{{ route('usuarios.destroy', $user->id) }}" method="Post">
                                <a class="btn btn-outline-primary"
                                    href="{{ route('usuarios.edit', $user->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $users->render() }}



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    </div>
</body>

</html>