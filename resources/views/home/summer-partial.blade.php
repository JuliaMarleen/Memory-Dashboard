
    <div class="card-header">Summer!</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <img class="img-fluid" src="{{ asset('images/hawaii.jpg') }}" alt="Hawaii">
    </div>