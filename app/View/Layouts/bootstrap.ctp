<!DOCTYPE html>
<html lang="en">
  <head>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $this->Html->css('style');

		echo $this->Html->css('/css/login-form.css');
		echo $this->Html->css('/css/pre-loader.css');
		echo $this->Html->css('/js/bootstrap-3.2.0-dist/css/bootstrap.min.css');
		echo $this->Html->css('/js/bootstrap-3.2.0-dist/css/bootstrap-theme.css');
		echo $this->Html->script('jquery-1.10.2.min.js');
		echo $this->Html->script('bootstrap-3.2.0-dist/js/bootstrap.min.js');
		echo $this->Html->script('/js/socket.io.js');
		// echo $this->Html->script('/js/main.js');

	?>

	<!-- Latest compiled and minified CSS -->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<?php
		echo $this->Html->script('/js/main.js');
		echo $this->Html->script('/js/chat.js');
	?>

    <style type="text/css">
    	body{ padding: 70px 0px; }
    </style>

  </head>

  <body>

    <?php echo $this->Element('navigation'); ?>

    <div class="container">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>

    </div><!-- /.container -->
	<?php //echo $this->element('sql_dump'); ?>

  </body>
</html>
