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

                    <li>{{ DB::table('memories')->where('id', '1')->value('priority') }} {{ DB::table('memories')->where('id', '1')->value('name') }} </li>
                    <li>{{ DB::table('memories')->where('id', '2')->value('priority') }} {{ DB::table('memories')->where('id', '2')->value('name') }} </li>
                    <li>{{ DB::table('memories')->where('id', '3')->value('priority') }} {{ DB::table('memories')->where('id', '3')->value('name') }}</li>
                    <li>{{ DB::table('memories')->where('id', '1')->value('priority') }} {{ DB::table('memories')->where('id', '1')->value('name') }}</li>
                    <li>{{ DB::table('memories')->where('id', '1')->value('priority') }} {{ DB::table('memories')->where('id', '1')->value('name') }}</li>
                    <li>{{ DB::table('memories')->where('id', '1')->value('priority') }} {{ DB::table('memories')->where('id', '1')->value('name') }}</li>
                    <li>{{ DB::table('memories')->where('id', '1')->value('priority') }} {{ DB::table('memories')->where('id', '1')->value('name') }}</li>
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

                    <?php $names = DB::table('todo')->pluck('name');
                    foreach ($names as $name) {?>
                        <li>{{ $name }}</li>
                    <?php
                    }
                    ?>

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
                    <img class="img-fluid" src="zon.jpg" alt="Hawaii">
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
