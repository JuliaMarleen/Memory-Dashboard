@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card editcard">
                <div class="card-header">
                    Edit
                </div>
                <div class="card-body editcard">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('edit.update') }}" method="post"> 
                        @foreach($motivationalslogan as $s) 
                            Title:<br>
                            <input class="newinputfield" type="text" name="title" value="{{ $s->title }}">
                            <br>
                            Slogan:<br>
                            <input class="newinputfield" type="text" name="slogan" value="{{ $s->slogan }}">
                            <br>
                            Image:<br>
                            <input class="newinputfield" type="text" name="image" value="{{ $s->image }}">
                            <br><br>
                            <input type="hidden" name="id" value="{{ $s->id }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <input type="submit" value="Save">
                        @endforeach
                        1<img class="img-fluid thumbnail" src="{{ asset('images/foto1.jpg') }}" alt="power">
                        2<img class="img-fluid thumbnail" src="{{ asset('images/foto2.jpg') }}" alt="heart">
                        3<img class="img-fluid thumbnail" src="{{ asset('images/foto3.jpg') }}" alt="bulb">
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
