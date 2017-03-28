@extends('layout')
@section('title', 'Products - Index')

@section('content')

    <div class="page-header">
		<h1>Lista produktów</h1>
	</div>
	@if (count($products) == 0)
		Nie masz jeszcze żadnych produktów. 
	@else
		<div class="table-responsive">
			<table class="table table-bordered table-hover ">
			<thead>
				<tr>
					<th>Nazwa produktu</th>
					<th>Numer katalogowy</th>
					<th>Jednostka miary</th>
					<th>Ilość</th>
					<th>Cena</th>
					<th width="120"></th>		
				</tr>
			</thead>
			<tbody>
				@foreach ($products as $product)
					<tr>
						<td>{{ $product->name }}</td>
						<td>{{ $product->catalog }}</td>
						<td>{{ $product->unit }}</td>
						<td><div class="pull-right">{{ $product->amount }}</div></td>
						<td><div class="pull-right">{{ $product->price }} zł</div></td>
						<td>
							<div class="pull-right">
							<a href="/products/show/{{ $product->id }}" class="btn btn-primary btn-xs" id="btn_show">Pokaż</a>
							<a href="/products/{{ $product->id }}/edit" class="btn btn-primary btn-xs" id="btn_edit">Edycja</a>
							
							</div>
						</td>
					</tr>
				@endforeach
			</tbody>	
			</table>
		</div>	
	@endif
@endsection