@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

				
				@if(Auth::user()->jabatan == 'ADMIN')
                <div class="panel-body">
						Hello Admin  {{ Auth::user()->name }} !<br/>
						Email Anda : {{ Auth::user()->email }} <br/>
						Anda Login menggunakan username : {{ Auth::user()->username }}
						<br>
						<a href="/kendaraan"><h3> List Kendaraan </h3></a>
						
						
						
                </div>
				@else
                <div class="panel-body">
						Hello Member  {{ Auth::user()->name }} !<br/>
						Email Anda : {{ Auth::user()->email }} <br/>
						Anda Login menggunakan username : {{ Auth::user()->username }}
						
						<br>
						<a href="/member"><h3> List Kendaraan </h3></a>
						
						
						
                </div>
				@endif
				
				
				
            </div>
        </div>
    </div>
</div>
@endsection
