<div id="modal-dialog" class="modal">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
             <h3>Usuwanie produktu</h3>
        </div>
        <div class="modal-body">
             <p>Jesteś pewien, że chcesz usunąć ten produkt?</p>
        </div>
        <form action="/products/{{ $product->id }}" method="post">
        	{{ csrf_field() }}
			<input type="hidden" name="_method" value="DELETE">
	        <div class="modal-footer">
	          <a href="#" id="btn_yes" class="btn btn-primary confirm btn-danger" data-dismiss="modal" aria-hidden="true">Tak</a>
	          <a href="#" data-dismiss="modal" aria-hidden="true" class="btn btn-primary secondary">Nie</a>
	        </div>
        </form>
      </div>
    </div>
</div>