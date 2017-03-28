@extends('layout')

@section('title', 'Product - Create')


@section('content')
	<div class="page-header">
    	<h1>Utwórz nowy produkt</h1>
    </div>
    
   @if (count($errors))
	   <div class="alert alert-danger">
	    	<ul>
		    	@foreach ($errors->all() as $error)
		    		<li>{{ $error }}</li>
		    	@endforeach
	    	</ul>
	    </div>
    @endif

    <div class="form-group">
	
	<form class="form-horizontal" action="/products" method="post" accept-charset="utf-8" role="form">

		{{ csrf_field() }}
		
		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">Nazwa produktu</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"/>
			</div>
		</div>
		
		<div class="form-group">
			<label for="catalog" class="col-sm-2 control-label">Numer katalogowy</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="catalog" name="catalog" value="{{ old('catalog') }}" />
			</div>
		</div>

		<div class="form-group">
			<label for="unit" class="col-sm-2 control-label">Jednostka miary</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="unit" name="unit" value="{{ old('unit') }}"/>
			</div>
		</div>

		<div class="form-group">
			<label for="amount" class="col-sm-2 control-label">Ilość</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="amount" name="amount" value="{{ old('amount') }}"/>
			</div>
		</div>

		<div class="form-group">
			<label for="price" class="col-sm-2 control-label">Cena</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" />
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-2">
				<button type="submit" class="btn btn-primary ">Utwórz</button>
			</div>
		</div>

	</form>	  


@endsection