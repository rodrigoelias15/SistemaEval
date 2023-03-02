@if(session()->has('mensagem'))
    <div class="alert alert-success text-center">
        {{ session()->get('mensagem') }}
    </div>
@endif
    
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif