@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">To Remember</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <li>{{ Auth::user()->name }}</li>
                    <li>Appels eten</li>
                    <li>Hon uitlaten</li>
                    <li>Papier</li>
                    <li>Tas</li>
                    <li>Paraplu</li>
                    <li>DUO bellen</li>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">To do</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <li>Eet 3 appels</li>
                    <li>Drink 6 glazen water</li>
                    <li>Maak wiskunde huiswerk</li>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Summer!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img class="img-fluid" src="hawaii.jpg" alt="Hawaii">
                </div>
            </div>
        </div>

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
                <li>Hola</li>
                <li>?Como estaaas?</li>
                <li>Mesaa</li>
                </div>
            </div>
        </div>

                <div class="col-md-4">
            <div class="card">
                <div class="card-header">People to talk to</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <li>Sarah</li>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
