@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @include('home.motivationalslogan-partial')

        @include('home.todo-partial')

        @include('home.summer-partial')

    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
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
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Spaanse Woordjes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <?php $word = DB::table('spanish')->inRandomOrder()->value('word') ?>
                <?php $translation = DB::table('spanish')->where('word', $word)->value('translation') ?>
                <li> {{ $word }} = {{ $translation }} </li>
                </div>
            </div>
        </div>

                <div class="col-md-4">
            <div class="card">
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
            </div>
        </div>
    </div>
</div>
@endsection
