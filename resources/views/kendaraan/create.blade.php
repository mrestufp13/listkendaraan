<h1>Create List Kendaraan </h1>

<form class="" action="/kendaraan" method="post">

	<input type="text" name="id" value="" placeholder="nomor Kendaraan (10 nomor)"> <br>
	
	<textarea name="jenis" rows="4" cols="30" placeholder="Jenis Kendaraan"></textarea>
	
	<br>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">  
	
	<input type="submit" name="name" value="post">  

</form>