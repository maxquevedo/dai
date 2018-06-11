<?php
	require('head.php');
?>
<body>
    <div class="container">
        <div class="form-signin" role="form">
            <h3 class="form-signin-heading col-lg-9 font-weight-bold offset-md-2 text-center">Ingrese sus datos</h3>
            <input type="email" id="usuario" class="form-control" placeholder="Usuario" required autofocus>
            <input type="password" id="pass" class="form-control" placeholder="Contraseña" required>
            <button class="btn btn-lg btn-primary btn-block" id="singin" type="button">ingresar</button>
        </div>
    </div>
    <div class="container" id="resultado">
    </div>
</body>
<?php
	require('footer.php');
?>
