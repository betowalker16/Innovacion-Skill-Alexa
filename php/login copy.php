<!DOCTYPE html>
<html>

<head>
    <title>Inicio de sesión</title>
    <!-- Incluimos Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Inicio de sesión</h4>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" action="checkLogin.php" method="post">
                            <div class="form-group">
                                <label for="username" class="col-sm-4 control-label">Usuario</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="UserName" name="UserName"
                                        placeholder="Usuario">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-4 control-label">Contraseña</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Contraseña">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-4 col-sm-8">
                                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <p>¿No tienes una cuenta? <a href="signUp.php">Crear cuenta</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Incluimos Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
