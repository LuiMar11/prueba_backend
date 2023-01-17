<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Prueba backend</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!--Iconos-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-success">
                    <div class="card-header text-center">
                        <h3>Lista Permisos</h3>
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <a class="btn btn-success" href="{{ route('welcome') }}">Volver</a>
                                <a class="btn btn-primary" href="{{ route('permisos.create') }}">Nuevo permiso</a>
                            </div>
                        </div>
                    </div>
                    <div class=" card-body justify-content-center table-responsive">
                        <table class="table table-hover text-center">
                            <thead class="table-ligth" style="background-color: #296bd4;">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($permisos as $permiso)
                                    <tr>
                                        <td>
                                            {{ $permiso->id }}
                                        </td>
                                        <td>
                                            {{ $permiso->name }}
                                        </td>
                                        <td>
                                            <a class="btn btn-success" href="{{ route('permisos.edit', $permiso->id) }} "><i
                                                    class="fas fa-edit"></i></a>
                                        </td>
                                        <td>
                                            <form action="{{ route('permisos.destroy', $permiso->id) }}" method="POST">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger" type="submit"
                                                    onclick="return confirm('¿Desea eliminar el permiso?')"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
