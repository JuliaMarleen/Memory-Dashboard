<div class="card-header">Het weer</div>

<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <li>Zonnig</li>
    <img class="img-fluid" src="{{ asset('images/zon.jpg') }}" alt="Zon">
</div>
