<div class="col-md-4">
    <div class="card">
        <div class="card-header">Summer!</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <img class="img-fluid" src="images/hawaii.jpg" alt="Hawaii">
        </div>
    </div>
</div>