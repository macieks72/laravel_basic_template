@extends('layout')

@section('title', 'Product - Show')

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
		<h1>Szczegóły produktu</h1>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover ">		
		<tbody>			
			<tr>
				<td>Nazwa produktu</td>
				<td>{{ $product->name }}</td>
			</tr>
			<tr>
				<td>Numer katalogowy</td>
				<td>{{ $product->catalog }}</td>
			</tr>
			<tr>
				<td>Jednostka miary</td>
				<td>{{ $product->unit }}</td>
			</tr>
			<tr>
				<td>Ilość</td>
				<td>{{ $product->amount }}</td>
			</tr>
			<tr>
				<td>Cena</td>
				<td>{{ $product->price }} zł</td>				
			</tr>
			
		</tbody>	
		</table>
	</div>	

	<a href="/products/{{ $product->id }}/edit" class="btn btn-primary " id="btn_edit">Edytuj produkt</a>
	<a href="#modal-dialog" class="btn btn-primary btn-danger modal-toggle" data-toggle="modal" id="btn_delete">Usuń produkt</a>

@endsection