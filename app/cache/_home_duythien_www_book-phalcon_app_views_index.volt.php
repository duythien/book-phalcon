<!DOCTYPE html>
<html>
	<head>
		<title>Phalcon PHP Framework</title>

<?php echo $this->tag->stylesheetLink('//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css', false); ?>
<?php echo $this->tag->stylesheetLink('//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css', false); ?>
	</head>
	<body>
		<?php echo $this->getContent(); ?>
	</body>
</html>