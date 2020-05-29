@csrf
<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
<div class="form-group">
    <label for="category_id">Id da categoria</label>
    <input type="text" class="form-control" id="category_id" name="category_id" value="{{ $product->category_id ?? old('category_id') ?? '' }}">
</div>
<div class="form-group">
    <label for="name">Nome do produto</label>
    <input type="text" class="form-control" id="category_id" name="name" value="{{ $product->name ?? old('name') ?? '' }}">
</div>
<div class="form-group">
    <label for="description">Descrição do produto</label>
    <textarea class="form-control" id="description" name="description" rows="5">{{ $product->description ?? old('description') ?? '' }}</textarea>
</div>
<div class="form-group">
    <label for="price">Preço do produto</label>
    <input type="text" class="form-control" id="price" name="price" value="{{ $product->price ?? old('price') ?? '' }}">
</div>
<div class="form-group">
    <label for="images">Preço do produto</label>
    <input type="file" class="form-control" id="images" name="images[]" multiple>
    @foreach ($product->productImage as $image)
        <img src="/storage/{{ $image->image }}" alt="{{ $product->name }}" class="img-fluid">
    @endforeach
</div>
<button type="submit" class="btn btn-success">Salvar</button>