<html>
	<h1>Site Client</h1>
	<body>
		<form method="post" action="{{ route('eloquent.client.store') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="text" name="name" placeholder="Name">
			<input type="text" name="address" placeholder="Address">
			<button type="submit">Enviar</button>
		</form>
	</body>
	
</html>