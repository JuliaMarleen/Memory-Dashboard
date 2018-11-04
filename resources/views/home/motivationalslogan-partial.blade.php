<div class="col-md-4">
    <div class="card">
        <div class="card-header">
            @foreach($motivationalslogan as $s) 
            {{ $s->title }} 
            <a class="edit{{auth::user()->admin}}" href="admin/edit" style="float: right;">Edit</a> 
            @endforeach
        </div>

        <div class="card-body">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @foreach($motivationalslogan as $s) 
            <li>{{ $s->slogan }} </li> 
            <img class="img-fluid" src="{{ asset('images/foto').$s->image.'.jpg' }}" alt="Zon">
            @endforeach
        </div>
    </div>
</div>