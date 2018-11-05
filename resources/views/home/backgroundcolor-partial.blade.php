<div class="card-header">Background color</div>

<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <p>You can change your background color if you have 5 items in your To Do list!</p>
    <form action="{{ route('color.update') }}" method="post" style="float:left; margin: 20px;">
        <input type="hidden" name="color" value="0" />
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button class="btn btn-primary" type="submit">Pink</button>
    </form>
    <form action="{{ route('color.update') }}" method="post" style="float:left; margin: 20px;">
        <input type="hidden" name="color" value="1" />
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button class="btn btn-primary" type="submit">Blue</button>
    </form>
    <form action="{{ route('color.update') }}" method="post" style="float:left; margin: 20px;">
        <input type="hidden" name="color" value="2" />
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button class="btn btn-primary" type="submit">Green</button>
    </form>

</div>
