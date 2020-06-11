<div class="col-md-3 col-sm-12">
    <img src="/storage/{{ $image->image }}" alt="{{ $product->name }}" class="img-fluid">
    <form action="{{ route('products.destroyImage', $image->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">
            <span aria-hidden="true">&times;</span>
        </button>
    </form>
</div>
