<?php include "./templates/top.php"; ?>

<?php include "./templates/navbar.php"; ?>

<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
	<small id="emailHelp" class="form-text text-muted"><a href="http://localhost/project/itp/index1.php">Inicio</a></small>
		<div class="col-md-4">
			<h4>Ingreso Vendedor</h4>
			<p class="message"></p>
			<form id="admin-login-form">
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
			    <small id="emailHelp" class="form-text text-muted"><a href="http://localhost/project/itp/index1.php">Inicio</a></small>
			  </div>
			  <div class="form-group">
			    <label for="password">Contrasena</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  </div>
			  <input type="hidden" name="admin_login" value="1">
			  <button type="button" class="btn btn-primary login-btn">Entrar</button>
			</form>
		</div>
	</div>
</div>





<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
