<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>- Laravel</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>EditAR Usuario</h2>
                    </div>
                    <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('usuarios.index') }}" enctype="multipart/form-data"> Atrás</a>
                </div>
            </div>
        </div>
        @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('usuarios.update',$users->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Primer Nombre:</strong>
                        <input type="text" name="primer_nombre" value="{{ $users->primer_nombre }}" class="form-control"_nombre">
                        @error('primer_nombre')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Segundo Nombre:</strong>
                        <input type="text" name="segundo_nombre" value="{{ $users->segundo_nombre }}" class="form-control">
                        @error('segundo_nombre')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Primer Apellido:</strong>
                        <input type="text" name="primer_apellido" value="{{ $users->primer_apellido }}" class="form-control">
                        @error('primer_apellido')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Primer Apellido:</strong>
                        <input type="text" name="primer_apellido" value="{{ $users->primer_apellido }}" class="form-control">
                        @error('primer_apellido')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>users Email:</strong>
                        <input type="email" name="email" class="form-control" value="{{ $users->email }}">
                        @error('email')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

</body>
</html>
