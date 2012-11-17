<?php include('header.php'); ?>
		
<div class="modal login-form show">
	<div class="modal-header">
		<h3>Вход в систему</h3>
	</div>
  
	<div class="modal-body">
		<form class="form-horizontal">
			<div class="control-group">
				<input type="text" id="login" placeholder="Логин">
			</div>
			<div class="control-group">					
				<input type="password" id="password" placeholder="Пароль"><br/>
				<a id="forg-pwd" class="pull-right" href="main.php"><small>Забыли пароль?</small></a>
			</div>
			<button id="submit" class="btn btn-primary btn-block btn-large">Войти</button>			
		</form>
	</div>
	
	<div class="modal-footer">
		<center><small class="muted">©2012 mediamara.by</small></center>
	</div>
</div>
		

<?php require_once('footer.php'); ?>