@if ($errors->any())
    <div class="d-flex justify-content-center">
        <div class="alert alert-danger text-center col-md-6">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif