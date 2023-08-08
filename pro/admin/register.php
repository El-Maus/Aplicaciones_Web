<?php include "./templates/top.php"; ?>

<?php include "./templates/navbar.php"; ?>

<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-4">
			<h4>Registro de Vendedor</h4>
			<p class="message"></p>
			<form id="admin-register-form">
			  <div class="form-group">
			  <small id="emailHelp" class="form-text text-muted"><a href="http://localhost/project/itp/index1.php">Inicio</a></small>
			    <label for="name">Nombre</label>
			    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
			  </div>
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
			  </div>
			  <div class="form-group">
			    <label for="password">Contrasena</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <label for="cpassword">Confirmar Contrasena</label>
			    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Password">
			  </div>
			  <input type="hidden" name="admin_register" value="1">
			  <button type="button" class="btn btn-primary register-btn">Registrar</button>
			</form>
		</div>
	</div>
</div>





<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
