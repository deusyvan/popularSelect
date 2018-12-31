<html>
	<head>
		<meta charset="utf-8">
		<title>MVC</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
		
	</head>
	
	<body>
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		<script type="text/javascript">var BASE_URL = '<?php echo BASE_URL; ?>';</script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js.js" ></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/javascript.js" ></script>	
	</body>
</html>