<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    @include('sweetalert::alert')
    <style>
        .register-photo {
            background: #ffffff;
            padding: 80px 0;
        }

        .register-photo .image-holder {
            display: table-cell;
            width: auto;
            background-size: contain;
            background-repeat: no-repeat;
        }

        .register-photo .form-container {
            display: table;
            max-width: 900px;
            width: 90%;
            margin: 0 auto;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
        }

        .register-photo form {
            display: table-cell;
            width: 400px;
            background-color: #ffffff;
            padding: 40px 60px;
            color: #000000;
        }

        @media (max-width:991px) {
            .register-photo form {
                padding: 50px;
            }
        }

        .register-photo form h2 {
            font-size: 24px;
            line-height: 1.5;
            margin-bottom: 30px;
        }

        .register-photo form .form-control {
            background: #f7f9fc;
            border: none;
            border-bottom: 1px solid #dfe7f1;
            border-radius: 0;
            box-shadow: none;
            outline: none;
            color: inherit;
            text-indent: 6px;
            height: 40px;
        }

        .register-photo form .form-check {
            font-size: 13px;
            line-height: 20px;
        }

        .register-photo form .btn-primary {
            background: #1371dd;
            border: none;
            border-radius: 4px;
            padding: 11px;
            box-shadow: none;
            margin-top: 35px;
            text-shadow: none;
            outline: none !important;
        }

        .register-photo form .btn-danger {
            background: #EA2020;
            border: none;
            border-radius: 4px;
            padding: 11px;
            box-shadow: none;
            margin-top: 35px;
            text-shadow: none;
            outline: none !important;
        }

        .register-photo form .btn-primary:hover,
        .register-photo form .btn-primary:active {
            background: #3dc6db;
            ;
        }

        .register-photo form .btn-danger:hover,
        .register-photo form .btn-danger:active {
            background: #ea5454;
            ;
        }

        .register-photo form .btn-primary:active {
            transform: translateY(1px);
        }

        .register-photo form .already {
            display: block;
            text-align: center;
            font-size: 12px;
            color: #000000;
            opacity: 0.9;
            text-decoration: none;
        }
    </style>
    <div class="register-photo">
        <div class="form-container">
            @csrf
            <h4 class="text-center">Información rol</h4>
            <br>
            <div class="text-center">
                <a class="btn btn-primary" href="">Editar permisos</a>
            </div>
            <br>
            <div class="row g-3">

                <div class="form-group col-md-6">
                    <label for="id">ID</label>
                    <input name="id" id="id" class="form-control" type="text" value="{{ $role->id }}"
                        disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="id">Nombre rol</label>
                    <input name="id" id="id" class="form-control" type="text" value="{{ $role->name }}"
                        disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Permisos</label>
                    
                    @foreach ($rol_permisos as $permiso)
                    <input class="form-control" type="text" value="{{ $permiso->name }}" disabled>  
                    @endforeach
                       
                </div>
            </div>
        </div><br>
        <div class="form-group  d-flex justify-content-around">
            <a class="btn btn-primary" href="{{ route('roles.index') }}">Volver</a>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
