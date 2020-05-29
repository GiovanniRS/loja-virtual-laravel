@if ($errors->any())
    <div class="alert alert-warning">
        <ul>
            @foreach ($errors->all() as $error)
                <li> {{ $error }}
            @endforeach
        </ul>
    </div>
@endif