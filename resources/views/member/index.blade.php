@extends('layouts.app')

@section('content')

{{ Session::get('message') }}


<center><h1> Hello Member  {{ Auth::user()->name }} !<br/>
						Selamat Datang Di List Kendaraan </h1></center>

<hr style="height:3px;background:#ADE8E6;color:#ADE8E6;">
<h3><p><a href="/member/create">Create List Kendaraan</a></p></h3>


@foreach ($kendaraans as $kendaraan)
<hr style="height:3px;background:#ADE8E6;color:#ADE8E6;">
<h3><p>{{ $kendaraan->id }}</p></h3>


<h3><p>{{ $kendaraan->jenis}}</p></h3>

@endforeach
<hr style="height:3px;background:#ADE8E6;color:#ADE8E6;">
@endsection
