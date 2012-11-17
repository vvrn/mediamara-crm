<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="ru">
	<title>mmcrm</title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
	<link href="./css/bootstrap.css" type="text/css" media="all" rel="stylesheet">
	<link href="./css/bootstrap-responsive.css" media="all" type="text/css" rel="stylesheet">
	<link href="./css/style.css" media="all" type="text/css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
	<script src="./js/bootstrap.js"></script>
</head>
<body class="grey-bg">
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
		
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