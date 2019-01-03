<?php
/* Smarty version 3.1.33, created on 2018-12-15 19:54:20
  from 'W:\domains\proect\application\views\template_view.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1531bc119e12_79499604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d331b101152437be1becc206d3419c0140d4897' => 
    array (
      0 => 'W:\\domains\\proect\\application\\views\\template_view.php',
      1 => 1544888258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1531bc119e12_79499604 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>
		    <?php echo '<?php ';?>echo $title;<?php echo '?>';?>
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

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav">
			    <li><a href="/">Домашняя страница<span class="sr-only">(current)</span></a></li>
			    <li><a href="/editing">Моя страница</a></li>
			    <li><a href="/executor">Проекты</a></li>
			    <li><a href="/executor">Помощь</a></li>
				<li><a href="/tasks">Задачи</a></li>
		    </ul>
			<ul class="nav navbar-nav navbar-right">
			    <li><a href="#">Имя пользователя</a></li>
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
			<?php echo '<?php ';?>include 'application/views/'.$content_view; <?php echo '?>';?>
		</div>
	    <div class="rightBase col-xs-6 col-md-2">
			</br>
			</br>
			</br>
			</br>
			<div class="row">
				<h4>Задачи</h4>
			</div>
		</div>
    </div>

	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/static/packages/bootstrap-3.3.7-dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
