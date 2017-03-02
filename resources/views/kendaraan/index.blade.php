{{ Session::get('message') }}
@extends('layouts.app')
@section('content')
				<div class="panel-body" >
				
						
						<center><h1> Hello Admin  {{ Auth::user()->name }} !<br/>
						Selamat Datang Di List Kendaraan </h1></center>
						
                </div>
				<hr style="height:3px;background:#ADE8E6;color:#ADE8E6;">
				<br>
					<a href="/kendaraan/create"><h3> Create List Kendaraan </h3></a>
				<br>
				


@foreach ($kendaraans as $kendaraan)

	<button><a href="/kendaraan/{{$kendaraan->id}}">	
			{{$kendaraan->id}}</a>	</button><br> 
			<h4>{{$kendaraan->jenis}}</h4>
			
			
		<button>
		<a href="/kendaraan/{{$kendaraan->id}}/edit"> Edit </a><br>
		</button>
		<br>
		
		
		<form class="" action="/kendaraan/{{$kendaraan->id}}" method="post">
		
			<input type="hidden" name="_method" value="delete">  
			<input type="hidden" name="_token" value="{{ csrf_token() }}">  
			<input type="submit" name="name" value="delete">
		
		</form>
		
		
		
	<br>		
	<hr style="height:3px;background:#ADE8E6;color:#ADE8E6;">
	<br>
@endforeach
@endsection

			