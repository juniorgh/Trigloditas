<form action="{{ route('admin.cliente.store') }}" method="POST">
	@csrf
	<label> Whats</label><br>
	<input type="text" name="whatsapp" id=""><br>
	<label> Foto de perfil</label><br>
	<input type="text" name="foto" id=""><br>
	<input type="hidden" name="user_id" value="{{ $user_id }}" id="">
	<br>
	<input type="submit" value="cadastrar">
</form>