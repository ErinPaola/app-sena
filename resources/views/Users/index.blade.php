<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <p> usuarios</p>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Primer Nombre</th>
                    <th scope="col">Segundo Nombre</th>
                    <th scope="col">Primer Apellido</th>
                    <th scope="col">Segundo Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col" colspan="2">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td scope="row">{{ $user->id }}</td>
                        <td>{{ $user->primer_nombre }}</td>
                        <td>{{ $user->segundo_nombre }}</td>
                        <td>{{ $user->primer_apellido }}</td>
                        <td>{{ $user->segundo_apellido }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                          <button type="submit" class="btn btn-danger">Actualizar</button>
                          <button type="submit" class="btn btn-danger">Editar</button>

                         
                          <button type="submit" class="btn btn-danger">Eliminar</button>
                         
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
