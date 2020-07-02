@csrf
<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
<div class="form-group">
    <label for="name">Nome do usuário</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name ?? old('name') ?? '' }}">
</div>
<div class="form-group">
    <label for="name">Email do usuário</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email ?? old('email') ?? '' }}">
</div>
<button type="submit" class="btn btn-success">Salvar</button>