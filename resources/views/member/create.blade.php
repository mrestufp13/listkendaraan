@if (count($errors) > 0)
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif



<h1>Create List Kendaraan </h1>

<form class="" action="/member" method="post">

	<input type="text" name="id" value="" placeholder="nomor Kendaraan (10 nomor)"> <br>
	
	<textarea name="jenis" rows="4" cols="30" placeholder="Jenis Kendaraan"></textarea>
	
	<br>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">  
	
	<input type="submit" name="name" value="post">  

</form>
