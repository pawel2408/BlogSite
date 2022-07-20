@extends('layouts.master')

@section('bodyclass')
   <body>
@endsection

@section('content')
<div class="container mt-5">
  <!-- Example row of columns -->
    <div class="content">
        <div class="alert alert-warning" role="alert">
      		<strong>Nic nie znaleziono!</strong> Przejdź na <a href="{{ url('/') }}">Stronę domową</a>.
    	</div>
    </div>
  </div> <!-- /container -->
@endsection