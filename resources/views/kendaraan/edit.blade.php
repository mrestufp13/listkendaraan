<h1>Edit Kendaraan List </h1>

<form class="" action="/kendaraan/{{$kendaraan->id}}" method="post">

	<input type="text" name="id" value="{{$kendaraan->id}}" placeholder="nomor Kendaraan (10 nomor)"> <br>
	
	<textarea name="jenis" rows="4" cols="30" placeholder="Jenis Kendaraan"> {{$kendaraan->jenis}}</textarea>
	
	<br>
	
	<input type="hidden" name="_method" value="put">  
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">  
	
	<input type="submit" name="name" value="edit">  

</form>