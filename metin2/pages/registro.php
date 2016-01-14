<style>
	#formulario-registro {
		width: 600px;
		margin-left:90px;
		margin-top: 100px;
	}
</style>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Registro de Usuarios</h3>
  </div>
  <div class="panel-body">	
	  <?php

	  	// Recuperar datos
	  	$nombre_usuario = $_POST['usuario'];
	  	$contrasena = $_POST['contrasena'];
	  	$nombre_real = $_POST['nombre_real'];
	  	$codigo_borrado = $_POST['codigo_borrado'];
	  	$email = $_POST['email'];
	  	$facebook = $_POST['facebook'];
	  	$pais = $_POST['pais'];
	  	/// ------------------------ ///



	  ?>
	<div class="row">
		<div class="col-md-3">
			<img src="http://wiki.metin2.es/images/6/62/Guerrero_Masculino.png" alt="">
		</div>
		<div class="col-md-9" style="background: url('https://frikiplaster.files.wordpress.com/2011/08/pergamino.jpg') top left no-repeat;">
		<div id="formulario-registro">

			<form action="" method="post">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Usuario</label>
			    <input type="email" class="form-control" style="width:80%;" id="exampleInputEmail1" placeholder="Usuario">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Contraseña</label>
			    <input type="password" class="form-control" style="width:80%;" id="exampleInputPassword1" placeholder="Contraseña">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Nombre Real</label>
			    <input type="password" class="form-control" style="width:80%;" id="exampleInputPassword1" placeholder="Nombre">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Codigo de borrado de personajes</label>
			    <input type="password" class="form-control" style="width:80%;" id="exampleInputPassword1" placeholder="Codigo de borrado">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Email</label>
			    <input type="password" class="form-control" style="width:80%;" id="exampleInputPassword1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Facebook (Opcional)</label>
			    <input type="password" class="form-control" style="width:80%;" id="exampleInputPassword1" placeholder="Url">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Pais</label>
			    <input type="password" class="form-control" style="width:80%;" id="exampleInputPassword1" placeholder="Pais">
			  </div>
			  <button type="submit" class="btn btn-primary">Registrar</button>
			</form><br><br><br><br><br>
		</div>
		</div>
	</div>
  </div>
</div>
