<div class="col-md-3 col-sm-12 my-3" id="divProductImage{{ $image->id }}">
    <img src="/storage/{{ $image->image }}" alt="{{ $product->name }}" class="img-fluid">
    <form action="{{ route('products.destroyImage', $image->id) }}" id="deleteProductImage{{ $image->id }}">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger delete-product-image" rel="{{ $image->id }}" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </form>
</div>
