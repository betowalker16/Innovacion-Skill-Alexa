<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Este mi proyecto final">
    <meta name="author" content="">
    <title>Inicio de sesion</title>
    <script type="text/javascript" src="/test/wp-content/themes/child/script/jquery.jcarousel.min.js"></script>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                                    </div>
                                    <form class="user" action="php/checkLogin.php" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" 
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Ingresa tu correo electronico"name="UserName">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Ingresa la contraseña" name="password">
                                        </div>
                                        <a id="login" class="btn btn-primary btn-user btn-block" style="background-color: #29323d; font-weight: bold; border: 1px solid #29323d;">
                                            Iniciar sesion
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Olvidaste tu contraseña?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.html">Crea una cuenta!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script>
      document.getElementById('login').addEventListener('click', function(event) {
    event.preventDefault();

    // Obtener los valores de los campos de entrada
    var email = document.getElementById('exampleInputEmail').value;
    var password = document.getElementById('exampleInputPassword').value;

    // Validar que ambos campos estén llenos
    if (email === '' || password === '') {
        alert('Por favor, completa todos los campos.');
        return;
    }

    // Si los campos están llenos, enviar el formulario
    document.forms[0].submit();
});

    </script>

    

</body>

</html>