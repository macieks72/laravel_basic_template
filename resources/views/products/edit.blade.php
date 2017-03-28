@extends('layout')

@section('title', 'Product - Create')

@section('head')
	<script type="text/javascript">
		$(document).ready(function(){
			$('#modal-dialog').on('show');
			$('#btn_yes').click(function() {
			    $('form').submit();
			});
		});
	</script> 
@endsection

@section('content')

	{{-- Include partial modal view for confim delete --}}
	@include('products.partials.modal_confirm')

	<div class="page-header">
    	<h1>Edycja produktu</h1>
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
	
	<form class="form-horizontal" action="/products/{{ $product->id }}" method="post" accept-charset="utf-8" role="form">

		{{ csrf_field() }}

		<input type="hidden" name="_method" value="PUT">

		<div class="form-group">
			<label for="name" class="col-sm-2 control-label">Nazwa produktu</label>
			<div class="col-sm-5">

				<input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name ) }}"/>
			</div>
		</div>
		
		<div class="form-group">
			<label for="catalog" class="col-sm-2 control-label">Numer katalogowy</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="catalog" name="catalog" value="{{ old('catalog', $product->catalog) }}" />
			</div>
		</div>

		<div class="form-group">
			<label for="unit" class="col-sm-2 control-label">Jednostka miary</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="unit" name="unit" value="{{ old('unit', $product->unit) }}"/>
			</div>
		</div>

		<div class="form-group">
			<label for="amount" class="col-sm-2 control-label">Ilość</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="amount" name="amount" value="{{ old('amount', $product->amount) }}"/>
			</div>
		</div>

		<div class="form-group">
			<label for="price" class="col-sm-2 control-label">Cena</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}" />
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-5">
				<button type="submit" class="btn btn-primary ">Zapisz</button>
				<a href="#modal-dialog" class="btn btn-primary btn-danger modal-toggle" data-toggle="modal" id="btn_delete">Usuń produkt</a>
			</div>
		</div>

	</form>	  


@endsection