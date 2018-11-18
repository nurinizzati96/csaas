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
		echo $this->Html->script('jquery-1.11.3.min');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('custom');
		echo $this->Html->css('font-awesome');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->Html->script('bootstrap');
		echo $this->Html->script('ckeditor/ckeditor');
	?>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>

  	<!-- Latest compiled and minified CSS 
  	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
-->
  	<!-- Latest compiled and minified JavaScript 
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    	body{ padding-top: 50px; }
    </style>

  </head>

  <body>

    <?php echo $this->Element('navigation'); ?>

    <div class="container">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
<?php echo $scripts_for_layout; ?>
<?php
if (class_exists('JsHelper') && method_exists($this->Js, 'writeBuffer')) echo $this->Js->writeBuffer();
?>  
			
<hr>


<div class="roboto_footer">

  <p class="text-center">
<?php echo $this->Html->image('lgfooter.jpg', array('alt' => 'CSAAS')); ?><br>
         <strong>C STUDENTS APPLICATION ACTIVITY SYSTEMS<strong>
	<br>Customized by Faculty of Information Management, Universiti Teknologi MARA Johor<br>
	<SCRIPT LANGUAGE="JavaScript">
    today=new Date();
    y0=today.getFullYear();
    </SCRIPT>
    Copyright &copy; 2016-<SCRIPT LANGUAGE="JavaScript">
    document.write(y0);
    </SCRIPT> CSAAS. All rights reserved. [Ver 1.0] <br>
	IP: <?php echo $this->request->clientIp(); ?> | Load: <?php echo round(microtime(true) - TIME_START, 3); ?>
  
  </p>
</div>				
	
		
    </div><!-- /.container -->

  </body>
</html>
