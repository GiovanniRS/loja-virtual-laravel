@csrf
<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
<div class="form-group">
    <label for="name">Nome da categoria</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $category->name ?? old('name') ?? '' }}">
</div>
<button type="submit" class="btn btn-success">Salvar</button>