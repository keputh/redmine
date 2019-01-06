<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>
		    <?php echo $title;?>
		</title>
		<meta charset="UTF-8">
		<link href="/static/packages/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="static/style/style.css">
    </head>
	
    <body>
<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  
		</div>
		  <?php $_SESSION['user'] = 'davidenko.d';?>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav">
			    <li><a href="/">Домашняя страница<span class="sr-only">(current)</span></a></li>
			    <li><a href="#">Моя страница</a></li>
			    <li><a href="#">Проекты</a></li>
			    <li><a href="/wyCash">Валюта</a></li>
				<li><a href="/tasks">Задачи</a></li>
				<li><a href="/editing">Сотрудники</a></li>
		    </ul>
			<ul class="nav navbar-nav navbar-right">
			    <li><a href="#">Вы вошли как: <?php echo $_SESSION['user'];?></a></li>
				<li><a href="#">Моя учетная запись</a></li>
				<li><a href="#">Выйти</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->

	</nav>
</br>
    <div class="row">
	    <div class="leftBase col-xs-12 col-md-10">
			</br>
			</br>
			</br>
			</br>
			<?php $smarty->display('application/views/'.$content_view); ?>
		</div>
	    <div class="rightBase col-xs-6 col-md-2">
			</br>
			</br>
			</br>
			</br>
			<div class="row">
				<h4>Задачи</h4>
				<ul class="list-unstyled">
					<li><a href="#">Посмотреть все задачи</a></li>
					<li><a href="#">Краткое описание</a></li>
					<li><a href="#">Диаграмма Ганта</a></li>
				</ul>

				<h4>Helpdesk отчеты</h4>
				<ul class="list-unstyled">
					<li><a href="#">Время первого ответа</a></li>
					<li><a href="#">Загрузка в течение дня</a></li>
				</ul>

				<h4>Сохраненные отчеты</h4>
				<ul class="list-unstyled">
					<li><a href="#">inProgress #All</a></li>
					<li><a href="#">Issues</a></li>
					<li><a href="#">Задачи</a></li>
					<li><a href="#">Решенные задачи</a></li>
				</ul>
			</div>
		</div>
    </div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="/static/packages/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </body>
</html>