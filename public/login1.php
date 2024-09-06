<?php include '../templates/header.php'; ?>
<html>

<body>
<!--barra de sesion-->
<?php include '../templates/sesion.php'; ?>

<!--barra de navegacion-->

<div class="box1">
  <div class="row justify-content-center">
    <div class="col-md-auto">
		<div class="box" id="box">
			<div class="form-box sign-up-box">
				<form action="#">
					<h1>Crear cuenta</h1>
					<span class="mb-2">Usa tu nombre y correo para registrarte</span>
					<input type="text" placeholder="Nombre" />
					<input type="email" placeholder="Email" />
					<input type="password" placeholder="Contraseña" />
					<button class="mt-2">Registrar</button>
				</form>
			</div>
			<div class="form-box sign-in-box">
				<form action="#">
					<h1>Iniciar sesion</h1>
					<span class="mb-4">Ingresa tu correo y contraseña registrados</span>
					<input type="email" placeholder="Correo electrónico" />
					<input class="mb-2" type="password" placeholder="Contraseña" />
					<a id="link" href="#">Olvidaste la contraseña?</a>
					<button>Iniciar sesion</button>
				</form>
			</div>
			<div class="overlay-box">
				<div class="overlay">
					<div class="overlay-panel overlay-left">
						<h1>Bienvenido!</h1>
						<br>
						<br>
						<p>Inicia sesión para seguir sumando puntos con tus predicciones y alcanzar la cima del torneo.
						<br>¡Tu siguiente acierto está a solo un clic!</p>
						<button class="ghost mt-5" id="signIn">Iniciar sesion</button>
					</div>
					<div class="overlay-panel overlay-right">
						<h1>Regístrate!</h1>
						<br>
						<p>¡Únete a la competencia! 
						<br>Regístrate ahora en Polla Futbolera y comienza a demostrar tus conocimientos en cada partido.
						<br>
						<br>¡No te quedes fuera de la acción!</p>
						<button class="ghost mt-4" id="signUp">Registrarse</button>
					</div>
				</div>
			</div>
		</div>    
	</div>
  </div>
 </div>





<script src="../js/scripts.js"></script>

<!--formularios-->


</body>
</html>
<?php include '../templates/footer.php'; ?>
