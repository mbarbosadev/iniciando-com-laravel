<html>
	
	<body>
		<form method="post" action="<?php echo route('client.store') ?>">
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<input type="text" name="value">
			<button type="submit">Enviar</button>
		</form>
	</body>
	
</html>